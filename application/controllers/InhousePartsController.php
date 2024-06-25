<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('CommonController.php');

class InhousePartsController extends CommonController
{

	const PATH = "";

	function __construct()
	{
		parent::__construct();
		$this->load->model('InhouseParts');
		$this->load->model('SupplierParts');
	}

	private function getPath()
	{
		return self::PATH;
	}

	private function getPage($viewPage, $viewData)
	{
		$this->loadView($this->getPath() . $viewPage, $viewData);
	}


	public function inhouse_parts_view() {
		$data['uom'] = $this->Crud->read_data("uom");
		$data['child_part_master'] = $this->Crud->customQuery("SELECT parts.*, stock.*, u.uom_name 
			FROM `inhouse_parts` parts
			LEFT JOIN inhouse_parts_stock stock
				ON stock.inhouse_parts_id = parts.id 
    			AND stock.clientId = ".$this->Unit->getSessionClientId()." 
			INNER JOIN uom u
				ON u.id = parts.uom_id
				ORDER BY parts.id desc");
		
		$this->loadView('inhouse_parts_view', $data);
	}

	public function add_inhouse_parts()
	{
		//$add_to_child_part = $this->input->post('add_to_child_part');
		$part_number = $this->input->post('part_number');
		$part_desc = $this->input->post('part_desc');
		//$part_rate = $this->input->post('part_rate');
		$safty_buffer_stk = $this->input->post('safty_buffer_stk');
		//$revision_date = $this->input->post('revision_date');
		//$revision_no = $this->input->post('revision_no');
		//$supplier_id = $this->input->post('supplier_id');
		$uom_id = $this->input->post('uom_id');
		//$child_part_id = $this->input->post('child_part_id');
		$hsn_code = $this->input->post('hsn_code');
		$store_rack_location = $this->input->post('store_rack_location');
		$store_stock_rate = $this->input->post('store_stock_rate');
		//$revision_remark = $this->input->post('revision_remark');
		//$gst_id = $this->input->post('gst_id');
		//$sub_type = $this->input->post('sub_type');
		//$asset = $this->input->post('asset');
		$max_uom = $this->input->post('max_uom');
		$min_uom = $this->input->post('min_uom');
		$weight = $this->input->post('weight');
		$size = $this->input->post('size');
		$thickness = $this->input->post('thickness');
		
		$data = array(
			"part_number" => $part_number
		);
		
		$check = $this->InhouseParts->isRecordExists($data);

		if ($check != 0) {
			echo "<script>alert('Already Exists');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		} else {
			
			/* if (!empty($_FILES['part_drawing']['name'])) {
				$image_path = "./documents/";
				$config['allowed_types'] = '*';
				$config['upload_path'] = $image_path;
				$config['file_name'] = $_FILES['part_drawing']['name'];

				//Load upload library and initialize configuration
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('part_drawing')) {
					$uploadData = $this->upload->data();
					$picture4 = $uploadData['file_name'];
				} else {
					$picture4 = '';
					//echo "no 1";
				}
			} else {
				$picture4 = '';
				//echo "no 2";
			}

			if (!empty($_FILES['modal']['name'])) {
				$image_path = "./documents/";
				$config['allowed_types'] = '*';
				$config['upload_path'] = $image_path;
				$config['file_name'] = $_FILES['modal']['name'];

				//Load upload library and initialize configuration
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('modal')) {
					$uploadData = $this->upload->data();
					$picture5 = $uploadData['file_name'];
				} else {
					$picture5 = '';
					//echo "no 1";
				}
			} else {
				$picture5 = '';
				//echo "no 2";
			}

			if (!empty($_FILES['cad_file']['name'])) {
				$image_path = "./documents/";
				$config['allowed_types'] = '*';
				$config['upload_path'] = $image_path;
				$config['file_name'] = $_FILES['cad_file']['name'];

				//Load upload library and initialize configuration
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('cad_file')) {
					$uploadData = $this->upload->data();
					$picture6 = $uploadData['file_name'];
				} else {
					$picture6 = '';
					//echo "no 1";
				}
			} else {
				$picture6 = '';
				//echo "no 2";
			}*/


			$data = array(
				"part_number" => $part_number,
				"part_description" => $part_desc,
				//"supplier_id" => $supplier_id,
				//"part_rate" => $part_rate,
				"uom_id" => $uom_id,
				"safty_buffer_stk" => $safty_buffer_stk,
				//"revision_no" => $revision_no,
				//"child_part_id" => $child_part_id,
				"hsn_code" => $hsn_code,
				"store_rack_location" => $store_rack_location,
				"store_stock_rate" => $store_stock_rate,
				//"revision_remark" => $revision_remark,
				//"part_drawing" => $picture4,
				"modal_document" => '',
				//"cad_file" => $picture6,
				//"gst_id" => $gst_id,
				"weight" => $weight,
				"size" => $size,
				"thickness" => $thickness,
				//"revision_date" => $revision_date,
				"created_id" => $this->user_id,
				"date" => $this->Crud->getSQLDateFormatToStore(),
				"time" => $this->current_time,
				//"sub_type" => $sub_type,
				"max_uom" => $max_uom,
				"min_uom" => $min_uom,

			);
						
			$result = $this->InhouseParts->createInhousePart($data);
			
			if ($result) {
				$this->addSuccessMessage('Record added successfully.');
			} else {
				$this->addErrorMessage('Unable to add record.');
			}
			$this->redirectMessage();
		}
	}


	public function update_child_part_view_inhouse()
	{

		$id = $this->input->post('id');
		$part_number = $this->input->post('part_number');
		$part_description = $this->input->post('part_description');
		$hsn_code = $this->input->post('hsn_code');
		$sub_type = $this->input->post('sub_type');
		$store_rack_location = $this->input->post('store_rack_location');
		$max_uom = $this->input->post('max_uom');
		$store_stock_rate = $this->input->post('store_stock_rate');
		$weight = $this->input->post('weight');
		$size = $this->input->post('size');
		$thickness = $this->input->post('thickness');

		$safty_buffer_stk = $this->input->post('saft__stk');
	
		$data = array(
				"part_description" => $part_description,
				"hsn_code" => $hsn_code,
				"store_rack_location" => $store_rack_location,
				"store_stock_rate" => $store_stock_rate,
				"revision_remark" => "1st",
				"weight" => $weight,
				"size" => $size,
				"thickness" => $thickness,
				"grade" => $grade,
				"sub_type" => $sub_type,
				"max_uom" => $max_uom,
				"min_uom" => $child_part_data[0]->min_uom,
			);

			$result = $this->InhouseParts->updatePartById($data, $id);
			if($result) {
				$stockData = array(
					"safty_buffer_stk" => $safty_buffer_stk
				);
				$resultStock = $this->InhouseParts->updateStockById($stockData, $id);
				if ($resultStock) {
					$this->addSuccessMessage('Record updated successfully');
				}else{ 
					$this->addErrorMessage('Unable to update safty buffer stock record. Please try again.');
				}
			} else {
				$this->addErrorMessage('Unable to update record. Please try again.');
			}		
			$this->redirectMessage();
	}


	/**
	 * Used for inhouse as well as child parts
	 */
	public function update_uom_report()
	{

		$id = $this->input->post('id');
		$uom_id = $this->input->post('uom_id');
		$table_id = $this->input->post('table_id');

		$data = array(
			"uom_id" => $uom_id
		);

		if (empty($table_id)) {
			$query = $this->SupplierParts->updatePartById($data, $id);
		} else {
			$query = $this->InhouseParts->updatePartById($data, $id);
		}

		if ($query) {
			$this->addSuccessMessage('Record updated successfully');

		} else {
			$this->addErrorMessage('Unable to update record. Please try again.');
		}

		$this->redirectMessage();
	}


	/**
	 *  Update inhouse part stock - Approval
	 */
	public function inhouse_parts_admin($part_id_selected = null)
	{
		$data['child_parts_list_distinct'] = $this->Crud->customQuery('SELECT DISTINCT part_number,part_description,id FROM `inhouse_parts` ');
		
		if(empty($part_id_selected)){
			$part_id_selected = $this->input->post("part_id_selected");
		}	

		if (!empty($part_id_selected)) {
			$data['child_part'] = $this->InhouseParts->getInhousePartById($part_id_selected);
		} else {
			$data['child_part'] = "";
		}
		$data['enableStockUpdate'] = $this->isEnableStockUpdate();
		$this->loadView('admin/inhouse_parts_admin', $data);
	}


	/**
	 *  Update inhouse part stock - Actual update
	 */
	public function update_inhsoue_stock()
	{
		$id = $this->input->post('id');
		$stock = $this->input->post('stock');
			
		$data = array(
				"production_qty" => $stock,
		);
		
		$result = $this->InhouseParts->updateStockById($data, $id);
		if ($result) {
			$this->addSuccessMessage('Record updated successfully');
		} else {
			$this->addErrorMessage('Unable to update record. Please try again.');
		}
		$this->inhouse_parts_admin($id);
	}


	 public function part_stocks_inhouse()
	{

		$this->_part_stocks_inhouse('');
	}

	
	public function view_part_stocks_inhouse()
	{

		$this->_part_stocks_inhouse($this->input->post('part_id'));
	}

	public function _part_stocks_inhouse($filter_part_id)
	{
		$filter_part_id =1;
		$data['filter_part_id'] = $filter_part_id;
		$data['customer_part_list'] = $this->InhouseParts->getUniquePartNumber();
		if(!empty($filter_part_id)){
			$data['filtered_cust_part'] = $this->InhouseParts->getInhousePartById($filter_part_id);
			foreach ($data['filtered_cust_part'] as $key => $po) {
				$stock = 0;
                $stockColName = $this->Unit->getStockColNmForClientUnit();
                $prodQtyColName = $this->Unit->getProdColNmForClientUnit();
                $stock = $stock + $po->$stockColName;
                $uom_data = $this->Crud->get_data_by_id("uom", $po->uom_id, "id");
                $grn_details_data = $this->Crud->get_data_by_id("grn_details", $po->id, "part_id");
                $store_stock = 0;
                $underinspection_stock = 0;
                $scrap_stock = 0;
                if ($grn_details_data) {
                	foreach ($grn_details_data as $d) {
                    	$scrap_stock = $scrap_stock + $d->reject_qty;
                        if ($d->accept_qty == 0) {
                        	$underinspection_stock = $underinspection_stock + $d->verified_qty;
                        } else {
                        }
                    }
                }

                $child_part_data = $this->Crud->get_data_by_id("child_part", $po->part_number, "part_number");
                if (!empty($child_part_data)) {
                	$child_part_present = "yes";
                } else {
                	$child_part_present = "no";
                }
                $data['filtered_cust_part'][$key]->stock = $stock;
                $data['filtered_cust_part'][$key]->prodQtyColName = $prodQtyColName;
                $data['filtered_cust_part'][$key]->uom_data = $uom_data; 
                $data['filtered_cust_part'][$key]->underinspection_stock = $underinspection_stock; 	
                $data['filtered_cust_part'][$key]->scrap_stock = $scrap_stock;
                $data['filtered_cust_part'][$key]->child_part_present = $child_part_present; 		
			}

			// pr($data['filtered_cust_part'],1);
		}
		$data['transfer_part_list'] = $this->Crud->customQuery('
			SELECT DISTINCT customer_part.part_number, customer.customer_name 
			FROM customer_part
			INNER JOIN customer ON customer_part.customer_id = customer.id;
		');

		$this->loadView('store/part_stocks_inhouse', $data);
	}

}
