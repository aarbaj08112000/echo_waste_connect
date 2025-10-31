<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Citizen_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function getUserData(){
        $this->db->select('u.*');
        $this->db->from('citizen as u');
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function get_citizen_details($email ="")
	{
		$this->db->select('*');
		$this->db->from('citizen u');
		$this->db->where('u.email', $email);
		$query = $this->db->get();
		$data = is_object($query) ? $query->row_array() : [];
        return $data;
	}
    public function insertCitizen($insert_date = array()){
        $this->db->insert("citizen", $insert_date);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    public function updateCitizenData($update_date = array(),$citizen_id = 0){
        $this->db->where('citizen_id', $citizen_id);
        $this->db->update('citizen', $update_date);
        $affected_rows = $this->db->affected_rows() == 0 ? 1 : $this->db->affected_rows();
        return $affected_rows;
    }

	public function getGroupData($group_id = 0){
        $this->db->select('g.*');
        $this->db->from('group_master as g');
        if($group_id > 0){
             $this->db->where("g.group_master_id",$group_id);
        }
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function insertGarbagePickupRequest($insert_date = array()){
        $this->db->insert("garbage_pickup_request", $insert_date);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    /* school listing */
    public function getGarbagePickupRequestData($condition_arr = [],$search_params = "",$is_deleted = 0){
        
        $this->db->select('sm.*,sm.garbage_pickup_request_id as request_code');
        $this->db->from('garbage_pickup_request sm');
        // $this->db->join('form_data_collection as fdc','fdc.school_master_id = sm.school_id','left');
        // $this->db->join('userinfo as ua','ua.id = sm.channel_patner_id','left');
        if($this->session->userdata("role") == "citizen"){
            $this->db->where('sm.added_by',$this->session->userdata("user_id"));
        }
        if($this->session->userdata("role") == "staff"){
            $this->db->where('sm.staff_id',$this->session->userdata("user_id"));
        }
        // $this->db->where('sm.is_delete',$is_deleted);
        if (!empty($search_params['value'])) {
            $keyword = $search_params['value'];
            $this->db->group_start(); // Start a group of OR conditions
    
            $fields = [
                'sm.type_of_waste', // Replace 'some_field' with actual fields in 'customer_po_tracking' you want to search
                'sm.type_of_waste',
                'sm.pickup_date',
                'sm.time_slot',
                'sm.location',
                'sm.status'
            ];
    
            foreach ($fields as $field) {
                $this->db->or_like($field, $keyword);
            }
    
            $this->db->group_end(); // End the group of OR conditions
        }
        
        if (count($condition_arr) > 0) {
            if($condition_arr["length"] > 0 ){
                $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            }
            
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }else{
                $this->db->order_by("sm.garbage_pickup_request_id","DESC");
            }
        }
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        // pr($this->db->last_query(),1);
        return $ret_data;
    }

    public function getGarbagePickupRequestDataCount($condition_arr = [],$search_params = "",$is_deleted = 0){
        
        $this->db->select('COUNT(sm.garbage_pickup_request_id) as total_record');
        $this->db->from('garbage_pickup_request sm');
        // $this->db->join('userinfo as ua','ua.id = sm.channel_patner_id','left');
        if($this->session->userdata("role") == "citizen"){
            $this->db->where('sm.added_by',$this->session->userdata("user_id"));
        }
        if($this->session->userdata("role") == "staff"){
            $this->db->where('sm.staff_id',$this->session->userdata("user_id"));
        }
        if (!empty($search_params['value'])) {
            $keyword = $search_params['value'];
            $this->db->group_start(); // Start a group of OR conditions
    
            $fields = [
                'sm.type_of_waste', // Replace 'some_field' with actual fields in 'customer_po_tracking' you want to search
                'sm.type_of_waste',
                'sm.pickup_date',
                'sm.time_slot',
                'sm.location',
                'sm.status'
            ];
    
            foreach ($fields as $field) {
                $this->db->or_like($field, $keyword);
            }
    
            $this->db->group_end(); // End the group of OR conditions
        }
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        // pr($this->db->last_query(),1);
        return $ret_data;
    }
    public function garbagePickupRequestDetails($id = 0){
        $this->db->select('g.*,IF(g.added_by_type = "Citizen",c.name,u.user_name) as added_by_name,IF(g.added_by_type = "Citizen",c.email,u.user_email) as email');
        $this->db->from('garbage_pickup_request as g');
        $this->db->join('userinfo as u','u.id = g.added_by AND g.added_by_type = "Staff"','left');
        $this->db->join('citizen as c','c.citizen_id = g.added_by AND g.added_by_type = "Citizen"','left');
        $this->db->where('g.garbage_pickup_request_id',$id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }
    public function updateGarbagePickupRequest($update_date = array(),$garbage_pickup_request_id = 0){
        $this->db->where('garbage_pickup_request_id', $garbage_pickup_request_id);
        $this->db->update('garbage_pickup_request', $update_date);
        $affected_rows = $this->db->affected_rows() == 0 ? 1 : $this->db->affected_rows();
        return $affected_rows;
    }
    public function getStaffData(){
        $this->db->select('u.*');
        $this->db->from('userinfo as u');
        $this->db->where('u.user_role',"staff");
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function insertGarbagePickupRequestStatusLog($insert_date = array()){
        $this->db->insert("garbage_request_status_log", $insert_date);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    public function getGarbagePickupRequestStatusLog($id = 0){
        $this->db->select('u.*,ui.user_name');
        $this->db->from('garbage_request_status_log as u');
         $this->db->join('userinfo as ui','ui.id = u.added_by','left');
        $this->db->where('u.garbage_pickup_request_id',$id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        return $ret_data;
    }
    public function getStaffDetails($id = ""){
        $this->db->select('u.*');
        $this->db->from('userinfo as u');
        $this->db->where('u.user_role',"staff");
        $this->db->where('u.id',$id);
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];
        return $ret_data;
    }
    
}
