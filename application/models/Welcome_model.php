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

    
}

?>
