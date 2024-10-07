<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once('CommonController.php');

class ChallanController extends CommonController {

	const VIEW_CHALLAN_PATH = "challan/";

	function _construct()
    {
        parent::_construct();
		$this->load->model('SupplierParts');
    }

	private function getPath(){
		return self::VIEW_CHALLAN_PATH;
	}

	private function test()	{
	$this->getPage('sales_reports.php', $data);

	}

	public function view_add_challan()
	{
		$this->challan_search();
	}

	public function challan_search()
	{
		$challanId = $this->input->post('challan_id');
		$supplierId = $this->input->post('supplier_id');

		$queryList = "SELECT c.id, c.challan_number FROM `challan` as c WHERE c.clientId =  ".$this->Unit->getSessionClientId()." order by c.id desc";
		$data['challanNo_list'] = $this->Crud->customQuery($queryList);
		$data['supplier'] = $this->Crud->read_data("supplier");
		
		
		$data['consignee_list'] = $this->Crud->read_data_acc("consignee");
		//set search selection
		$data['challan_id']=$challanId;
		$data['supplier_id']=$supplierId;

		$column[] = [
            "data" => "challan_number",
            "title" => "Challan Number",
            "width" => "10%",
            "className" => "dt-left",
        ];
        $column[] = [
            "data" => "remark",
            "title" => "Remark",
            "width" => "13%",
            "className" => "dt-left",
        ];
        $column[] = [
            "data" => "vechical_number",
            "title" => "Vechical Number",
            "width" => "12%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "mode",
            "title" => "Mode Of Transport",
            "width" => "10%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "transpoter",
            "title" => "Transporter",
            "width" => "8%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "l_r_number",
            "title" => "L.R number",
            "width" => "8%",
            "className" => "dt-center",
        ];
		$column[] = [
				"data" => "created_date",
				"title" => "Date",
				"width" => "7%",
				"className" => "dt-center",
		];
		
        $column[] = [
            "data" => "supplier_name",
            "title" => "Supplier",
            "width" => "7%",
            "className" => "dt-center status-row",
        ];

		$column[] = [
            "data" => "status",
            "title" => "Status",
            "width" => "7%",
            "className" => "dt-center status-row",
        ];

		$column[] = [
            "data" => "view_details",
            "title" => "View Details",
            "width" => "7%",
            "className" => "dt-center status-row",
        ];
        
        $data["data"] = $column;
        $data["is_searching_enable"] = false;
        $data["is_paging_enable"] = true;
        $data["is_serverSide"] = true;
        $data["is_ordering"] = true;
        $data["is_heading_color"] = "#a18f72";
        $data["no_data_message"] =
            '<div class="p-3 no-data-found-block"><img class="p-2" src="' .
            base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No GRN Validation data found..!</div>';
        $data["is_top_searching_enable"] = true;
        $data["sorting_column"] = json_encode([]);
        $data["page_length_arr"] = [[10,50,100,200], [10,50,100,200]];
        $data["admin_url"] = base_url();
        $data["base_url"] = base_url();

		$this->loadView('store/view_add_challan', $data);
	}
	public function get_challan_search_data()
	{
		$post_data = $this->input->post();
        $column_index = array_column($post_data["columns"], "data");
        $order_by = "";
        foreach ($post_data["order"] as $key => $val) {
            if ($key == 0) {
                $order_by .= $column_index[$val["column"]] . " " . $val["dir"];
            } else {
                $order_by .=
                    "," . $column_index[$val["column"]] . " " . $val["dir"];
            }
        }
        $condition_arr["order_by"] = $order_by;
        $condition_arr["start"] = $post_data["start"];
        $condition_arr["length"] = $post_data["length"];
        $base_url = $this->config->item("base_url");
		$data = $this->SupplierParts->get_challan_search_view_data(
            $condition_arr,
            $post_data["search"]
        );
		// pr($data,1);
		foreach ($data as $key => $value) {
			$edit_data = base64_encode(json_encode($value)); 
			$data[$key]['view_details'] = '<a href="'.base_url("view_challan_by_id/").$value['id'].'" class="" title="View"><i class="ti ti-eye"></i></a>';
		}	
		// pr($data,1);
		$data["data"] = $data;
        $total_record = $this->SupplierParts->get_challan_search_data_count([], $post_data["search"]);
        $data["recordsTotal"] = $total_record['total_record'];
        $data["recordsFiltered"] = $total_record['total_record'];
        echo json_encode($data);
        exit();
		
	}

