<?php
class SupplierParts extends CI_Model {
        
    public function __construct() {
    }
    
    /**
     * Check whether record exists
     */

    public function isRecordExists($data){
        $rows = $this->Crud->read_data_where("child_part",$data);
        if($rows!=0){
             return true;
        }
         return false;
    }

    /**
     * Check whether stock entry is there for supplier part
     */
    public function isStockRecordExists($data){
        $rows = $this->Crud->read_data_where("child_part_stock",$data);
        if($rows!=0){
             return true;
        }
         return false;
    }

    /**
     * This would be more towards Select widget to  get minimal fields
     */
    public function getUniquePartNumber(){
       return $this->Crud->customQuery('SELECT DISTINCT id, part_number FROM `child_part` ');
    }

    /**
     * Just need some basic supplier parts information for display
     */
    public function readSupplierPartsOnly() {
        $part_details = $this->Crud->customQuery("SELECT parts.*
            FROM  child_part parts
            ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Read all the parts with stock
     */
    public function readSupplierParts() {
        $part_details = $this->Crud->customQuery("SELECT parts.*, stock.* 
            FROM  child_part parts
            LEFT JOIN child_part_stock stock
            ON parts.id = stock.childPartId 
            AND stock.clientId = ".$this->Unit->getSessionClientId()." 
            ORDER BY parts.id desc");
        return $part_details;
    }


     /**
     * Read all the parts with stock which are not Subcon type
     */
    public function readSupplierPartsNotSubcon() {
        $part_details = $this->Crud->customQuery("SELECT parts.*, stock.* 
            FROM  child_part parts
            LEFT JOIN child_part_stock stock
            ON parts.id = stock.childPartId 
            AND stock.clientId = ".$this->Unit->getSessionClientId()." 
            AND parts.sub_type not in ('Subcon grn', 'Subcon Regular') ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Read specific part details without stock
     */
    public function getSupplierPartOnlyById($id) {
        $part_details = $this->Crud->customQuery("SELECT parts.*
            FROM  child_part parts
            WHERE parts.id = ".$id."
            ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Read specific part details including stock
     */
    public function getSupplierPartById($id, $unitId=null) {
        if(empty($unitId)){
            $unitId = $this->Unit->getSessionClientId() ;
        }
        $part_details = $this->Crud->customQuery("SELECT parts.*, stock.* 
            FROM  child_part parts
            LEFT JOIN child_part_stock stock
            ON parts.id = stock.childPartId
            AND stock.clientId = " . $unitId . " 
            WHERE parts.id = ".$id."
            ORDER BY parts.id desc");
        return $part_details;
    }


     /**
     * Read specific part details including stock
     */
    public function getSupplierPartByPartNumber($partNumber) {
        $part_details = $this->Crud->customQuery("SELECT parts.*, stock.* 
            FROM  child_part parts
            LEFT JOIN child_part_stock stock
            ON parts.id = stock.childPartId
            AND stock.clientId = " . $this->Unit->getSessionClientId() . " 
            WHERE parts.part_number = '".$partNumber."'
            ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Update part basic infromation
     */
    public function updatePartById($update_data, $id) {
       return $this->Crud->update_data("child_part", $update_data, $id);
    }

    /**
     * Update part basic information per criteria
     */
    public function updatePartByCriteria($update_data, $criteria, $id ) {
        return $this->Crud->update_data_column("child_part", $update_data, $id, $criteria);
    }

    /**
     * Update stock information for a part
     */
    public function updateStockById($update_data, $id, $clientId=null) {
        if(empty($clientId)){
                $data = array(
                    "childPartId" => $id
                );
        }else { //need to explicitly update with specific clientId
            $data = array(
                "childPartId" => $id
            );
        }

        if($this->isStockRecordExists($data)){
            return $this->Crud->update_data_column("child_part_stock", $update_data, $id, "childPartId", $clientId);
        }else{
            $stockResult = $this->createStockRecord($id, $update_data); //First insert record and then update
        }       
    }


    /**
     * Get part information with stock based on part number
     */
    public function getSupplierPartByPartNo($part_number) {
        $part_details = $this->Crud->customQuery("SELECT parts.*, stock.* 
            FROM  child_part parts
                INNER JOIN child_part_stock stock
                ON parts.id = stock.childPartId
                AND stock.clientId = " . $this->Unit->getSessionClientId() . "
                AND parts.part_number = '".$part_number."'
                ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Create supplier part entry including stock
     */
   public function createSupplierPart($data) {
    $data = array(
                "part_number" => $data["part_number"],
                "part_description" => $data["part_description"],
                "supplier_id" => $data["supplier_id"],
                "part_rate" => $data["part_rate"],
                "uom_id" => $data["uom_id"],
                "revision_no" => $data["revision_no"],
                "child_part_id" => $data["child_part_id"],
                "hsn_code" => $data["hsn_code"],
                "safty_buffer_stk" =>  $data["safty_buffer_stk"],
                "store_stock_rate" => $data["store_stock_rate"],
                "store_rack_location" => $data["store_rack_location"],
                "revision_remark" => $data["revision_remark"],
                "part_drawing" => $data["part_drawing"],
                "grade" => $data["grade"],
                "modal_document" => $data["modal_document"],
                "cad_file" => $data["cad_file"],
                "gst_id" => $data["gst_id"],
                "weight" => $data["weight"],
                "size" => $data["size"],
                "thickness" => $data["thickness"],
                "revision_date" => $data["revision_date"],
                "sub_type" => $data["sub_type"],
                "max_uom" => $data["max_uom"],
                "min_uom" => $data["min_uom"],
                "created_id" => $this->user_id,
                "date" => $this->current_date,
                "time" => $this->current_time,
            );
            $newRecordId = $this->Crud->insert_data("child_part", $data);
           
            if($newRecordId > 0) {
                return $this->createStockRecord($newRecordId, $data);
            }

            return 0;
    }


    /**
     * Insert new stock record
     */
    public function createStockRecord($supplierPartId, $data){
             $stockData = array(
                    "childPartId" => $supplierPartId,
                    "clientId"  =>  $this->Unit->getSessionClientId(),
                    "stock"  => empty($data["stock"])? 0 : $data["stock"],
                    "safty_buffer_stk" =>  empty($data["safty_buffer_stk"])? 0 : $data["safty_buffer_stk"],
                 //   "store_stock_rate" => empty($data["store_stock_rate"])? 0 : $data["store_stock_rate"],
                    "onhold_stock" => empty($data["onhold_stock"])? 0 : $data["onhold_stock"],
                    "production_qty"  => empty($data["production_qty"])? 0 : $data["production_qty"],
                    "rejection_prodcution_qty" => empty($data["rejection_prodcution_qty"])? 0 : $data["rejection_prodcution_qty"],
                    "sub_con_stock"  => empty($data["sub_con_stock"])? 0 : $data["sub_con_stock"],
                    "rejection_stock"  => empty($data["rejection_stock"])? 0 : $data["rejection_stock"],
                    "sharing_qty"  => empty($data["sharing_qty"])? 0 : $data["sharing_qty"],
                    "machine_mold_issue_stock" => empty($data["machine_mold_issue_stock"])? 0 : $data["machine_mold_issue_stock"],
                    "production_scrap"  => empty($data["production_scrap"])? 0 : $data["production_scrap"],
                    "production_rejection" => empty($data["production_rejection"])? 0 : $data["production_rejection"],
                    "deflashing_stock" => empty($data["deflashing_stock"])? 0 : $data["deflashing_stock"],
                    "created_id" => $this->user_id,
                    "date" => $this->current_date,
                    "time" => $this->current_time
                );
            
            $result = $this->Crud->insert_data("child_part_stock", $stockData);
            
        return $result;
    }

}
?>