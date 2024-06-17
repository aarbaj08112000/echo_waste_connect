<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once('CommonController.php');

class GlobalConfigController extends CommonController
{

	function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Kolkata');

		// $this->current_date = date('Y-m-d');
		// $this->current_time = date('h:i:s');

		$this->user_name = $this->session->userdata('user_name');
		$this->user_id = $this->session->userdata('user_id');
		$this->role = $this->session->userdata('role');
		$this->current_date = date('d-m-Y');
		$this->current_time = date('h:i:s');
		$this->isAromAdmin = ($this->role=='AROM') ? 'true' : 'false';
		$date = new DateTime($this->current_date);

		$date->modify('-1 day');
		$this->yesterday_date = $date->format('d-m-Y');
		$this->yesterday_date_new = $date->format('Y-m-d');
		$d = date_parse_from_format("d-m-Y", $this->current_date);
		$this->date = $d["day"];
		$this->month = $d["month"];
		$this->year = $d["year"];
	}
	
	private function getPage($viewPage,$viewData){
        //$this->loadView($this->getPath().$viewPage,$viewData);
		$this->loadView($viewPage,$viewData);
	}

	public function listconfigs()
	{
		if($this->isAromAdmin == 'false'){
			$criteria = array("ARMUserOnly" => 0);//get only those fields which can be edited by Customers
			$data['configurations'] = $this->Crud->get_data_by_id_multiple_condition("global_configuration",$criteria);
		}else { //get all those fields which ERP admin can configure.
			$data['configurations'] = $this->Crud->read_data("global_configuration");
		}
		$data['isAromAdmin'] = $this->isAromAdmin;
		$this->getPage('global_configuration', $data);
	}

	public function addConfig()
	{
		$label =$this->input->post('display_label');
		$name = $this->input->post('config_name');
		$value = $this->input->post('config_value');
		$note = $this->input->post('note');
		$forArom = $this->input->post('forAromOnly');
		$canModify = $this->input->post('canCustomerModify');
		
		if($forArom=='on') { $forArom = 1; } else { $forArom = 0;}
		if($canModify=='on') { $canModify = 1; } else { $canModify = 0;}
		
		$data = array(
			"displayLabel" => $label,
			"config_name" => $name,
			"config_value" => $value,
			"note" => $note,
			"updated_user" => $this->user_name,
			"ARMUserOnly" => $forArom,
			"canModify" => $canModify
		);

		$result = $this->Crud->insert_data("global_configuration", $data);
		if ($result) {
			$this->addSuccessMessage('Configuration added successfully.');
		} else {
			$this->addErrorMessage('Unable to add configuration. Please try again.');
		}
		$this->redirectMessage();
	}


	public function editConfig()
	{
		$upload_error = 0;
        $upload_data = [];
        $id = $this->input->post('configID');
		$label =$this->input->post('display_label');
		$value = $this->input->post('config_value');
		$note = $this->input->post('note');
		$forArom = $this->input->post('forAromOnly');
		$canModify = $this->input->post('canCustomerModify');
		if($this->input->post("config_name") == "companyLogo"){
			if($_FILES['companyLogo']['name'] != ""){
	            $profileImageData =
	                $_FILES["companyLogo"]["name"] != ""
	                    ? $_FILES["companyLogo"]
	                    : [];
	            $config["upload_path"] = "dist/img/company_logo/";
	            $config["allowed_types"] = "jpg|png|jpeg|png";
	            $this->load->library("upload", $config);
	            $upload_error_msg = "";
	            if (!empty($profileImageData)) {
	                if (!$this->upload->do_upload("companyLogo")) {
	                    $upload_error_msg = $error = [
	                        "error" => $this->upload->display_errors(),
	                    ];
	                    $upload_error = 1;
	                } else {
	                    $upload_data = $this->upload->data();
	                }
	            }

	        }

	        if($upload_error == 0){
	        	$value = $upload_data['file_name'];
	        }else{
	        	$value = $this->input->post("old_val");
	        }
	        
		}
        	
        	
		if($forArom=='on' || $forArom==1) { $forArom = 1; } else { $forArom = 0;}
		if($canModify=='on' || $canModify==1) { $canModify = 1; } else { $canModify = 0;}

		$data = array(
			"displayLabel" => $label,
			"config_value" => $value,
			"note" => $note,
			"updated_user" => $this->user_name,
			"ARMUserOnly" => $forArom,
			"canModify" => $canModify
		);

		$result = $this->Crud->update_data_column("global_configuration", $data, $id, "id");
		if ($result) {
			$this->addSuccessMessage('Configuration updated successfully.');
		} else {
			$this->addErrorMessage('Unable to update configuration. Please try again.');
		}
		$data['isAromAdmin'] = $this->isAromAdmin;
		$this->redirectMessage();
	}
	

}