	public function view_challan_by_id()
	{
		$challan_id = $this->uri->segment('2');
		$data['challan_id'] = $challan_id;
		$data['challan_data'] = $this->Crud->get_data_by_id("challan", $challan_id, "id");
		if($data['challan_data'][0]->status !='completed'){
			$data['child_part']  = $this->SupplierParts->readSupplierPartsNotSubcon();
			$data['process'] = $this->Crud->read_data("process");
		}
		$data['challan_parts'] = $this->Crud->get_data_by_id("challan_parts", $challan_id, "challan_id");
		foreach ($data['challan_parts'] as $key => $p) {
			$child_part_data = $this->Crud->get_data_by_id("child_part", $p->part_id, "id");
			$data['challan_parts'][$key]->child_part_data = $child_part_data;
			$data2 = array(
                'challan_id' => $challan_id,
                'part_id' => $p->part_id,
            );
            $challan_parts_history_data = $this->Crud->get_data_by_id_multiple_condition("challan_parts_history", $data2);
            $data['challan_parts'][$key]->challan_parts_history_data = $challan_parts_history_data;
		}
		// pr($data['challan_parts'],1);
		$data['supplier'] = $this->Crud->get_data_by_id("supplier", $data['challan_data'][0]->supplier_id, "id");

		$this->loadView('store/view_challan_by_id', $data);
	}


