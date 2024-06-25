<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('ProductionController.php');

class SheetProdController extends ProductionController
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('InhouseParts');
		$this->load->model('SupplierParts');

	}
	
	/**
	 * Sheet metal Production to Store.. DONE FOR STOCK
	 */
	public function update_production_qty_child_part_production_qty() {
		$child_part_id  = $this->input->post('child_part_id');
		$part_number  = $this->input->post('part_number');
		$production_qty = $this->input->post('production_qty');

		$child_part = $this->SupplierParts->getSupplierPartById($child_part_id);
		$stockColName = $this->Unit->getStockColNmForClientUnit();
		$prodColName = $this->Unit->getProdColNmForClientUnit();

		$old_stock = (float)$child_part[0]->$stockColName;
		$new_stock = $old_stock + $production_qty;

		$old_production_qty = (float)$child_part[0]->$prodColName;
		$new_production_qty = (float)$old_production_qty - (float)$production_qty;

		
		$data_update_child_part = array(
			$stockColName => $new_stock,
			$prodColName => $new_production_qty
		);
	
		$query = $this->SupplierParts->updateStockById($data_update_child_part, $child_part[0]->id);
		
		if ($query) {
			$this->Crud->stock_report($child_part[0]->part_number, $child_part[0]->part_number, "production_stock", "store_stock", $old_stock, $production_qty);
			$this->addSuccessMessage('Stock transferred successfully.');
		} else {
			$this->addErrorMessage('Unable to transfer the Production stock to Store stock');
		}

		$this->_part_stocks($child_part_id,null);
	}


	/**
	 * Production QTY
	 */
	public function p_q()
	{

		$clientId = $this->Unit->getSessionClientId();
		$data['p_q'] = $this->Crud->customQuery('SELECT 
					p.*, 
					o.name AS op_name, 
					m.name AS machine_name, 
					s.shift_type AS shift_type, 
					s.name AS shift_name
				FROM 
					`p_q` p
				JOIN 
					machine m ON p.machine_id = m.id
				JOIN 
					operator o ON p.operator_id = o.id
				JOIN 
					shifts s ON p.shift_id = s.id
				WHERE 
					m.clientId = '.$clientId.'
				ORDER BY 
					p.id DESC 
				LIMIT 10');
		
		$data['reject_remark'] = $this->Crud->read_data("reject_remark");
		$CI =& get_instance();
	   	// Load the model
	    $CI->load->model('InhouseParts');
		foreach ($data['p_q'] as $key => $u) {
			if ($u->output_part_table_name == "inhouse_parts") {
				$output_part_data = $this->InhouseParts->getInhousePartOnlyById($u->output_part_id);
            } else {
            	$output_part_data = $this->Crud->get_data_by_id("customer_part", $u->output_part_id, "id");
            }
            $data['p_q'][$key]->output_part_data = $output_part_data;

		}
		$this->loadView('store/p_q', $data);
	}


	public function production_qty_add(){

		$data['shifts'] = $this->Crud->read_data("shifts",true);
		$data['operator'] = $this->Crud->read_data("operator",true);
		$data['machine'] = $this->Crud->read_data("machine",true);

		$data['operations_bom'] = $this->Crud->customQuery("WITH distinct_bom AS (
			SELECT bom.*
			FROM operations_bom bom
			WHERE bom.id IN (
				SELECT A.id
				FROM operations_bom AS A
				LEFT JOIN operations_bom AS B
					ON A.output_part_id = B.output_part_id
					AND A.output_part_table_name = B.output_part_table_name
					AND A.customer_part_number = B.customer_part_number
					AND A.id < B.id
				WHERE B.id IS NULL
				AND EXISTS (SELECT 1 FROM operations_bom_inputs bi WHERE bom.id = bi.operations_bom_id)
			)
		)

		SELECT 
			bom.*,
			COALESCE(ip.part_number, cp.part_number) AS part_number,
			COALESCE(ip.part_description, cp.part_description) AS part_description
		FROM 
			distinct_bom bom
		LEFT JOIN 
			inhouse_parts ip
			ON bom.output_part_table_name = 'inhouse_parts' 
			AND bom.output_part_id = ip.id
		LEFT JOIN 
			customer_part cp
			ON bom.output_part_table_name = 'customer_part' 
			AND bom.output_part_id = cp.id
		ORDER BY 
			bom.id DESC");

		
		$this->load->view('child_pages/sheet_productionQty_add', $data);	//this page is same as that of final inspection qty except machine data filter
	}


	public function final_inspection_qty_add(){

		$data['shifts'] = $this->Crud->read_data("shifts",true);
		$data['operator'] = $this->Crud->read_data("operator",true);
		$crit = array(
			"name" => 'FINAL INSPECTION',
			"clientId" => $this->Unit->getSessionClientId()
		);
		$data['machine'] = $this->Crud->read_data_where_result("machine",$crit)->result();

		$data['operations_bom'] = $this->Crud->customQuery("WITH distinct_bom AS (
			SELECT bom.*
			FROM operations_bom bom
			WHERE bom.id IN (
				SELECT A.id
				FROM operations_bom AS A
				LEFT JOIN operations_bom AS B
					ON A.output_part_id = B.output_part_id
					AND A.output_part_table_name = B.output_part_table_name
					AND A.customer_part_number = B.customer_part_number
					AND A.id < B.id
				WHERE B.id IS NULL
				AND EXISTS (SELECT 1 FROM operations_bom_inputs bi WHERE bom.id = bi.operations_bom_id)
			)
		)

		SELECT 
			bom.*,
			COALESCE(ip.part_number, cp.part_number) AS part_number,
			COALESCE(ip.part_description, cp.part_description) AS part_description
		FROM 
			distinct_bom bom
		LEFT JOIN 
			inhouse_parts ip
			ON bom.output_part_table_name = 'inhouse_parts' 
			AND bom.output_part_id = ip.id
		LEFT JOIN 
			customer_part cp
			ON bom.output_part_table_name = 'customer_part' 
			AND bom.output_part_id = cp.id
		ORDER BY 
			bom.id DESC");

		
		$this->load->view('child_pages/sheet_productionQty_add', $data);
	}


	// DONE: FOR STOCK CHECK
	public function update_p_q_onhold()
	{

		$id = $this->input->post('id');
		$qty = (float)$this->input->post('qty');
		$accepted_qty = $this->input->post('accepted_qty');
		$rejection_reason = $this->input->post('rejection_reason');
		$rejection_remark = $this->input->post('rejection_remark');
		$output_part_id = $this->input->post('output_part_id');
		$accepted_qty_old = (float)$this->input->post('accepted_qty_old');
		$rejected_qty_old = (float)$this->input->post('rejected_qty_old');

		$operations_bom = $this->Crud->get_data_by_id("operations_bom", $output_part_id, "output_part_id");

		$operations_bom_inputs = $this->Crud->get_data_by_id("operations_bom_inputs", $operations_bom[0]->id, "operations_bom_id");
		if ($operations_bom_inputs) {
			$rejected_qty = $qty - $accepted_qty;


			$data23333 = array(
				'accepted_qty' => $accepted_qty + $accepted_qty_old,
				'rejected_qty' => $rejected_qty + $rejected_qty_old,
				'onhold_qty' => 0,
				'rejection_reason' => $rejection_reason,
				'rejection_remark' => $rejection_remark,
				"status" => "completed"

			);
			$update = $this->Crud->update_data("p_q", $data23333, $id);

			if ($update) {
				if ($operations_bom[0]->output_part_table_name == "inhouse_parts") {
					$output_part_data = $this->InhouseParts->getInhousePartById($output_part_id);
					$prodQtyColName = $this->Unit->getProdColNmForClientUnit();
					$previous_production_qty = $output_part_data[0]->$prodQtyColName;
					$new_production_qty = $previous_production_qty + $accepted_qty;
					$update_data = array(
						$prodQtyColName => $new_production_qty,
					);
					$update = $this->InhouseParts->updateStockById($update_data, $output_part_data[0]->id);
				} else {
					$fgStockColName = $this->Unit->getFGStockColNmForClientUnit();

					$output_part_data = $this->Crud->get_data_by_id("customer_part", $output_part_id, "id");
					$previous_production_qty = $output_part_data[0]->$fgStockColName;
					$new_fg_stock = $previous_production_qty + $accepted_qty;
					$update_data_2 = array(
						$fgStockColName => $new_fg_stock,
					);
					$update = $this->Crud->update_data("customer_part", $update_data_2, $output_part_data[0]->id);
				}
				echo "<script>alert('Updated Successfully ');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {
				echo "error while updating";
			}
		} else {
			echo "Operations BOM Not Found";
		}
	}

	/**
	 * View production qty details
	 */
	public function details_production_qty() {

		$data['p_q_id'] = $this->uri->segment('2');
		$p_q_id = $this->uri->segment('2');

		$data['p_q_data'] = $this->Crud->get_data_by_id("p_q", $p_q_id, "id");
		$data['p_q_history'] = $this->Crud->get_data_by_id("p_q_history", $p_q_id, "p_q_id");
		foreach ($data['p_q_history'] as $key => $u) {
			if ($u->input_part_number_table_name == "inhouse_parts") {
                $output_part_data = $this->InhouseParts->getInhousePartOnlyById($u->input_part_number);
            } else {
                $output_part_data = $this->Crud->get_data_by_id("child_part", $u->input_part_number, "id");
            }
            $data['p_q_history'][$key]->output_part_data = $output_part_data;
		}
		$data['sharingQtyColName'] = $this->Unit->getSharingQtyColNmForClientUnit();
		$this->loadView('store/details_production_qty', $data);
	}

	/**
 	* Production QTY View
 	*/

	public function view_p_q()
	{

		$machine_id = $this->input->post("machine_id");
		$data['machine_id'] = $machine_id;
		$inhouse_part_id = $this->input->post("inhouse_part_id");
		$data['inhouse_part_id'] = $inhouse_part_id;

		$clientId = $this->Unit->getSessionClientId();	
		$p_q_view_query = "WITH distinct_p_q AS ( SELECT 
					p.*, 
					o.name AS op_name, 
					m.name AS machine_name, 
					s.shift_type AS shift_type, 
					s.name AS shift_name
				FROM 
					`p_q` p
				JOIN 
					machine m ON p.machine_id = m.id
				JOIN 
					operator o ON p.operator_id = o.id
				JOIN 
					shifts s ON p.shift_id = s.id
				WHERE 
					m.clientId = ".$clientId ;

		if ($inhouse_part_id) {
			if (!empty($machine_id) && $inhouse_part_id == 0) {
				$p_q_view_query .=' AND p.machine_id = ' . $machine_id;
			} else if (!empty($machine_id)) {
				$p_q_view_query .=' AND p.output_part_id = ' . $inhouse_part_id . ' AND p.machine_id = ' . $machine_id ;
			} else if ($inhouse_part_id != 0) {		
				$p_q_view_query .= ' AND p.output_part_id = ' . $inhouse_part_id;
			}

			$p_q_view_query .= ") SELECT 
					pq.*,
					COALESCE(ip.part_number, cp.part_number) AS part_number,
					COALESCE(ip.part_description, cp.part_description) AS part_description
				FROM 
					distinct_p_q pq
				LEFT JOIN 
					inhouse_parts ip
					ON pq.output_part_table_name = 'inhouse_parts' 
					AND pq.output_part_id = ip.id
				LEFT JOIN 
					customer_part cp
					ON pq.output_part_table_name = 'customer_part' 
					AND pq.output_part_id = cp.id 
				ORDER BY 
					pq.id DESC ";

			$data['p_q'] = $this->Crud->customQuery($p_q_view_query);
		} else {
			$data['p_q'] = "";
		}

		$data['inhouse_parts'] = $this->InhouseParts->readInhousePartsOnly();
		$data['machine_data'] = $this->Crud->read_data("machine", true);
		$data['reject_remark'] = $this->Crud->read_data("reject_remark");

		$this->loadView('store/view_p_q', $data);
	}


	// DONE: FOR STOCK CHECK
	public function add_production_qty()
	{
		
		$shift_id = $this->input->post('shift_id');
		$machine_id = $this->input->post('machine_id');
		$operator_id = $this->input->post('operator_id');
		$date = $this->input->post('date');
		$qty = $this->input->post('qty');
		$output_part_id = $this->input->post('output_part_id');
		
		$operations_bom_data = $this->Crud->get_data_by_id("operations_bom", $output_part_id, "id");
		$output_part_id =  $operations_bom_data[0]->output_part_id;

		$output_part_table_name = $operations_bom_data[0]->output_part_table_name;

		$data_to_check = array(
			'shift_id' => $shift_id,
			'date' => $date,
			'output_part_id' => $operations_bom_data[0]->output_part_id,
			"output_part_table_name" => $output_part_table_name,
			"machine_id" => $machine_id,
		);

		$routing_data = $this->Common_admin_model->get_data_by_id_multiple_condition_count_new("p_q", $data_to_check);
		// print_r($routing_data);
		if ($routing_data > 0) {
			echo "<script>alert('already present');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		} else {
			if (true) {
				$p_q_molding_production =  $operations_bom_data[0]->output_part_id;
				$operations_bom_inputs_data = $this->Crud->get_data_by_id("operations_bom_inputs", $this->input->post('output_part_id'), "operations_bom_id");
				$req_qty = 0;
				$flag = 0;
				if ($operations_bom_inputs_data) {
					foreach ($operations_bom_inputs_data as $oib) {
						if ($oib->input_part_table_name == "inhouse_parts") {
							$output_part_data = $this->InhouseParts->getInhousePartById($oib->input_part_id);
						} else {
							$output_part_data = $this->SupplierParts->getSupplierPartById($oib->input_part_id);
						}

						if ($output_part_data) {
							$prodQtyColName = $this->Unit->getProdColNmForClientUnit();
							$actual_stock = $output_part_data[0]->$prodQtyColName;
							$req_qty = $qty * $oib->qty;

							if ($req_qty > $actual_stock) {
								$flag = $flag + 1;
								echo "Part Production Qty Not Found : " . $output_part_data[0]->part_number . " on " . $oib->input_part_table_name . ", actual production stock is " . $actual_stock . ",and required stock is " . $req_qty . "<br>";
							}
						} else {
							echo "part Not Found <br>";
						}
					}

					if ($flag == 0) {
						foreach ($operations_bom_inputs_data as $oib) {
							if ($oib->input_part_table_name == "inhouse_parts") {
								$output_part_data = $this->InhouseParts->getInhousePartById($oib->input_part_id);
							} else {
								$output_part_data = $this->SupplierParts->getSupplierPartById($oib->input_part_id);
							}

							$prodQtyCol = $this->Unit->getProdColNmForClientUnit();
							if ($output_part_data) {
								$actual_stock = $output_part_data[0]->$prodQtyCol;

								$req_qty = $qty * $oib->qty;

								$new_production_qty = $actual_stock - $req_qty;
								$update_data = array(
									$prodQtyCol => $new_production_qty,
								);
								if ($oib->input_part_table_name == "inhouse_parts") {
									echo "updated 1";
									$update = $this->InhouseParts->updateStockById($update_data, $output_part_data[0]->id);
								} else {
									echo "updated 2";
									$update = $this->SupplierParts->updateStockById($update_data, $output_part_data[0]->id);
								}
								echo "<br>id :" . $output_part_data[0]->id;
								echo "<br>";
								echo "<br>output_part_data " . $output_part_data[0]->part_number;;
								echo "<br>$oib->input_part_table_name  " . $output_part_data[0]->part_number;;
							} else {
								echo "part Not Found <br>";
							}
						}

						$data_insert = array(
							'shift_id' => $shift_id,
							'machine_id' => $machine_id,
							'date' => $date,
							'output_part_id' => $output_part_id,
							'output_part_table_name' => $output_part_table_name,
							'operator_id' => $operator_id,
							'qty' => $qty,
							'scrap_factor' => $qty * $operations_bom_data[0]->scrap_factor,
							"created_by" => $this->input->post('output_part_id'),
							"created_date" => $this->current_date,
							"created_time" => $this->current_time,
							"day" => $this->date,
							"month" => $this->month,
							"year" => $this->year,
						);

						$inser_query = $this->Crud->insert_data("p_q", $data_insert);

						if ($inser_query) {
							echo "<script>alert('successfully added');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
						} else {
							echo "<script>alert('Error While  Adding ,try again');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
						}
					} else {
						echo "<br> Please add all above production qty";
						echo "<br><br><br><br><br><a href=" . $_SERVER['HTTP_REFERER'] . "> < Go Back</a>";
					}
				} else {
					echo "Input parts not found";
				}
			} else {
				echo "Error";
			}
		}
	}

	/**
	 * ---------------------------- sharing_p_q ----------------
	 */

	 public function sharing_p_q()
	{
		$clientId = $this->Unit->getSessionClientId();

		//Get the details per unit using machine id reference
		$data['sharing_p_q'] = $this->Crud->customQuery("
			SELECT pq.*,o.name AS op_name, 
					m.name AS machine_name, 
					s.shift_type AS shift_type, 
					s.name AS shift_name
			FROM sharing_p_q pq
				JOIN 
					machine m ON pq.machine_id = m.id
				JOIN 
					operator o ON pq.operator_id = o.id
				JOIN 
					shifts s ON pq.shift_id = s.id 
				WHERE EXISTS ( SELECT 1 FROM machine m WHERE clientId = ".$clientId." AND m.id = pq.machine_id )
		
		");
		$data['shifts'] = $this->Crud->read_data("shifts",true);
		$data['operator'] = $this->Crud->read_data("operator",true);
		$data['machine'] = $this->Crud->read_data("machine",true);
		$data['operations_bom'] = $this->Crud->read_data("operations_bom");
		$data['reject_remark'] = $this->Crud->read_data("reject_remark");
		$data['sharing_bom'] = $this->Crud->read_data("sharing_bom"); //TO-DO Not sure where this is being used.
		
		$this->loadView('store/sharing_p_q', $data);
	}

	public function add_production_qty_sharing()
	{
		$shift_id = $this->input->post('shift_id');
		$machine_id = $this->input->post('machine_id');
		$operator_id = $this->input->post('operator_id');
		$date = $this->input->post('date');
		$qty = $this->input->post('qty');

		$data = array(
			'shift_id' => $shift_id,
			'date' => $date,
		);

		$routing_data = $this->Crud->read_data_where("sharing_p_q", $data);

		if ($routing_data) {
			echo "<script>alert('already present');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		} else {

			$data_insert = array(
				'shift_id' => $shift_id,
				'machine_id' => $machine_id,
				'operator_id' => $operator_id,
				'date' => $date,
				"created_by" => $this->user_id,
				"created_date" => $this->current_date,
				"created_time" => $this->current_time,
				"day" => $this->date,
				"month" => $this->month,
				"year" => $this->year,
			);

			$inser_query = $this->Crud->insert_data("sharing_p_q", $data_insert);
			if ($inser_query) {
				echo "<script>alert('successfully added');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {
				echo "<script>alert('Error IN User  Adding ,try again');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			}
		}
	}
	
	public function sharing_issue_request()
	{
		$created_month  = $this->input->post("created_month");
		$created_year  = $this->input->post("created_year");
		
		if (empty($created_year)) {
			$created_year = $this->year;
		}
		if (empty($created_month)) {
			$created_month = $this->month;
		}
		
		$data['created_year'] = $created_year;
		$data['created_month'] =$created_month;
		
		$data['operations_bom'] = $this->Crud->read_data("operations_bom");
		$query = "SELECT s.*, c.part_number, c.part_description, c.thickness, c.weight
			FROM sharing_issue_request s
			JOIN child_part c ON c.id = s.child_part_id
			WHERE clientId = ".$this->Unit->getSessionClientId()."
			AND year = ".$created_year;
		
		if($created_month !='ALL'){ //SHOW ALL
			$query.= " AND month = ".$created_month;
		}
		$query.= " ORDER by s.id DESC ";

		$data['sharing_issue_request'] = $this->Crud->customQuery($query);			

		$data['child_part'] = $this->SupplierParts->readSupplierPartsOnly();
		$month_arr = [];
		for ($i = 1; $i <= 12; $i++) {
            $month_data = $this->Common_admin_model->get_month($i);
            $month_number = $this->Common_admin_model->get_month_number($month_data);
            $month_arr[$i]['month_data'] = $month_data;
            $month_arr[$i]['month_number'] = $month_number;
        }
        $data['month_arr'] = $month_arr;
        
		$this->loadView('store/sharing_issue_request', $data);
	}

	public function add_sharing_issue_request()
	{
		$child_part_id = $this->input->post('child_part_id');
		$data = array(
			'child_part_id' => $this->input->post('child_part_id'),
			'qty' => (float)$this->input->post('qty'),
			'sharing_strip' => $this->input->post('sharing_strip'),
			"created_by" => $this->user_id,
			"created_date" => $this->current_date,
			"created_time" => $this->current_time,
			"day" => $this->date,
			"month" => $this->month,
			"year" => $this->year,
		);

		$inser_query = $this->Crud->insert_data("sharing_issue_request", $data);
		if ($inser_query) {
			if ($inser_query) {
				echo "<script>alert('Added Successfully');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {
				echo "<script>alert('Error IN User  Adding ,try again');document.location='erp_users'</script>";
			}
		} else {
			echo "Error";
		}
	}

	public function accept_sharing_request()
	{

		$id = $this->input->post('id');
		$accepted_qty = (float)$this->input->post('accepted_qty');
		$child_part_id = $this->input->post('child_part_id');
		$actual_stock = (float)$this->input->post('actual_stock');
		$sharing_qty = (float)$this->input->post('sharing_qty');
		$data23333 = array(
			'accepted_qty' => $accepted_qty,
			"status" => "completed"
		);

		$update = $this->Crud->update_data("sharing_issue_request", $data23333, $id);
		if ($update) {
			$new_stock = $actual_stock - $accepted_qty;
			$new_sharing_qty = $sharing_qty + $accepted_qty;
			$stockColName = $this->Unit->getStockColNmForClientUnit();
			$sharingQtyColName = $this->Unit->getSharingQtyColNmForClientUnit();

			$data2 = array(
				$stockColName => $new_stock,
				$sharingQtyColName => $new_sharing_qty,
			);
			$result2 = $this->SupplierParts->updateStockById($data2, $child_part_id);
			echo "<script>alert('Updated Successfully');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		} else {
			echo "<script>alert('Error While Updating ');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		}
	}


	public function add_sharing_p_q_history()
	{
		$name = $this->input->post('name');
		$output_part_id = $this->input->post('output_part_id');
		$sharing_p_q_id = $this->input->post('sharing_p_q_id');
		$input_part_id = $this->input->post('input_part_id');
		$number = $this->input->post('contractorCode');
		$qty = (float)$this->input->post('qty');
		$scrap_factor = $this->input->post('scrap_factor');
		$price = $this->input->post('price');
		$out_part_table_name = "";
		$input_part_table_name = "";
		$customer_id = "";
		$data = array(
			"name" => $name,
			"output_part_id" => $output_part_id,
		);

		$child_part_data_new = $this->SupplierParts->getSupplierPartById($input_part_id);
		$sharingQtyColName = $this->Unit->getSharingQtyColNmForClientUnit();
		$input_sharing_qty = (float)$child_part_data_new[0]->$sharingQtyColName;
		$input_part_id_details = $this->SupplierParts->getSupplierPartById($output_part_id);
		$weight = (float)$input_part_id_details[0]->weight;
		
		if (($qty) <= $input_sharing_qty) {
			$check = $this->Crud->read_data_where("sharing_bom", $data);
			if (false && $check != 0) {
				echo "<script>alert('Already Exists');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {

				$data = array(
					"output_part_id" => $output_part_id,
					"input_part_id" => $input_part_id,
					"qty" => $qty,
					"qty_in_kg" => ($qty * $weight),
					"output_part_table_name" => "child_part",
					"scrap_factor" => $scrap_factor,
					"input_part_table_name" => "child_part",
					"sharing_p_q_id" => $sharing_p_q_id,
					"created_date" => $this->current_date,
					"created_time" => $this->current_time,
					"day" => $this->date,
					"month" => $this->month,
					"year" => $this->year,
					"created_by" => $this->user_id,
				);

				$result = $this->Crud->insert_data("sharing_p_q_history", $data);

				$new_sharing_qty = $input_sharing_qty - ($qty);
				$updateStockData = array(
					$sharingQtyColName => $new_sharing_qty,
				);
				$result2 = $this->SupplierParts->updateStockById($updateStockData, $input_part_id);

				if ($result2) {
					echo "<script>alert('Added Sucessfully');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
				} else {
					echo "<script>alert('Unable to Add');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
				}
			}
		} else {
			echo "Sharing Stock Of " . $child_part_data_new[0]->part_number . " is " . $input_sharing_qty . ", and required qty is " . ($qty * $weight) . "";
		}
	}

	public function details_production_qty_sharing()
	{
		$sharing_p_q_id = $this->uri->segment('2');
		$data['sharing_p_q_id']	= $sharing_p_q_id;	

		$data['sharing_p_q'] = $this->Crud->customQuery("SELECT pq.*,o.name AS op_name, 
					m.name AS machine_name, 
					s.shift_type AS shift_type, 
					s.name AS shift_name
			FROM sharing_p_q pq
				JOIN 
					machine m ON pq.machine_id = m.id
				JOIN 
					operator o ON pq.operator_id = o.id
				JOIN 
					shifts s ON pq.shift_id = s.id 
			WHERE pq.id = ".$sharing_p_q_id);
			

		$data['sharing_p_q_history'] = $this->Crud->customQuery("SELECT h.*, 
		c.part_number as output_part_no, c.part_description as output_part_desc,
		cp.part_number as input_part_no, c.part_description as input_part_desc
		FROM sharing_p_q_history h 
			JOIN child_part c ON c.id = h.output_part_id 
			JOIN child_part cp ON cp.id = h.input_part_id 
			WHERE h.sharing_p_q_id = ".$sharing_p_q_id);
		
		$data['reject_remark'] = $this->Crud->read_data("reject_remark");

		$data['child_part_list']  = $this->SupplierParts->readSupplierParts();
		$data['sharingQtyColName']  =  $this->Unit->getSharingQtyColNmForClientUnit();
		$this->loadView('store/details_production_qty_sharing', $data);
	}

	/**
	 * Accept/Reject qty
	 */
	public function update_p_q_sharing()
	{

		$id = $this->input->post('id');
		$qty = (float)$this->input->post('qty');
		$accepted_qty = (float)$this->input->post('accepted_qty');
		$rejection_reason = $this->input->post('rejection_reason');
		$rejection_remark = $this->input->post('rejection_remark');
		$output_part_id = $this->input->post('output_part_id');
		$onhold_qty = (float)$this->input->post('onhold_qty');
		$scrap_factor = (float)$this->input->post('scrap_factor');
		$input_part_id = (float)$this->input->post('input_part_id');
		$qty_in_kg = (float)$this->input->post('qty_in_kg');

		$input_part_id_details = $this->SupplierParts->getSupplierPartOnlyById($input_part_id);
		$weight = (float)$input_part_id_details[0]->weight;
		$sum = (float)$accepted_qty + $onhold_qty;
		if ($sum <= $qty) {
			if ($accepted_qty == 0 && $onhold_qty == 0) {
				$rejected_qty = $qty;
			} else if ($accepted_qty == 0 && $onhold_qty > 0) {
				$rejected_qty = $qty - $onhold_qty;
			} else if ($accepted_qty > 0 && $onhold_qty == 0) {
				$rejected_qty = $qty - $accepted_qty;
			} else {
				$rejected_qty = $qty - ($accepted_qty + $onhold_qty);
			}

			$data23333 = array(
				'accepted_qty' => $accepted_qty,
				'rejected_qty' => $rejected_qty,
				'onhold_qty' => $onhold_qty,
				'rejection_reason' => $rejection_reason,
				'rejection_remark' => $rejection_remark,
				"status" => "completed"
			);

			$update = $this->Crud->update_data("sharing_p_q_history", $data23333, $id);
			if ($update) {
			    $output_part_data = $this->SupplierParts->getSupplierPartById($output_part_id);
				$stockColName = $this->Unit->getStockColNmForClientUnit();
				$previous_stock = $output_part_data[0]->$stockColName;
				$new_stock = $previous_stock + $accepted_qty;
				$update_data_output_part_id = array(
					$stockColName => $new_stock
				);
				$update = $this->SupplierParts->updateStockById($update_data_output_part_id, $output_part_id);
				echo "<script>alert('Updated Successfully ');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {
				echo "error while updating";
			}
		} else {
			echo "Qty Mismtach, Please try again";
		}
	}


	public function update_p_q_onhold_sharing()
	{

		$id = $this->input->post('id');
		$qty = (float)$this->input->post('qty');
		$accepted_qty = (float)$this->input->post('accepted_qty');
		$rejection_reason = $this->input->post('rejection_reason');
		$rejection_remark = $this->input->post('rejection_remark');
		$output_part_id = $this->input->post('output_part_id');
		$onhold_qty = (float)$this->input->post('onhold_qty');
		$scrap_factor = (float)$this->input->post('scrap_factor');
		$input_part_id = (float)$this->input->post('input_part_id');
		$qty_in_kg = (float)$this->input->post('qty_in_kg');

		$input_part_id_details = $this->SupplierParts->getSupplierPartOnlyById($input_part_id);

		$weight = (float)$input_part_id_details[0]->weight;
		$sum = (float)$accepted_qty + $onhold_qty;
		
		if ($sum <= $qty) {
			if ($accepted_qty == 0 && $onhold_qty == 0) {
				$rejected_qty = $qty;
			} else if ($accepted_qty == 0 && $onhold_qty > 0) {
				$rejected_qty = $qty - $onhold_qty;
			} else if ($accepted_qty > 0 && $onhold_qty == 0) {
				$rejected_qty = $qty - $accepted_qty;
			} else {
				$rejected_qty = $qty - ($accepted_qty + $onhold_qty);
			}

			$data23333 = array(
				'accepted_qty' => $accepted_qty,
				'rejected_qty' => $rejected_qty,
				'onhold_qty' => $onhold_qty,
				'rejection_reason' => $rejection_reason,
				'rejection_remark' => $rejection_remark,
				"status" => "completed"

			);
			$update = $this->Crud->update_data("sharing_p_q_history", $data23333, $id);

			if ($update) {
				$output_part_data = $this->SupplierParts->getSupplierPartById($output_part_id);
				$stockColName = $this->Unit->getStockColNmForClientUnit();
				$previous_stock = $output_part_data[0]->$stockColName;
				$new_stock = $previous_stock + $accepted_qty;
				$update_data_output_part_id = array(
					$stockColName => $new_stock,
				);

				$update = $this->SupplierParts->updateStockById($update_data_output_part_id, $output_part_id);

				echo "<script>alert('Updated Successfully ');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
			} else {
				echo "error while updating";
			}
		} else {
			echo "mismtach qty, please try again";
			// echo "<script>alert('Qty Mis Matched please add again ');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		}
	}
}
