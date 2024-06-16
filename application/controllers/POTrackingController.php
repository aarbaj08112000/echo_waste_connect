<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once('CommonController.php');

class POTrackingController extends CommonController {
	
	const PO_TRACKING_PATH = "poTracking/";
	
	function _construct()
    {
        parent::_construct();
    }
	
	private function getPath(){
		return self::PO_TRACKING_PATH;
	}

	public function customer_po_tracking() {
		$data['customer_data'] = $this->Crud->read_data("customer");
		$this->getPage('customer_po_tracking', $data);
	}
	
	
	public function generate_customer_po_tracking()
	{
		$po_start_date = $this->input->post('po_start_date');
		$po_end_date = $this->input->post('po_end_date');
		$po_number = $this->input->post('po_number');
		$po_amedment_number = $this->input->post('po_amedment_number');
		$customer_id = $this->input->post('customer_id');
		$po_amendment_date = $this->input->post('po_amendment_date');
		//$uploadedDoc = $this->input->post('uploadedDoc');
		
		$data = array(
			"po_number" => $po_number,
			"customer_id" => $customer_id
		);
		
		$check = $this->Crud->read_data_where("customer_po_tracking", $data);
		if ($check != 0) {
			$this->addErrorMessage('Record already exists for this customer. Enter different PO Number');
			$this->redirectMessage();
			//echo "<script>alert('Error 403 : PO Number  Already Exists , Enter Different PO Number ');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		} else {
			if (!empty($_FILES['uploadedDoc']['name'])) {
				$image_path = "./documents/";
				$config['allowed_types'] = '*';
				$config['upload_path'] = $image_path;
				$config['file_name'] = $_FILES['uploadedDoc']['name'];

				//Load upload library and initialize configuration
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('uploadedDoc')) {
					$uploadData = $this->upload->data();
					$uploadedDocument = $uploadData['file_name'];
					echo "uploadedDocument: ".$uploadedDocument;
				} else {
					$uploadedDocument = '';
				}
			} else {
				$uploadedDocument = '';
			}
			
			$data = array(
				"po_start_date" => $po_start_date,
				"po_end_date" => $po_end_date,
				"po_number" => $po_number,
				"po_amedment_number" => $po_amedment_number,
				"po_amendment_date" => $po_amendment_date,
				"customer_id" => $customer_id,
				"created_by" => $this->user_id,
				"created_date" => $this->current_date,
				"created_time" => $this->current_time,
				"created_by" => $this->current_date,
				"created_day" => $this->date,
				"created_month" => $this->month,
				"created_year" => $this->year,
				"uploadedDoc" => $uploadedDocument
			);

			$result = $this->Crud->insert_data("customer_po_tracking", $data);
			if ($result) {
				$this->addSuccessMessage('PO Successfully Added');
				$this->redirectMessage('view_customer_tracking_id/'.$result);
				//echo "<script>alert('Successfully Added');document.location='" . base_url('view_customer_tracking_id/') . $result . "'</script>";
			} else {
				$this->addErrorMessage('Failed to add PO');
				$this->redirectMessage();
			}
		}
	}
	
	public function customer_po_tracking_all() {
		$data['customer_data'] = $this->Crud->read_data("customer");
		// $role_management_data = $this->db->query('SELECT customer_part.part_number,customer_part.id, customer.customer_name
		// FROM customer_part
		// INNER JOIN customer ON customer_part.customer_id=customer.id;');
		// $data['customer_parts'] = $role_management_data->result();
		$data['customer_po_tracking'] = $this->Crud->read_data("customer_po_tracking");
		// print_r($data['customer_po_tracking']);
		$this->getPage('customer_po_tracking_all', $data);
	}
	
	public function customer_po_tracking_all_closed() {
		$data['customer_data'] = $this->Crud->read_data("customer");
		// $role_management_data = $this->db->query('SELECT customer_part.part_number,customer_part.id, customer.customer_name
		// FROM customer_part
		// INNER JOIN customer ON customer_part.customer_id=customer.id;');
		// 		$data['customer_parts'] = $role_management_data->result();
		$data['customer_po_tracking'] = $this->Crud->read_data("customer_po_tracking");
		$data['customer_po_tracking'] = $this->Crud->get_data_by_id("customer_po_tracking", "closed", "status");
		// print_r($data['customer_po_tracking']);
		
		$this->getPage('customer_po_tracking_all_closed', $data);
	}
	
	public function view_customer_tracking_id()
	{
		$customer_tracking_po_id = $this->uri->segment('2');

		$data['customer_po_tracking'] = $this->Crud->get_data_by_id("customer_po_tracking", $customer_tracking_po_id, "id");
		$data['customer'] = $this->Crud->get_data_by_id("customer", $data['customer_po_tracking'][0]->customer_id , "id");
		$data['new_po'] = $this->Crud->get_data_by_id("customer_po_tracking", $customer_tracking_po_id, "id");
		$data['parts_customer_trackings'] = $this->Crud->get_data_by_id("parts_customer_trackings", $customer_tracking_po_id, "customer_po_tracking_id");
		$role_management_data = $this->db->query('SELECT part_number,id,part_description from `customer_part` WHERE customer_id = '. $data['customer_po_tracking'][0]->customer_id.' ORDER BY id DESC');
		$data['customer_part_data'] = $role_management_data->result();
		$this->getPage('view_customer_tracking_id', $data);
	}
	
	
	public function add_parts_customer_trackings()
	{
		$part_id = $this->input->post('part_id');
		$qty = $this->input->post('qty');
		$customer_po_tracking_id = $this->input->post('customer_po_tracking_id');
		$data = array(
			"part_id" => $part_id,
			"customer_po_tracking_id" => $customer_po_tracking_id,
		);
		$check = $this->Crud->read_data_where("parts_customer_trackings", $data);
		if ($check != 0) {
			echo "<script>alert('Part Number Already Exists , Please Select Different Part Number ');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		} else {
			$data = array(
				"qty" => $qty,
				"customer_po_tracking_id" => $customer_po_tracking_id,
				"part_id" => $part_id,
				"created_by" => $this->user_id,
				"created_date" => $this->current_date,
				"created_time" => $this->current_time,
				"created_day" => $this->date,
				"created_month" => $this->month,
				"created_year" => $this->year,
			);
			$result = $this->Crud->insert_data("parts_customer_trackings", $data);
			if ($result) {
				echo "<script>alert('Successfully Added');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {
				echo "<script>alert('Unable to Add');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			}
		}
	}

	private function getPage($viewPage,$viewData){
		$this->getHeaderPage();
		$this->load->view($this->getPath().$viewPage,$viewData);
		$this->load->view('footer.php');
	}
		
}