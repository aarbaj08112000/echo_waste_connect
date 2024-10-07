<?php
class MagrationScript_Model extends CI_Model {
    
    public function __construct() {
    }
    public function get_sales($date = '')
    {
        $unit_condition = '';
        // if($this->unit > 0){
        //     $unit_condition = "AND ns.clientId = $this->unit";
        // }
        $this->db->select('SUM(sp.basic_total) as basic_total,c.customer_name as customer_name,sp.customer_id');
        $this->db->from('sales_parts as sp');
        $this->db->join('new_sales as ns', 'ns.id = sp.sales_id AND ns.status = "lock" AND ns.sales_number != "%TEMP%" '.$unit_condition);
        $this->db->join('customer as c', 'c.id = sp.customer_id', 'left');
        $this->db->where("ns.created_date",$date);
        $this->db->group_by('ns.customer_id');
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        // pr($this->db->last_query());
        return $ret_data;
    }
    public function get_current_month_sales_block($month = '')
    {
        $unit_condition = '';
        // if($this->unit > 0){
        //     $unit_condition = "AND ns.clientId = $this->unit";
        // }
        $this->db->select('SUM(sp.basic_total) as basic_total,c.customer_name as customer_name,sp.customer_id');
        $this->db->from('sales_parts as sp');
        $this->db->join('new_sales as ns', 'ns.id = sp.sales_id AND ns.status = "lock" AND ns.sales_number != "%TEMP%" '.$unit_condition);
        $this->db->join('customer as c', 'c.id = sp.customer_id', 'left');
        $this->db->where("ns.created_month",$month);
        $this->db->where("ns.created_year",date("Y"));
        $this->db->group_by('sp.customer_id');
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        // pr($this->db->last_query());
        return $ret_data;
    }
    



}
?>