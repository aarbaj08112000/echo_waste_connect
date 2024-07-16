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
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];

       
        return $ret_data;
    }

    public function get_supplier_data($condition_arr = [],
        $search_params = "")
     {

        $this->db->select('s.*');
        $this->db->from('supplier as s');
        if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
        }
        if (is_array($search_params) && count($search_params) > 0) {
            if ($search_params["supplier_name"] != "") {
                $this->db->where("s.id", $search_params["supplier_name"]);
            }
            if ($search_params["admin_approve"] != "") {
                $this->db->where("s.admin_approve", $search_params["admin_approve"]);
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
        // pr($this->db->last_query(),1);
        return $ret_data;
    }
    public function get_supplier_data_count(
        $condition_arr = [],
        $search_params = ""
    ) {

        $this->db->select('COUNT(s.id) as total_record');
        $this->db->from('supplier as s');
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];

       
        return $ret_data;
    }
    public function get_supplier_details($supplier_id = '') {

        $this->db->select('s.*');
        $this->db->from('supplier as s');
        $this->db->where("s.id",$supplier_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }
    public function update_supplier_data($update_data= array(),$supplier_id = ''){
        $this->db->where('id', $supplier_id);
        $this->db->update('supplier', $update_data);
        $this->db->affected_rows();
        $affected_rows = $this->db->affected_rows() == 0 ? 1 : $this->db->affected_rows();
        return $affected_rows;
    }
    public function get_child_part_details($child_part_id = '') {

        $this->db->select('c.*');
        $this->db->from('child_part_master as c');
        $this->db->where("c.id",$child_part_id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }
    public function update_child_part_data($update_data= array(),$supplier_child_part_id = ''){
        $this->db->where('id', $supplier_child_part_id);
        $this->db->update('child_part_master', $update_data);
        $this->db->affected_rows();
        $affected_rows = $this->db->affected_rows() == 0 ? 1 : $this->db->affected_rows();
        return $affected_rows;
    }
    
}

?>
