<?php
class Welcome_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function get_child_part_supplier($condition_arr = [],
        $search_params = "")
	 {

	    $this->db->select('gs.id as gs_id,gs.code as gs_code,u.uom_name as uom_name,s.supplier_name as supplier_name,s.supplier_name as with_in_state,cpm.*');
	    $this->db->from('child_part_master as cpm');
	    $this->db->join('child_part child','cpm.part_number = child.part_number','left');
	    $this->db->join('supplier s','s.id = cpm.supplier_id','left');
	    $this->db->join('uom u','u.id = cpm.uom_id','left');
	    $this->db->join('gst_structure gs','gs.id = cpm.gst_id','left');
	    $this->db->join('child_part_master cpm2','cpm.supplier_id = cpm2.supplier_id
				AND cpm.child_part_id = cpm2.child_part_id
				AND cpm.id < cpm2.id','left');
	    $this->db->where('cpm2.id',NULL);
	    if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
        }
        if (is_array($search_params) && count($search_params) > 0) {
            if ($search_params["part_number"] != "") {
                $this->db->where("cpm.child_part_id", $search_params["part_number"]);
            }
            // if ($search_params["part_description"] != "") {
            //     $this->db->like(
            //         "cp.part_description",
            //         $search_params["part_description"]
            //     );
            // }
        }
	    $result_obj = $this->db->get();
	    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];

	    return $ret_data;
	}
	public function get_child_part_supplier_count(
        $condition_arr = [],
        $search_params = ""
    ) {

        $this->db->select('COUNT(gs.id) as total_record');
	    $this->db->from('child_part_master as cpm');
	    $this->db->join('child_part child','cpm.part_number = child.part_number','left');
	    $this->db->join('supplier s','s.id = cpm.supplier_id','left');
	    $this->db->join('uom u','u.id = cpm.uom_id','left');
	    $this->db->join('gst_structure gs','gs.id = cpm.gst_id','left');
	    $this->db->join('child_part_master cpm2','cpm.supplier_id = cpm2.supplier_id
				AND cpm.child_part_id = cpm2.child_part_id
				AND cpm.id < cpm2.id','left');
	    $this->db->where('cpm2.id',NULL);
	
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }

    public function getPlanningReportView($condition_arr = [],$search_params = ""){
        $month_number = $search_params['month'] != '' ? $this->get_month_number($search_params['month']) : date('m'); ;
        $year_number = $search_params['year'] != '' ? substr($search_params['year'], 3) : date('Y') ;
       
        $this->db->select('
        p.id AS planing_id,
        p.financial_year,
        p.month,
        p.clientId,
        cp.id AS customer_part_id,cp.*,
        cp.customer_id,
        c.id AS customer_id,
        c.*,
        cp_rate.rate,
        pd.schedule_qty,
        pd.schedule_qty_2,
        SUM(jc.req_qty) AS job_card_qty,
        COUNT(ns.id) AS dispatch_sales_qty,
        CASE
            WHEN pd.schedule_qty IS NOT NULL AND cp_rate.rate IS NOT NULL THEN pd.schedule_qty * cp_rate.rate
            ELSE 0
        END AS subtotal1,
        CASE
            WHEN pd.schedule_qty_2 IS NOT NULL AND cp_rate.rate IS NOT NULL THEN pd.schedule_qty_2 * cp_rate.rate
            ELSE 0
        END AS subtotal2
    ', false);
    
    $this->db->from('planing p');
    $this->db->join('customer_part cp', 'p.customer_part_id = cp.id', 'left');
    $this->db->join('customer c', 'cp.customer_id = c.id', 'left');
    $this->db->join('customer_part_rate cp_rate', 'cp.id = cp_rate.customer_master_id', 'left');
    $this->db->join('planing_data pd', 'p.id = pd.planing_id', 'left');
    $this->db->join('job_card jc', 'cp.id = jc.customer_part_id AND jc.status = "released"', 'left');
    $this->db->join('new_sales ns', 'MONTH(ns.created_date) = '.$month_number.' AND YEAR(ns.created_date) = '.$year_number.'', 'left');
    $this->db->where('p.clientId', $this->Unit->getSessionClientId());
    if(is_valid_array($search_params) && $search_params['year'] != ''){
        $this->db->where('p.financial_year',$search_params['year'] );
    }
    if(is_valid_array($search_params) && $search_params['month'] != ''){
        $this->db->where('p.month', $search_params['month']);
    }

    if(is_valid_array($search_params) && $search_params['customer'] > 0){
        $this->db->where('c.id', $search_params['customer']);
    }
    
    $this->db->group_by(array('p.id', 'cp.id', 'c.id', 'cp_rate.rate', 'pd.schedule_qty', 'pd.schedule_qty_2'));
   
    
        if($condition_arr["order_by"] == ''){    
            $this->db->order_by('p.id', 'DESC');
        }
        if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
        }
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        // pr($this->db->last_query(),1);   
        return $ret_data;
    }

    public function getPlanningReportViewCount( $condition_arr = [],$search_params = ""){
        $month_number = $search_params['month'] != '' ? $this->get_month_number($search_params['month']) : date('m'); ;
        $year_number = $search_params['year'] != '' ? substr($search_params['year'], 3) : date('Y') ;
        $this->db->select('count(p.id)');
        $this->db->from('planing p');
        $this->db->join('customer_part cp', 'p.customer_part_id = cp.id', 'left');
        $this->db->join('customer c', 'cp.customer_id = c.id', 'left');
        $this->db->join('customer_part_rate cp_rate', 'cp.id = cp_rate.customer_master_id', 'left');
        $this->db->join('planing_data pd', 'p.id = pd.planing_id', 'left');
        $this->db->join('job_card jc', 'cp.id = jc.customer_part_id AND jc.status = "released"', 'left');
        $this->db->join('new_sales ns', 'MONTH(ns.created_date) = '.$month_number.' AND YEAR(ns.created_date) = '.$year_number.'', 'left');
        $this->db->where('p.clientId', $this->Unit->getSessionClientId());
        
        if(is_valid_array($search_params) && $search_params['year'] != ''){
            $this->db->where('p.financial_year',$search_params['year'] );
        }
        if(is_valid_array($search_params) && $search_params['month'] != ''){
            $this->db->where('p.month', $search_params['month']);
        }
    
        if(is_valid_array($search_params) && $search_params['customer'] > 0){
            $this->db->where('c.id', $search_params['customer']);
        }
        
        $this->db->group_by(array('p.id', 'cp.id', 'c.id', 'cp_rate.rate', 'pd.schedule_qty', 'pd.schedule_qty_2'));
        if($condition_arr["order_by"] == ''){    
            $this->db->order_by('p.id', 'DESC');
        }
       
        
        // $this->db->order_by('s.id', 'DESC');

        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];        
        return $ret_data;
    }

    public function get_month_number($get_month)
	{
       
		if ($get_month == "APR") {
			return 4;
		} else if ($get_month == "MAY") {
			return 5;
		} else if ($get_month == "JUN") {
			return 6;
		} else if ($get_month == "JUL") {
			return 7;
		} else if ($get_month == "AUG") {
			return 8;
		} else if ($get_month == "SEP") {
			return 9;
		} else if ($get_month == "OCT") {
			return 10;
		} else if ($get_month == "NOV") {
			return 11;
		} else if ($get_month == "DEC") {
			return 12;
		} else if ($get_month == "JAN") {
			return 1;
		} else if ($get_month == "FEB") {
			return 2;
		} else if ($get_month == "MAR") {
			return 3;
		}
	}

    public function getSubConReportView($condition_arr = [],$search_params = ""){
       
       
        $this->db->select('
        cp.id AS challan_part_id,cp.part_id,cp.challan_id, cp.qty,cp.remaning_qty,cp.process,chn.challan_number,
        cp.remaning_qty,chn.created_date,
        chp.part_number, 
        chp.part_description,
        chn.supplier_id, 
        sup.supplier_name,
        cpm.part_rate
        ');
        $this->db->from('challan_parts cp');
        $this->db->join('child_part chp', 'cp.part_id = chp.id', 'left');
        $this->db->join('challan chn', 'cp.challan_id = chn.id', 'left');
        $this->db->join('supplier sup', 'chn.supplier_id = sup.id', 'left');
        $this->db->join('child_part_master cpm', 'chp.part_number = cpm.part_number', 'left');
        if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
        }
        if(is_valid_array($search_params) && $search_params['part_number'] != ''){
            $this->db->where('chp.part_number',$search_params['part_number'] );
        }
        if(is_valid_array($search_params) && $search_params['suppler'] != ''){
            $this->db->where('chn.supplier_id', $search_params['suppler']);
        }
        // $this->db->group_by('cpm.part_rate');
        // if(is_valid_array($search_params) && $search_params['customer'] > 0){
        //     $this->db->where('c.id', $search_params['customer']);
        // }
        
        //  $this->db->group_by(array('p.id', 'cp.id', 'c.id', 'cp_rate.rate', 'pd.schedule_qty', 'pd.schedule_qty_2'));
   
    
        // if($condition_arr["order_by"] == ''){    
        //     $this->db->order_by('p.id', 'DESC');
        // }
        // if (count($condition_arr) > 0) {
        //     $this->db->limit($condition_arr["length"], $condition_arr["start"]);
        //     if ($condition_arr["order_by"] != "") {
        //         $this->db->order_by($condition_arr["order_by"]);
        //     }
        // }
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        // pr($this->db->last_query(),1);   
        return $ret_data;
    }

    public function getSubConReportViewCount( $condition_arr = [],$search_params = ""){
       
        
        $this->db->select('
        Count(cp.id)  as tot_count
        ');
        $this->db->from('challan_parts cp');
        $this->db->join('child_part chp', 'cp.part_id = chp.id', 'left');
        $this->db->join('challan chn', 'cp.challan_id = chn.id', 'left');
        $this->db->join('supplier sup', 'chn.supplier_id = sup.id', 'left');
        $this->db->join('child_part_master cpm', 'cp.part_id = cpm.child_part_id', 'left');
        //$this->db->where('cpm.condition', $condition); // Replace $condition with the actual condition
        // $this->db->order_by('cp.id', 'desc');
        
        
        // if(is_valid_array($search_params) && $search_params['year'] != ''){
        //     $this->db->where('p.financial_year',$search_params['year'] );
        // }
        if(is_valid_array($search_params) && $search_params['part_number'] != ''){
            $this->db->where('chp.part_number',$search_params['part_number'] );
        }
        if(is_valid_array($search_params) && $search_params['suppler'] != ''){
            $this->db->where('chn.supplier_id', $search_params['suppler']);
        }
        
        // $this->db->group_by(array('p.id', 'cp.id', 'c.id', 'cp_rate.rate', 'pd.schedule_qty', 'pd.schedule_qty_2'));
        // if($condition_arr["order_by"] == ''){    
        //     $this->db->order_by('p.id', 'DESC');
        // }
       
        // $this->db->group_by('cpm.part_rate');
        // $this->db->order_by('s.id', 'DESC');
        $result_obj = $this->db->get();
        // pr($this->db->last_query(),1);   
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];        
        return $ret_data;
    }

    public function getCustomerPartNumber(){
        $this->db->select('id,part_number as part');
        $this->db->from('customer_parts_master');
        $object = $this->db->get();
        $result_data = is_object($object) ? $object->result_array() : [] ;
        return $result_data;
    }

    public function getDataForCustomerParts($condition_arr = [],$search_params = []){
        $this->db->select('c.id ,c.part_number as part_number,c.part_description as part_description,c.old_fg_stockx as fg_stock,c.fg_rate as fg_rate ,stock.fg_rate as stock_rate');
        $this->db->from('customer_parts_master as c');
        $this->db->join('customer_parts_master_stock stock', 'c.id = stock.customer_parts_master_id AND stock.clientId = ' . $this->db->escape($this->Unit->getSessionClientId()), 'left');
        if(is_valid_array($search_params) && $search_params['part'] > 0){
            $this->db->where('c.id', $search_params['part']);
        }
         if($condition_arr["order_by"] == ''){    
                $this->db->order_by('c.id', 'DESC');
            }
        
        if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
        }
        $object = $this->db->get();
        $result_data = is_object($object) ? $object->result_array() : [] ;
        return $result_data;
    }

    public function getDataForCustomerPartsCount($condition_arr = [],$search_params = []){
        $this->db->select('count(id) as total_count');
        $this->db->from('customer_parts_master');
        if(is_valid_array($search_params) && $search_params['part'] > 0){
            $this->db->where('id', $search_params['part']);
        }
        $object = $this->db->get();
        $result_data = is_object($object) ? $object->row_array() : [] ;
        return $result_data;
    }

    
}

?>
