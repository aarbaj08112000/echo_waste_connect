<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once('CommonController.php');

class ReportsController extends CommonController
{

	function __construct()
	{
		parent::__construct();
	}
	
	private function getPage($viewPage,$viewData){
        //$this->loadView($this->getPath().$viewPage,$viewData);
		$this->loadView($viewPage,$viewData);
	}


	public function parts_stock_report()
	{	
		$filter_part_id = $this->input->post('part_id');
		$data['filter_part_id'] = $filter_part_id;
		
		$stock_column_name = $this->Crud->getStockColNmForClientUnit();
        $prod_column_name = $this->Crud->getProdColNmForClientUnit();
		
		// if (!empty($data['filter_part_id']) && $filter_part_id!='ALL') {
		// 	$data['customer_part_list'] = $this->SupplierParts->getSupplierPartById($filter_part_id);
		// } else if ($filter_part_id == 'ALL') {
		// 	$data['customer_part_list'] = $this->SupplierParts->readSupplierParts();
		// } else {
		// 	$data['customer_part_list'] = ""; //No record found for particular criteria
		// }
		// for ($i = 1; $i <= 12; $i++) {
		// 	$data['month_data'][$i] = $this->Common_admin_model->get_month($i);
		// 	$data['month_number'][$i] = $this->Common_admin_model->get_month_number($data['month_data'][$i]);
		// }
		// foreach ($data['customer_part_list'] as $po) {
		// 	$data['uom_data'][$po->id] = $this->Crud->get_data_by_id("uom", $po->uom_id, "id");
		// 	$data['grn_details_data'][$po->id] = $this->Crud->get_data_by_id("grn_details", $po->id, "part_id");
		// 	$data['underinspection_stock'][$po->id] = 0;
		// 	if ($data['grn_details_data'][$po->id]) {
		// 		foreach ($data['grn_details_data'][$po->id] as $d) {
		// 			if ($d->accept_qty == 0) {
		// 				$data['underinspection_stock'][$po->id] = $data['underinspection_stock'][$po->id] + $d->verified_qty;
		// 			} else {
		// 			}
		// 		}
		// 	}
		// }
		
		$column[] = [
            "data" => "part_number",
            "title" => "Part Number",
            "width" => "14%",
            "className" => "dt-left",
        ];
        $column[] = [
            "data" => "part_description",
            "title" => "Part Description",
            "width" => "16%",
            "className" => "dt-left",
        ];
        $column[] = [
            "data" => "uom_name",
            "title" => "UOM",
            "width" => "17%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "stock",
            "title" => "Store Stock",
            "width" => "10%",
            "className" => "dt-center",
			'orderable' => false
        ];
        $column[] = [
            "data" => "store_stock_rate",
            "title" => "Stock Rate",
            "width" => "17%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "stock_value",
            "title" => "Stock Value",
            "width" => "17%",
            "className" => "dt-center",
			'orderable' => false
        ];
        $column[] = [
            "data" => "total_verified_qty",
            "title" => "Inward Inspection QTY",
            "width" => "7%",
            "className" => "dt-center"
        ];
        $column[] = [
            "data" => "production_qty",
            "title" => "Prod QTY",
            "width" => "7%",
            "className" => "dt-center status-row",
        ];

		$data['customer_part_data_new_updated2'] = $this->Crud->customQuery('SELECT DISTINCT part_number, id FROM `child_part`');

		$data["data"] = $column;
        $data["is_searching_enable"] = true;
        $data["is_paging_enable"] = true;
        $data["is_serverSide"] = true;
        $data["is_ordering"] = true;
        $data["is_heading_color"] = "#a18f72";
        $data["no_data_message"] =
            '<div class="p-3 no-data-found-block"><img class="p-2" src="' .
            base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No Employee data found..!</div>';
        $data["is_top_searching_enable"] = true;
        $data["sorting_column"] = json_encode([]);
        $data["page_length_arr"] = [[10,50,100,200], [10,50,100,200]];
        $data["admin_url"] = base_url();
        $data["base_url"] = base_url();

		$this->getPage('reports/report_supplier_parts_stock', $data);	
	}

	public function getStockReportData(){
		
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
		
		
		
		$data = $this->SupplierParts->getStockReportDataModel($condition_arr,$post_data["search"]);
		foreach ($data as $key => $value) {
			$data[$key]['stock_value'] = $value['stock'] * $value['store_stock_rate'];

		}
		
		$data["data"] = $data;
        $total_record = $this->SupplierParts->getStockReportDataCountModel([], $post_data["search"]);
		
        $data["recordsTotal"] = ($total_record['total_records']);
        $data["recordsFiltered"] = ($total_record['total_records']);
        echo json_encode($data);
	}

