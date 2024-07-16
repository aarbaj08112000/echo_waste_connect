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
        $this->db->select('
            p.*, 
            cp.id AS customer_part_id, 
            cp.customer_id AS customer_part_customer_id, 
            cpr.customer_master_id AS customer_part_rate_id, 
            c.id AS customer_id, 
            jc.customer_part_id AS job_card_customer_part_id, 
            pd.planing_id AS planing_data_new_id
        ');
        $this->db->from('planing p');
        $this->db->join('customer_part cp', 'cp.id = p.customer_part_id', 'left');
        $this->db->join('customer_part_rate cpr', 'cpr.customer_master_id = cp.id', 'left');
        $this->db->join('customer c', 'c.id = cp.customer_id', 'left');
        $this->db->join('job_card jc', 'jc.customer_part_id = cp.customer_id', 'left');
        $this->db->join('planing_data pd', 'pd.planing_id = p.id', 'left');
        $this->db->where('(cp.admin_approve = \'accept\' OR cp.admin_approve IS NULL)');
        // $this->db->where_in('p.<condition>', <value>);  // Replace <condition> and <value> as appropriate
        $this->db->order_by('p.id', 'DESC');
        // if(is_valid_array($search_params) && $search_params['customer_part_id'] > 0){
        //     $this->db->where('s.customer_id', $search_params['customer_part_id']);
        // }
        // pr($condition_arr,1);
        if($condition_arr["order_by"] == ''){    
            $this->db->order_by('s.id', 'DESC');
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
        $this->db->select('count(pid)');
        $this->db->from('planing p');
        $this->db->join('customer_part cp', 'cp.id = p.customer_part_id', 'left');
        $this->db->join('customer_part_rate cpr', 'cpr.customer_master_id = cp.id', 'left');
        $this->db->join('customer c', 'c.id = cp.customer_id', 'left');
        $this->db->join('job_card jc', 'jc.customer_part_id = cp.customer_id', 'left');
        $this->db->join('planing_data pd', 'pd.planing_id = p.id', 'left');
        $this->db->where('(cp.admin_approve = \'accept\' OR cp.admin_approve IS NULL)');
        // $this->db->where_in('p.<condition>', <value>);  // Replace <condition> and <value> as appropriate
        $this->db->order_by('p.id', 'DESC');
        if(is_valid_array($search_params) && $search_params['customer_part_id'] > 0){
            $this->db->where('s.customer_id', $search_params['customer_part_id']);
        }
        
        // $this->db->order_by('s.id', 'DESC');

        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];        
        return $ret_data;
    }

    
}

?>
