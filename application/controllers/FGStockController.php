<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('CommonController.php');

class FGStockController extends CommonController
{

	const PATH = "";
	function __construct() {
		parent::__construct();
		$this->load->model('InhouseParts');
		$this->load->model('CustomerPart');
	}

	private function getPath() {
		return self::PATH;
	}

	private function getPage($viewPage, $viewData) {
		$this->loadView($this->getPath() . $viewPage, $viewData);
	}

	public function fg_stock()
	{
		$part_id = $this->input->post("part_id");
		$data['customer_parts'] = $this->CustomerPart->readCustomerParts();
		if($part_id == '' && count($data['customer_parts']) > 0){
			$part_id = $data['customer_parts'][0]->id;

		}
		$data['part_id'] = $part_id;
		if ($part_id) {
			$data['customer_parts_master'] = $this->CustomerPart->getCustomerPartById($part_id);
		} else {
			$data['customer_parts_master'] = "";
		}
		$data['inhouse_parts'] = $this->InhouseParts->getUniquePartNumber();
		$data['customer_parts'] = $this->CustomerPart->readCustomerParts();

		$this->loadView('store/fw_stock', $data);

	}

	public function transfer_fg_stock_to_inhouse_stock()
	{
		$inhouse_part_number  = $this->input->post('inhouse_part_number');
		$part_number  = $this->input->post('part_number');
		$customer_parts_master_id  = $this->input->post('customer_parts_master_id');
		$stock  = (float)$this->input->post('stock');

		$customer_parts_master_data = $this->CustomerPart->getCustomerPartById($customer_parts_master_id);
		$inhouse_parts_data = $this->InhouseParts->getInhousePartByPartNumber($inhouse_part_number);

		$customer_parts_master_data_old_fg_stock = (float)$customer_parts_master_data[0]->fg_stock;
		$new_stock = $customer_parts_master_data_old_fg_stock - $stock;
		$new_stock_inhouse_part = $inhouse_parts_data[0]->production_qty + $stock;

		$data_update_child_part = array(
			"production_qty" => $new_stock_inhouse_part,
		);
		$data_update_new_stock_customer_partt = array(
			"fg_stock" => $new_stock
		);

		$query = $this->InhouseParts->updateStockById($data_update_child_part, $inhouse_parts_data[0]->id);
		$query = $this->CustomerPart->updateStockById($data_update_new_stock_customer_partt, $customer_parts_master_id);

		// if ($query) {
		// 	$this->Crud->stock_report($customer_parts_master_data[0]->part_number, $inhouse_part_number, "fg_stock", "inhouse_parts", $customer_parts_master_data_old_fg_stock, $stock);
		// 	$this->addSuccessMessage('Stock transferred successfully.');
		// } else {
		// 	$this->addErrorMessage('Unable to transfer stock');
		// }
		// $this->redirectMessage();
		if ($query) {
			$this->Crud->stock_report($customer_parts_master_data[0]->part_number, $inhouse_part_number, "fg_stock", "inhouse_parts", $customer_parts_master_data_old_fg_stock, $stock);
			$success = 1;
			$messages = "Stock transferred successfully.";
		} else {
			$success = 0;
			$messages = "Unable to transfer stock";
		}

		$return_arr['success']=$success;
		$return_arr['messages']=$messages;
		echo json_encode($return_arr);
		exit;
	}

	public function customer_parts_admin($part_id_selected = null)
	{
		$data['child_parts_list_distinct']  = $this->CustomerPart->getUniquePartNumber();
		if(empty($part_id_selected)){
			$part_id_selected = $this->input->post("part_id_selected");
		}

		if (!empty($part_id_selected)) {
			$data['child_part'] = $this->CustomerPart->getCustomerPartById($part_id_selected);
		} else {
			$data['child_part'] = "";
		}

		$data['enableStockUpdate'] = $this->isEnableStockUpdate();
		$this->loadView('admin/customer_parts_admin', $data);
	}

	public function update_customer_parts_master_fg_stock() {
		$id = $this->input->post('id');
		$stock = $this->input->post('stock');

		$data = array(
			"fg_stock" => $stock
		);

		$result = $this->CustomerPart->updateStockById($data, $id);
		if ($result) {
			$this->addSuccessMessage('Stock updated successfully.');
		} else {
			$this->addErrorMessage('Unable to update stock. Please try again.');
		}
		$this->customer_parts_admin($id);
	}

}