	public function parts_stock_report_old()

	{	

		$filter_part_id = $this->input->post('part_id');
		$filter_client = $this->input->post('clientUnit');

		$data['client_list'] = $this->Crud->read_data_acc("client");
		$data['filter_part_id'] = $filter_part_id;

		if (empty($filter_client)) {
			$filter_client = $this->session->userdata['clientUnit']; 
		}

		$this->session->set_userdata('clientUnit',$filter_client); //set the clientUnit to session..
		$clientDetails = $this->getClientUnitDetails($filter_client);	
		$this->session->set_userdata('clientUnitName', $clientDetails[0]->client_unit);

		$stock_column_name = $this->Crud->getStockColNmForClientUnit();
        $prod_column_name = $this->Crud->getProdColNmForClientUnit();
		$unitId = $this->Unit->getSessionClientId() ;
		if (!empty($data['filter_part_id']) && $filter_part_id!='ALL') {
			$data['customer_part_list'] = $this->Crud->customQuery("
			SELECT DISTINCT 
			c.part_number, 
			c.id, 
			u.uom_name, 
			c.store_stock_rate, 
			c.part_description, 
			c.".$stock_column_name." as stock_qty, 
			c.".$prod_column_name." as production_qty,
			stock
			FROM 
			child_part c
			LEFT JOIN 
			child_part_stock stock 
			ON 
			stock.childPartId = c.id 
			AND 
			stock.clientId = ".$unitId."
			JOIN 
			uom u 
			ON 
			u.id = c.uom_id
			WHERE 
			c.id = ".$filter_part_id
			);


		} else if ($filter_part_id == 'ALL') {
			$data['customer_part_list'] = $this->Crud->customQuery('SELECT DISTINCT c.part_number, c.id, u.uom_name, 
			c.store_stock_rate, c.part_description, '.$stock_column_name.' as stock_qty, '.$prod_column_name.' as production_qty  
			FROM `child_part` c, uom u
			WHERE u.id = c.uom_id
			');

		} else {
			$data['customer_part_list'] = ""; //No record found for particular criteria
		}

		$data['customer_part_data_new_updated2'] = $this->Crud->customQuery('SELECT DISTINCT part_number, id FROM `child_part`');
		$data['filter_client'] = $filter_client;
		foreach ($data['customer_part_list'] as $po) {
			$data['grn_details_data'][$po->id] = $this->Crud->get_data_by_id("grn_details", $po->id, "part_id");
			$underinspection_stock[$po->id] = 0;
			if ($data['grn_details_data'][$po->id]) {
				foreach ($data['grn_details_data'][$po->id] as $d) {
					if ($d->accept_qty == 0) {
						$underinspection_stock[$po->id] = $underinspection_stock[$po->id] + $d->verified_qty;
					} else {
					}
				}
			}
		}
		
		pr($data,1);
		$this->getPage('reports/report_supplier_parts_stock', $data);	
	}


	public function reports_grn()
	{

		$created_month  = $this->input->post("created_month");
		$created_year  = $this->input->post("created_y	ear");

		if (empty($created_year)) {
			$created_year = $this->year;
		}
		if (empty($created_month)) {
			$created_month = $this->month;
		}

		for ($i = 1; $i <= 12; $i++) {
			$data['month_data'][$i] = $this->Common_admin_model->get_month($i);
			$data['month_number'][$i] = $this->Common_admin_model->get_month_number($data['month_data'][$i]);
		}
		$data['fincYears'] = $this->Common_admin_model->getFinancialYears();
		$data['created_year'] = $created_year;
		$data['created_month'] = $created_month;
		$column[] = [
            "data" => "supplier_name",
            "title" => "Supplier name",
            "width" => "14%",
            "className" => "dt-left",
        ];
        $column[] = [
            "data" => "part_number",
            "title" => "Part No",
            "width" => "16%",
            "className" => "dt-left",
        ];
        $column[] = [
            "data" => "part_description",
            "title" => "Part Description",
            "width" => "17%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "rate",
            "title" => "Part Rate",
            "width" => "10%",
            "className" => "dt-center",
			'orderable' => false
        ];
        $column[] = [
            "data" => "hsn_code",
            "title" => "HSN",
            "width" => "17%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "uom_name",
            "title" => "UOM",
            "width" => "17%",
            "className" => "dt-center",
			'orderable' => false
        ];
        $column[] = [
            "data" => "poNumber",
            "title" => "PO No",
            "width" => "7%",
            "className" => "dt-center text-nowrap",
        ];
        $column[] = [
            "data" => "po_date",
            "title" => "PO Date",
            "width" => "7%",
            "className" => "dt-center text-nowrap",
        ];
        $column[] = [
            "data" => "grn_number",
            "title" => "GRN No",
            "width" => "17%",
            "className" => "dt-center text-nowrap",
			
        ];
       
        $column[] = [
            "data" => "grn_created_date",
            "title" => "GRN Date",
            "width" => "7%",
            "className" => "dt-center text-nowrap",
        ];
        $column[] = [
            "data" => "invoice_number",
            "title" => "Invoice Number",
            "width" => "7%",
            "className" => "dt-center",
			'orderable' => false
        ];
        $column[] = [
            "data" => "invoice_date",
            "title" => "Invoice Date",
            "width" => "7%",
            "className" => "dt-center",
			'orderable' => false
        ];
        
        $column[] = [
            "data" => "po_qty",
            "title" => "PO Qty",
            "width" => "7%",
            "className" => "dt-center",
			'orderable' => false
        ];

		$column[] = [
            "data" => "accept_qty",
            "title" => "Accepted QTY",
            "width" => "7%",
            "className" => "dt-center",
			'orderable' => false
        ];
       
       $column[] = [
            "data" => "base_amount",
            "title" => "Basic Amount",
            "width" => "7%",
            "className" => "dt-center status-row",
        ];
        $column[] = [
            "data" => "sgst_amount",
            "title" => "SGST",
            "width" => "17%",
            "className" => "dt-center",
			
        ];
       
        $column[] = [
            "data" => "cgst_amount",
            "title" => "CGST",
            "width" => "7%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "igst_amount",
            "title" => "IGST",
            "width" => "7%",
            "className" => "dt-center",
			'orderable' => false
        ];
        $column[] = [
            "data" => "tcs_amount",
            "title" => "TCS",
            "width" => "7%",
            "className" => "dt-center",
			'orderable' => false
        ];
        
        $column[] = [
            "data" => "gst_amount",
            "title" => "GST Total",
            "width" => "7%",
            "className" => "dt-center",
			'orderable' => false
        ];

		$column[] = [
            "data" => "total_with_gst",
            "title" => "Total Amount With GST",
            "width" => "7%",
            "className" => "dt-center",
			'orderable' => false
        ];
		$data["data"] = $column;
        $data["is_searching_enable"] = true;
        $data["is_paging_enable"] = true;
        $data["is_serverSide"] = true;
        $data["is_ordering"] = true;
        $data["is_heading_color"] = "#a18f72";
        $data["no_data_message"] =
            '<div class="p-3 no-data-found-block"><img class="p-2" src="' .
            base_url() .
            'public/assets/images/images/no_data_found_new.png" height="150" width="150"><br> No Employee data found..!</div>';
        $data["is_top_searching_enable"] = true;
        $data["sorting_column"] = json_encode([]);
        $data["page_length_arr"] = [[10,50,100,200], [10,50,100,200]];
        $data["admin_url"] = base_url();
        $data["base_url"] = base_url();
		
		$data['showDocRequestDetails'] = $this->showMaterialRequestDetails();
		$this->getPage('reports/reports_grn', $data);	
	}

	public function getReportGnData(){
		$customer_part_id  = $this->input->post("customer_part_id");
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
		$data = $this->SupplierParts->getGNRepotData($condition_arr,$post_data["search"]);
		
        

		foreach($data as $k=>$v){
			$data[$k]['po_date']= defaultDateFormat($v['po_date']);
			$data[$k]['invoice_date'] = defaultDateFormat($v['invoice_date']);
			$data[$k]['grn_created_date'] = defaultDateFormat($v['grn_created_date']);
			$gst_amount = $v['sgst_amount'] + $v['cgst_amount'] + $v['igst_amount'] + $v['tcs_amount'];
			// Calculate total_with_gst
			$total_with_gst = $gst_amount + $v['base_amount'];
			// Initialize tcs_amount
			$tcs_amount = 0;
			// Check if tcs_amount is not empty and assign its value
			if (!empty($v['tcs_amount'])) {
				$tcs_amount = $g->tcs_amount;
			}
			$data[$k]['gst_amount'] = $gst_amount;
			$data[$k]['total_with_gst'] = $total_with_gst;
			$data[$k]['tcs_amount'] = $tcs_amount;
		}
		$data["data"] = $data;
        $total_record = $this->SupplierParts->getGNRepotDataCount($condition_arr, $post_data["search"]);
		
        $data["recordsTotal"] = $total_record['tot_record'];
        $data["recordsFiltered"] = $total_record['tot_record'];
        echo json_encode($data);
	}
}