	public function add_challan_parts()
	{
		
		$challan_id = $this->input->post('challan_id');

		$challanPartCount = $this->db->query('SELECT COUNT(*) as count FROM `challan_parts` where challan_id = ' . $challan_id)->row();
		if($challanPartCount->count >= 7) {
			$this->addWarningMessage("Already 7 parts added. No more parts are allowed.");
			$this->redirectMessage();
			exit();
		}

		$qty = $this->input->post('qty');
		$part_id = $this->input->post('part_id');
		$process = $this->input->post('process');

		$uniqueCheck = array(
			'challan_id' => $challan_id,
			'part_id' => $this->input->post('part_id'),

		);

		$challan_parts = $this->Crud->get_data_by_id_multiple_condition("challan_parts", $uniqueCheck);
		$success = 0;
		$messages = "Somthing went Wrong";
		if ($challan_parts) {
			$messages = "Part already present.";
			// $this->addWarningMessage("Part already present.");
			// $this->redirectMessage();
		} else {
			$child_part_data = $this->SupplierParts->getSupplierPartById($this->input->post('part_id'));
			$data = array(
				'challan_id' => $challan_id,
				'part_id' => $this->input->post('part_id'),
				'qty' => $this->input->post('qty'),
				'remaning_qty' => $this->input->post('qty'),
				'process' => $process,
				'value' => $child_part_data[0]->store_stock_rate * $qty,
				'hsn' => $child_part_data[0]->hsn_code,
				"created_date" => $this->current_date,
				"created_time" => $this->current_time,
				"day" => $this->date,
				"month" => $this->month,
				"year" => $this->year,
			);

			$current_stock = $child_part_data[0]->stock;

			if ((float)$qty > (float)$current_stock) {
				$messages = "Store stock quantity is less than entered quantity.";
				// $this->addWarningMessage("Store stock quantity is less than entered quantity.");
				// $this->redirectMessage();
			} else {
				$inser_query = $this->Crud->insert_data("challan_parts", $data);
				if ($inser_query) {
					$updateResult = $this->db->query("update child_part_stock set stock = stock - ".$qty.", sub_con_stock = sub_con_stock + ".$qty."
					where childPartId =".$part_id);
					if($updateResult){
						$messages = "Part added.";
						$success = 1;
						// $this->addSuccessMessage("Part added.");
					}else{
						$messages = "Error while adding quantity to stock.";
						// $this->addErrorMessage("Error while adding quantity to stock.");
					}
					// $this->redirectMessage();

						/*
						$current_stock = $child_part_data[0]->stock;
						old code $new_stock = $current_stock - $qty;
						$oldSubcon = $child_part_data[0]->sub_con_stock;
						$newsubcon = $oldSubcon + $qty;

						$stockUpdate = array(
							'stock' => $new_stock,
							'sub_con_stock' => $newsubcon,
						);

						$update = $this->Crud->update_data("child_part", $stockUpdate, $part_id);
						if ($update) {
							$this->addSuccessMessage("Part added successfully");
						} else {
							$this->addErrorMessage("Error while updating Qty to stock");
						}*/

				} else {
					$messages = "Error while adding quantity.";
					// $this->addErrorMessage("Error while adding quantity.");
					// $this->redirectMessage();
				}
			}
		}

		$return_arr = [];
		$return_arr['success'] = $success;
		$return_arr['messages'] = $messages;
		echo json_encode($return_arr);

		exit();
	}

	public function delete_challan_part()
	{

		// pr("ok",1);
		$id = $this->input->post('id');
		$partQty = $this->input->post('partQty');
		$part_id = $this->input->post('part_id');

		$table_name = $this->input->post('table_name');

		$data = array(
			"id" => $id
		);
		$result = $this->Crud->delete_data($table_name, $data);
		$success = 0;
		$messages = "Somthing went Wrong";
		if ($result) {
			//select stock,sub_con_stock from child_part where id = 1
			//97,1003
			$updateResult = $this->db->query("update child_part_stock set stock = stock + ".$partQty.", sub_con_stock = sub_con_stock - ".$partQty."
			where childPartId =".$part_id);
			if($updateResult){
				$success = 1;
				$messages = "Part successfully deleted.";
				// $this->addSuccessMessage("Part successfully deleted.");
			}else{
				$messages = "Error while updating Qty to stock.";
				// $this->addErrorMessage("Error while updating Qty to stock.");
			}
		} else {
			$messages = "Failed to delete part.";
			// $this->addErrorMessage("Failed to delete part.");
		}
		$return_arr = [];
		$return_arr['success'] = $success;
		$return_arr['messages'] = $messages;
		echo json_encode($return_arr);

		exit();
	}

	private function getPage($viewPage,$viewData){
		$this->getHeaderPage();
		$this->load->view($this->getPath().$viewPage,$viewData);
		$this->load->view('footer.php');
	}


	public function generate_challan()
	{
		$sub_po_id = $this->input->post('sub_po_id');
		$supplier_id = $this->input->post('supplier_id');
		$sub_po_id = $this->input->post('sub_po_id');
		$supplier_id = $this->input->post('supplier_id');
		$vechical_number = $this->input->post("vechical_number");
		$remark = $this->input->post("remark");
		$mode = $this->input->post("mode");
		$transpoter = $this->input->post("transpoter");
		$l_r_number = $this->input->post("l_r_number");

		$ship_addressType = $this->input->post('ship_addressType');
		$consignee_id = $this->input->post('consignee');

		$latestSeqFormat = $this->Crud->customQuery("SELECT challan_number FROM challan WHERE challan_number like '" . $this->getChallanSerialNo() . "%' order by id desc LIMIT 1");
		foreach ($latestSeqFormat as $p) {
			$currentChallanNo = $p->challan_number;
		}

		$challan_num = substr($currentChallanNo, strlen($this->getChallanSerialNo())) + 1;
		$challan_number = $this->getChallanSerialNo() . $challan_num;

		$data = array(
				"clientId" => $this->Unit->getSessionClientId(),
				"challan_number" => $challan_number,
				"supplier_id" => $supplier_id,
				"shipping_addressType" => $ship_addressType,
				"consignee_id" => $consignee_id,
				"remark" => $remark,
				"vechical_number" => $vechical_number,
				"mode" => $mode,
				"transpoter" => $transpoter,
				"l_r_number" => $l_r_number,
				"created_date" => $this->current_date,
				"created_time" => $this->current_time,
				"day" => $this->date,
				"month" => $this->month,
				"year" => $this->year,
			);

			$result = $this->Crud->insert_data("challan", $data);
			// if ($result) {
			// 	echo "<script>alert('Successfully Added');document.location='" . base_url('view_challan_by_id/') . $result . "'</script>";
			// } else {
			// 	echo "<script>alert('Unable to Add');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			// }
			if ($result) {
					$success = 1;
					$messages = "Successfully Added";
			} else {
					$success = 0;
					$messages = "Unable to Add.";
			}

			$return_arr['success'] = $success;
			$return_arr['messages'] = $messages;
			echo json_encode($return_arr);
			exit;
	}
}
