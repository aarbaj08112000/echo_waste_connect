<?php
class CustomerPart extends CI_Model {
    	
    public function __construct() {
    }
	
    /**
     * Check whether record exists
     */

    public function isRecordExists($data){
        $rows = $this->Crud->read_data_where("customer_parts_master",$data);
        if($rows!=0){
             return true;
        }
         return false;
    }

    /**
     * Check whether stock entry is there for supplier part
     */
    public function isStockRecordExists($data){
        $rows = $this->Crud->read_data_where("customer_parts_master_stock",$data);
        if($rows!=0){
             return true;
        }
         return false;
    }

    /**
     * This would be more towards Select widget to  get minimal fields
     */
    public function getUniquePartNumber(){
       return $this->Crud->customQuery('SELECT DISTINCT id, part_number, part_description FROM `customer_parts_master` ');
    }

    /**
     * Just need some basic supplier parts information for display
     */
    public function readCustomerPartsOnly() {
        $part_details = $this->Crud->customQuery("SELECT parts.*
            FROM  customer_parts_master parts
            ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Read all the parts with stock
     */
    public function readCustomerParts() {
        $part_details = $this->Crud->customQuery("SELECT parts.*, stock.* 
            FROM  customer_parts_master parts
            LEFT JOIN customer_parts_master_stock stock
            ON parts.id = stock.customer_parts_master_id 
            AND stock.clientId = ".$this->Unit->getSessionClientId()." 
            ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Read specific part details without stock
     */
    public function getCustomerPartOnlyById($id) {
        $part_details = $this->Crud->customQuery("SELECT parts.*
            FROM  customer_parts_master parts
            WHERE parts.id = ".$id."
            ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Read specific part details including stock
     */
    public function getCustomerPartById($id) {
        $part_details = $this->Crud->customQuery("SELECT parts.*, stock.* 
            FROM  customer_parts_master parts
            LEFT JOIN customer_parts_master_stock stock
            ON parts.id = stock.customer_parts_master_id
            AND stock.clientId = " . $this->Unit->getSessionClientId() . " 
            WHERE parts.id = ".$id."
            ORDER BY parts.id desc");
        return $part_details;
    }


     /**
     * Read specific part details including stock
     */
    public function getCustomerPartByPartNumber($partNumber) {
        $part_details = $this->Crud->customQuery("SELECT parts.id as part_id, parts.*, stock.* 
            FROM  customer_parts_master parts
            LEFT JOIN customer_parts_master_stock stock
            ON parts.id = stock.customer_parts_master_id
            AND stock.clientId = " . $this->Unit->getSessionClientId() . " 
            WHERE parts.part_number = '".$partNumber."'
            ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Update part basic infromation
     */
    public function updatePartById($update_data, $id) {
       return $this->Crud->update_data("customer_parts_master", $update_data, $id);
    }

    /**
     * Update part basic information per criteria
     */
    public function updatePartByCriteria($update_data, $criteria, $id ) {
        return $this->Crud->update_data_column("customer_parts_master", $update_data, $id, $criteria);
    }

    /**
     * Update stock information for a part
     */
    public function updateStockById($update_data, $id) {
        $data = array(
            "customer_parts_master_id" => $id
        );
        if($this->isStockRecordExists($data)){
            return $this->Crud->update_data_column("customer_parts_master_stock", $update_data, $id, "customer_parts_master_id ");
        }else{
            $stockResult = $this->createStockRecord($id,$update_data); //First insert record and then update
            if($stockResult){
                return $this->Crud->update_data_column("customer_parts_master_stock", $update_data, $id, "customer_parts_master_id ");
            }
        }       
    }

    

    /**
     * Get part information with stock based on part number
     */
    public function getCustomerPartByPartNo($part_number) {
        $part_details = $this->Crud->customQuery("SELECT parts.*, stock.* 
            FROM  customer_parts_master parts
                INNER JOIN customer_parts_master_stock stock
                ON parts.id = stock.customer_parts_master_id
                AND stock.clientId = " . $this->Unit->getSessionClientId() . "
                AND parts.part_number = '".$part_number."'
                ORDER BY parts.id desc");
        return $part_details;
    }

    /**
     * Create Customer Part Master entry including stock
     */
   public function createCustomerPart($data) {
    $data = array(
				"part_number" => $data["part_number"],
				"part_description" => $data["part_description"],
			    "created_id" => $this->user_id,
				"date" => $this->current_date,
				"time" => $this->current_time,
			);
			$newRecordId = $this->Crud->insert_data("customer_parts_master", $data);
           
            if($newRecordId > 0) {
                return $this->createStockRecord($newRecordId, $data);
            }

            return 0;
    }


    /**
     * Insert new stock record
     */
    public function createStockRecord($partId, $data){
             $stockData = array(
                    "customer_parts_master_id" => $partId,
                    "clientId"  =>  $this->Unit->getSessionClientId(),
                    "fg_stock"  => empty($data["fg_stock"])? 0 : $data["fg_stock"],
                    "fg_rate" =>  empty($data["fg_rate"])? 0 : $data["fg_rate"],
                    "molding_production_qty" => empty($data["molding_production_qty"])? 0 : $data["molding_production_qty"],
                    "production_rejection" => empty($data["production_rejection"])? 0 : $data["production_rejection"],
                    "production_scrap"  => empty($data["production_scrap"])? 0 : $data["production_scrap"],
                    "semi_finished_location" => empty($data["semi_finished_location"])? 0 : $data["semi_finished_location"],
                    "deflashing_assembly_location"  => empty($data["deflashing_assembly_location"])? 0 : $data["deflashing_assembly_location"],
                    "final_inspection_location"  => empty($data["final_inspection_location"])? 0 : $data["final_inspection_location"],
                    "created_id" => $this->user_id,
                    "date" => $this->current_date,
				    "time" => $this->current_time
                );
            
            $result = $this->Crud->insert_data("customer_parts_master_stock", $stockData);
            
        return $result;
    }

    // molding code

    public function getCustomerPartsMolding(){
        
        $this->db->select('*,sum(mp.qty) as tot');
        $this->db->from('mold_maintenance mm');
        $this->db->join('customer_part cp','mm.customer_part_id = cp.id','left');
        $this->db->join('customer c','cp.customer_id = c.id','left');
        $this->db->join(' molding_production mp','mp.mold_id = mm.id AND mp.customer_part_id = mm.customer_part_id','left');
        $this->db->group_by('mm.customer_part_id, mm.mold_name');
        $this->db->order_by('mm.id', 'DESC');
        $query = $this->db->get();
        $data = is_object($query) ? $query->result_array() : [];
        return $data;
    }

}
?>