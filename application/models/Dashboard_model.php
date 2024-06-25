<?php
class Dashboard_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function get_widgets($tab_name = '',$widget_name = '')
	 {
	    $this->db->select('w.*');
	    $this->db->from('widget as w');
	    $this->db->where('w.tab_name',$tab_name);
	    if($widget_name != '' && $widget_name != null){
	    	$this->db->where('w.widget_name',$widget_name);
	    }
	    $result_obj = $this->db->get();
	    $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
	    return $ret_data;
	  }

    
}

?>
