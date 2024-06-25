<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once('CommonController.php');

class ProdMasterController extends CommonController {

	function __construct() {
		parent::__construct();
	}
	
	public function shifts()
	{
		$data['shifts'] = $this->Crud->read_data("shifts",true);
		$this->loadView('admin/shifts', $data);
	}


	public function addShift()
	{
		$name = $this->input->post('shiftName');
		$start_time = $this->input->post('shiftStart');
		$end_time = $this->input->post('end_time');
		$shift_type = $this->input->post('shiftType');
		$end_time = $this->input->post('shiftEnd');
		$ppt = $this->input->post('ppt');

		$clientId = $this->Unit->getSessionClientId();

		/*$data = array(
			"name" => "xyyyyyz",
		);*/
		//$check = $this->Crud->read_data_where("shifts", $data);
		/*if ($check != 0) {
			echo "<script>alert('Already Exists');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		} else {*/
			$data = array(
				//"clientId" => $clientId,
				"name" => $name,
				"start_time" => $start_time,
				"end_time" => $end_time,
				"shift_type" => $shift_type,
				"ppt" => $ppt
			);

			$result = $this->Crud->insert_data("shifts", $data, true);
			if ($result) {
				echo "<script>alert('Added Sucessfully');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {
				echo "<script>alert('Unable to Add');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			}
		//}
	}

	/**
	 * Operator 
	 */
	public function operator()
	{
		$data['operator'] = $this->Crud->read_data("operator",true);
		$this->loadView('admin/operator', $data);
	}

	public function add_operator()
	{

		$clientId = $this->Unit->getSessionClientId();

		$data = array(
			'name' => $this->input->post('name'),
		);

		$check = $this->Crud->read_data_where("operator", $data, true);
		if ($check != 0) {
			echo "<script>alert('Record already exists');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			exit();
		}

		$inser_query = $this->Crud->insert_data("operator", $data, true);

		if ($inser_query) {
			if ($inser_query) {
				echo "<script>alert('Added Successfully ');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {
				echo "<script>alert('Error while Adding ,try again');document.location='erp_users'</script>";
			}
		} else {
			echo "Error";
		}
	}

	public function machine()
	{
		$data['machine'] = $this->Crud->read_data("machine",true);
		$this->loadView('admin/machine', $data);	
	}

	public function add_machine()
	{
		$clientId = $this->Unit->getSessionClientId();

		
		$data = array(
			'name' => $this->input->post('name'),
		);

		$check = $this->Crud->read_data_where("machine", $data, true);
		if ($check != 0) {
			echo "<script>alert('Record already exists');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			exit();
		}

		$inser_query = $this->Crud->insert_data("machine", $data, true);

		if ($inser_query) {
			if ($inser_query) {
				echo "<script>alert('Added Successfully ');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {
				echo "<script>alert('Error while Adding ,try again');document.location='erp_users'</script>";
			}
		}
	}
	
}