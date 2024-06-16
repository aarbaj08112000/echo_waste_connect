<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('CommonController.php');

class NewEInvoiceController extends CommonController {

 function _construct()
    {
		$this->load->model('NewGSTCommon');
        parent::_construct();
    }
	  
    function index() {     
        $this->load->view('test');   
    }
	  
	function getBaseClientGSTNo(){
		return $this->NewGSTCommon->getBaseClientGSTNo();
	}
	
	function isProduction(){
		$this->load->model('NewGSTCommon');
		return $this->NewGSTCommon->isProduction();
	}
	
    function getEwayBillURL() {
		$this->load->model('NewGSTCommon');
		return $this->NewGSTCommon->getEwayBillURL();
	}
	
	function echoToTriage($str){
		 $this->load->model('NewGSTCommon');
		 $this->NewGSTCommon->echoToTriage($str);
	 }
	  
	/*
	   LOOKS FINE WITH HARD CODED RESPONSE
	   Get E-Invoice method invoke
	  */
	public function generate_E_invoice() {
		$this->echoToTriage("<br><u><b>NEW Generate E_invoice</b></u>");
		
		$downloadPDF = false;
		
		$new_sales_id = $this->uri->segment('2');
		$copy = $this->uri->segment('3');
		$new_sales_data = $this->Crud->get_data_by_id("new_sales", $new_sales_id, "id");
		$customer_data = $this->Crud->get_data_by_id("customer", $new_sales_data[0]->customer_id, "id");

		//get client data based on unit selection
		$client_data = $this->Crud->get_data_by_id("client", $new_sales_data[0]->clientId, "id");
		//get shipping details based on new sales data like customer or consignee address..
		$shipping_data = $this->getShippingDetails($new_sales_data, $customer_data);
	
		$po_parts_data = $this->Crud->get_data_by_id("sales_parts", $new_sales_id, "sales_id");
		$transporter_data = $this->Crud->get_data_by_id("transporter", $new_sales_data[0]->transporter_id, "id");
	
	
		$actualAllItemsArr = array();
		$all_final_totals = 0;
		$all_cgst_amounts = 0;
		$all_sgst_amounts = 0;
		$all_igst_amounts = 0;
		$all_tcs_amounts = 0;
		$total_assAmt = 0;
		$total_igstAmt = 0;
		$total_cgstAmt = 0;
		$total_sgstAmt = 0;
		$total_tcsAmt = 0;
		$total_totItemVal = 0;
		
		$unsortedHSNCodes = array();
		$sortedHSNCodesAssAmt = 0;
		$sortedHSNCodesCgstAmt = 0;
		$sortedHSNCodesSgstAmt = 0;
		$sortedHSNCodesIgstAmt = 0;
		$sortedHSNCodesTCSAmt = 0;
		$previousHSNCode;
		$i = 1;
		foreach ($po_parts_data as $ps) {
					  $actualIemsArr = array();
					 
					  $child_part_datas = $this->Crud->get_data_by_id("customer_part", $ps->part_id, "id");
					  $gst_structure_datas = $this->Crud->get_data_by_id("gst_structure", $ps->tax_id, "id");
					  
					  $unsortedHSN = array();
					  $hsn_codes = $child_part_datas[0]->hsn_code;
					  $isServc = $child_part_datas[0]->isservice;
					  $isInterState = false; //means only IGST is applicable so show it accordingly
					  
					  if ((int)$gst_structure_datas[0]->igst === 0) {
							$gsts = (int)$gst_structure_datas[0]->cgst + (int)$gst_structure_datas[0]->sgst;
							$cgsts = (int)$gst_structure_datas[0]->cgst;
							$sgsts = (int)$gst_structure_datas[0]->sgst;
							$tcss = (float)$gst_structure_datas[0]->tcs;
							$igsts = 0;
							$total_gst_percentages = $cgsts + $sgsts;
					  } else {
							$gsts = (int)$gst_structure_datas[0]->igst;
							$tcss = (float)$gst_structure_datas[0]->tcs;
							$cgsts = 0; 
							$sgsts = 0;
							$igsts = $gsts;
							$total_gst_percentages = $igsts;
							$isInterState = true;
					  }

					  if($ps->basic_total > 0) {
                           $subtotal = $ps->basic_total;
                      }else{
						   $subtotal = $ps->total_rate - $ps->gst_amount;
					  }
					 
	                  if($ps->part_price > 0) {
                           $rate = $ps->part_price;
                      }else{
						   $rate = round($subtotal / $ps->qty, 2);
					  }

					  $row_total =(float) $ps->total_rate+(float)$ps->tcs_amount;
					  $final_po_amount = (float)$final_po_amount + (float)$row_total;

					  $gst_amounts = ($gsts * $rate) / 100;
					  $final_amounts = $gst_amounts + $rate;
					  $final_row_amounts = $final_amounts * $ps->qty;

					  // $final_total = $final_total + $final_row_amount;
					  $actual_indv_totalAmt = $ps->qty * $rate;
					  $all_final_totals = $all_final_totals + $actual_indv_totalAmt;
					
					  $all_cgst_amounts = $all_cgst_amounts + $ps->cgst_amount;
					  $all_sgst_amounts = $all_sgst_amounts + $ps->sgst_amount;
					  $all_igst_amounts = $all_igst_amounts + $ps->igst_amount;
					  $all_tcs_amounts = $all_tcs_amounts + $ps->tcs_amount;
					
					    $discount = 0; //Not defined as of now
						$totAmt = round((float)$actual_indv_totalAmt, 2);	
						//AssAmt: Taxable Value (Total Amount -Discount)
						$assAmt =  round((float)($actual_indv_totalAmt - $discount),2);
						$igstAmt = round($ps->igst_amount,2); 	
						$cgstAmt = round($ps->cgst_amount,2); 	
						$sgstAmt = round($ps->sgst_amount,2);	
						$tcsAmt =  round($ps->tcs_amount,2); 
						
						$total_assAmt = $total_assAmt + $assAmt;
						$total_igstAmt = $total_igstAmt + $igstAmt;
						$total_cgstAmt = $total_cgstAmt + $cgstAmt;
						$total_sgstAmt = $total_sgstAmt + $sgstAmt;
						$total_tcsAmt = $total_tcsAmt + $tcsAmt;
						
						$actualIemsArr['slNo'] = strval($i);
						$actualIemsArr['prdDesc'] = $child_part_datas[0]->part_description;
						$actualIemsArr['isServc'] = $isServc;
						$actualIemsArr['hsnCd'] = $child_part_datas[0]->hsn_code; 		
						$actualIemsArr['qty'] = $ps->qty;								
						$actualIemsArr['unit'] = $ps->uom_id;							
						$actualIemsArr['unitPrice'] = $rate;
						$actualIemsArr['totAmt'] = $totAmt;
						$actualIemsArr['discount'] = $discount;				
						$actualIemsArr['preTaxVal'] = 0;
						$actualIemsArr['assAmt'] = $assAmt;
						$actualIemsArr['gstRt'] = $total_gst_percentages; 
						//gstRt: The GST rate, represented as percentage that applies to the invoiced item. It will IGST rate only
						
						$actualIemsArr['igstAmt'] = $igstAmt;				
						$actualIemsArr['cgstAmt'] = $cgstAmt;					
						$actualIemsArr['sgstAmt'] = $sgstAmt;
						//$actualIemsArr['othChrg'] = $tcsAmt;
						
						//NOTE: We don't need to pass individual other charges but that should be added to totalvalue 
						
						$totItemVal = round(($assAmt + $igstAmt + $cgstAmt + $sgstAmt), 2);
						$total_totItemVal = $total_totItemVal + $totItemVal + $tcsAmt; //adding other charges(tcs) here to totalvalue
						$actualIemsArr['totItemVal'] = $totItemVal; 
						$actualIemsArr['orgCntry'] = "IN";
						
						//get this for HSN sorting
						$unsortedHSN['hsn_code'] = $hsn_codes;
						$unsortedHSN['assAmt'] = $assAmt;
						$unsortedHSN['cgstRate'] = $cgsts;
						$unsortedHSN['cgstAmt'] = $cgstAmt;
						$unsortedHSN['sgstRate'] = $sgsts;
						$unsortedHSN['sgstAmt'] = $sgstAmt;
						$unsortedHSN['igstRate'] = $igsts;
						$unsortedHSN['igstAmt'] = $igstAmt;
						//$unsortedHSN['othChrg'] = $tcsAmt;
						//$unsortedHSN['total'] = $totItemVal;
						//echo var_dump($unsortedHSN);
						$sortedHSNCodesAssAmt = $sortedHSNCodesAssAmt +  $assAmt;
						$sortedHSNCodesCgstAmt = $sortedHSNCodesCgstAmt +  $cgstAmt;
						$sortedHSNCodesSgstAmt = $sortedHSNCodesSgstAmt +  $sgstAmt;
						$sortedHSNCodesIgstAmt = $sortedHSNCodesIgstAmt +  $igstAmt;
						$sortedHSNCodesTCSAmt =  $sortedHSNCodesTCSAmt +  $tcsAmt;
						$sortedHSNCodesTCSAmt = round((float)$sortedHSNCodesTCSAmt, 2);
						
						array_push($unsortedHSNCodes,$unsortedHSN);
						array_push($actualAllItemsArr,$actualIemsArr);
						
			
			$heights = "150px";
			
			$parts_html .= '
				<tr style="font-size:14px;text-align:right;">
				<td style="width:20px;">' . $i . '</td>
				<td >' . $child_part_datas[0]->part_number .  '</td>
				<td colspan="3" style="width:200px;text-align:left">' . $child_part_datas[0]->part_description . '</td>
				<td>' .  $hsn_codes . '</td>
				<td>' . $ps->uom_id . '</td>
				<td>' . $ps->qty . '</td>
				<td>' . $rate . '</td>
				<td></td>
				<td colspan="2" style="text-align:center;">' . number_format((float)$actual_indv_totalAmt, 2, '.', '') . '</td>
			</tr>
			';

			if($isInterState==true) {
				$eway_parts_html .= '
				<tr style="font-size:14px;text-align:center;">
				<td>' .  $hsn_codes . '</td>
				<td>' .  $child_part_datas[0]->part_number.'</td>
				<td colspan="6" style="text-align:left;" >'.$child_part_datas[0]->part_description.'</td>
				<td>' . $ps->qty . ' '.$ps->uom_id.'</td>
				<td>' . number_format((float)$actual_indv_totalAmt, 2, '.', '') . '</td>
				<td colspan="2"> IGST: '.$igsts.'%</td>
			</tr>';
			}else{
				$eway_parts_html .= '
				<tr style="font-size:14px;text-align:center;">
				<td>' .  $hsn_codes . '</td>
				<td>' .  $child_part_datas[0]->part_number.'</td>
				<td colspan="6" style="text-align:left;" >'.$child_part_datas[0]->part_description.'</td>
				<td>' . $ps->qty . ' '.$ps->uom_id.'</td>
				<td>' . number_format((float)$actual_indv_totalAmt, 2, '.', '') . '</td>
				<td colspan="2"> SGST: '.$sgsts .'%<br> CGST: ' .$cgsts .'</td>
			</tr>';
			}
		
			$i++;
		}
	
	$final_final_amount = $all_final_totals + $all_cgst_amounts + $all_sgst_amounts + $all_igst_amounts + $all_tcs_amounts;
	/* echo "Amount details : final_final_amount: ".$final_final_amount. "<br> all_final_totals: ".$all_final_totals."<br>all_cgst_amounts: ".$all_cgst_amounts."<br>all_sgst_amounts: ".$all_sgst_amounts."<br> all_igst_amounts: ".$all_igst_amounts."<br>all_tcs_amounts :".$all_tcs_amounts.'"'; */
	//API details:
	$this -> load->model('NewGSTCommon');
	$token = $this->NewGSTCommon->authentication($new_sales_id);
		
	if($token){
		$Authorization='Bearer '.$token;
		if($this->isProduction()==true){
			$url = "https://gsp.adaequare.com/enriched/ei/api/invoice";
       }else{
			$url = "https://gsp.adaequare.com/test/enriched/ei/api/invoice";
    	}
	    
		//Actual Data
		$dynamicData=array(
			"version"=>"1.1", 								//HardCoded 
			"tranDtls"=>array(
					"taxSch"=> "GST",						//HardCoded
					"supTyp"=> "B2B",						//HardCoded
					"regRev"=> "N",							//HardCoded - as customer doesn't support this
					"EcmGstin" => null
					//"igstOnIntra"=>"N"					//For time being commented-not sure whether this needs to be configured or not
				),
			"docDtls"=>array(
					"typ"=> "INV",								//HardCoded : As we don't support other types in ERP as of now
					"no"=> $new_sales_data[0]->sales_number, 	//$this->getCustomerPrefix()."/3-4/001",	//CHECK THIS --> $new_sales_data[0]->sales_number
					"dt"=>	$new_sales_data[0]->created_date    // "21/02/2023", 
				  ),
			"sellerDtls"=>array(
					"gstin"=> $client_data[0]->gst_number, 		//"05AALFP1139Q003"		
					"lglNm"=> $client_data[0]->client_name,	  	//client table - client_name
																//"trdNm"=> "Panchshil Techpark Private Limited", 
					"addr1"=> $client_data[0]->address1,											//client table - address1
					//"addr2"=> "Pune",
					"loc"=> $client_data[0]->location,			//client table - location
					"pin"=> $client_data[0]->pin,				//client table - pin
					"stcd"=> $client_data[0]->state_no,			//client table - state_no
					"ph"=> $client_data[0]->phone_no			//client table - phone_no
				   // "em"=> "test@einv.com"					// not required		  
				),
			"buyerDtls"=>array(
					"gstin"=> $customer_data[0]->gst_number,	
																// new_sales -> customer-id 	ref to customer.gst_number
					"lglNm"=> $customer_data[0]->customer_name,	// as customer name 
																// new_sales -> customer-id references to customer.customer_name
					"trdNm"=> $customer_data[0]->customer_name,	
																//new_sales -> customer-id references to customer.customer_name
					"addr1"=> $customer_data[0]->address1,		
																// new_sales -> customer-id references to customer.address1
				    // "addr2"=> "PUNE",	
					"loc"=> $customer_data[0]->location, 		
																// new_sales -> customer-id references to customer.location
					"pin"=>  $customer_data[0]->pin,				// Done - added
					"stcd"=> $customer_data[0]->state_no,		
																// new_sales -> customer-id references to customer.state_no
					"pos"=> $customer_data[0]->pos				
																// new_sales -> customer-id references to customer.pos
				   // "ph"=> "02066854600",
				   // "em"=> "test@einv.com"
			  ),
			"dispDtls"=>array(									
					"nm"=> $client_data[0]->client_name,			// client table - client_name
					"addr1"=>$client_data[0]->address1,				// client table - address1
					// "addr2"=> "Pune",
					"loc"=> $client_data[0]->location,				// client table - location
					"pin"=> $client_data[0]->pin,					// client table - pin
					"stcd"=> $client_data[0]->state_no,				// client table - state_no
			  ),
			"shipDtls"=>array(								  
					"gstin"=> $shipping_data['gst_number'],			// new_sales -> customer_id references to customer.gst_number
					"lglNm"=> $shipping_data['shipping_name'],		// new_sales -> customer_id references to customer.customer_name
					"addr1"=> $shipping_data['ship_address'],			// new_sales -> customer_id references to customer.address1
					//"addr2"=>"PUNE",
					"loc"=> $shipping_data['location'],				// new_sales -> customer_id references to customer.location
					"pin"=> $shipping_data['pin_code'],				// Added field into Customer.pin
					"stcd"=> $shipping_data['state_no'],			// new_sales -> customer_id references to customer.state_no
			  ),
			"valDtls"=>array(								 	
					"assVal"=> round((float)$total_assAmt, 2),					  	
					"cgstVal"=> round((float)$total_cgstAmt, 2),				  	
					"sgstVal"=> round((float)$total_sgstAmt, 2),
					"igstVal"=> round((float)$total_igstAmt, 2), 
					"OthChrg"=> round((float)$total_tcsAmt, 2), 
				    // "cesVal"=> 0,								 
				    // "stCesVal"=> 0,							
					"totInvVal"=> round((float)$total_totItemVal, 2),					
					//$tcs_amount,
				    // "rndOffAmt"=> 0,
				    // "totInvValFc"=> 0
			  ),
			"itemList"=> $actualAllItemsArr,						//$itemsarr,
			"EwbDtls"=>array(
					"VehType"=>"R",									// HardCoded - R
					"VehNo"=>$new_sales_data[0]->vehicle_number,	
					"TransMode"=>$new_sales_data[0]->mode,			
					"Distance"=>$new_sales_data[0]->distance		
			)
        );
		
		$this->echoToTriage("<br><br><b>Dynamic Request Data: </b><br>" . json_encode($dynamicData) ."<br><br>");
		$requestData = json_encode($dynamicData);    
		
		//echo "requestData: ".$requestData;
		//exit();

		$result = null;
	    $this->load->model('NewEInvoice');
		$result=$this->NewEInvoice->execute($url,$requestData,$action,$Authorization); 
		$this->echoToTriage("<br><br><b>Response :</b><br>" .json_encode($result) . "<br>");

		if($hardCoded) {
			//****************** HardCoded Response for WAGH TO TEST PDF REPORT ************************* :
				$WithoutEwayjsonData = '{
							"success": true,
							"message": "IRN generated successfully",
							"result": {
								"AckNo": 132410051115855,
								"AckDt": "2024-04-08 17:41:33",
								"Irn": "ba67ed54aff2b03628a587af0e9533872896a17b200840a4ded238b148459fb8",
								"SignedInvoice": "SignedInvoice",
								"SignedQRCode": "SignedQRCode",
								"Status": "ACT",
								"EwbNo": null,
								"EwbDt": null,
								"EwbValidTill": null,
								"Remarks": null
							},
							"info": [
								{
									"InfCd": "EWBERR",
									"Desc": [
										{
											"ErrorCode": "4013",
											"ErrorMessage": "The distance between the pincodes given is too high or low."
										}
									]
								}
							]
						}';

				
				$withEwayJsonData = '{
							"success": true,
							"message": "IRN generated successfully",
							"result": {
								"AckNo": 132410051135123,
								"AckDt": "2024-04-11 09:29:42",
								"Irn": "d7df5b8604f1b347afcc8f94fbdf77cd4af3eb8b7f05154482d1026e2bdc4fdf",
								"SignedInvoice": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjE1MTNCODIxRUU0NkM3NDlBNjNCODZFMzE4QkY3MTEwOTkyODdEMUYiLCJ4NXQiOiJGUk80SWU1R3gwbW1PNGJqR0w5eEVKa29mUjgiLCJ0eXAiOiJKV1QifQ.eyJkYXRhIjoie1wiQWNrTm9cIjoxMzI0MTAwNTExMzUxMjMsXCJBY2tEdFwiOlwiMjAyNC0wNC0xMSAwOToyOTo0MlwiLFwiSXJuXCI6XCJkN2RmNWI4NjA0ZjFiMzQ3YWZjYzhmOTRmYmRmNzdjZDRhZjNlYjhiN2YwNTE1NDQ4MmQxMDI2ZTJiZGM0ZmRmXCIsXCJWZXJzaW9uXCI6XCIxLjFcIixcIlRyYW5EdGxzXCI6e1wiVGF4U2NoXCI6XCJHU1RcIixcIlN1cFR5cFwiOlwiQjJCXCIsXCJSZWdSZXZcIjpcIllcIixcIklnc3RPbkludHJhXCI6XCJOXCJ9LFwiRG9jRHRsc1wiOntcIlR5cFwiOlwiSU5WXCIsXCJOb1wiOlwiQVJPTTVcIixcIkR0XCI6XCIxOC8wMy8yMDIzXCJ9LFwiU2VsbGVyRHRsc1wiOntcIkdzdGluXCI6XCIwMkFNQlBHNzc3M00wMDJcIixcIkxnbE5tXCI6XCJOSUMgY29tcGFueSBwdnQgbHRkXCIsXCJUcmRObVwiOlwiTklDIEluZHVzdHJpZXNcIixcIkFkZHIxXCI6XCI1dGggYmxvY2ssIGt1dmVtcHUgbGF5b3V0XCIsXCJBZGRyMlwiOlwia3V2ZW1wdSBsYXlvdXRcIixcIkxvY1wiOlwiR0FOREhJTkFHQVJcIixcIlBpblwiOjE3MjAwMSxcIlN0Y2RcIjpcIjAyXCIsXCJQaFwiOlwiOTAwMDAwMDAwMFwiLFwiRW1cIjpcImFiY0BnbWFpbC5jb21cIn0sXCJCdXllckR0bHNcIjp7XCJHc3RpblwiOlwiMzZBQUdDVDE1ODdRMVpKXCIsXCJMZ2xObVwiOlwiWFlaIGNvbXBhbnkgcHZ0IGx0ZFwiLFwiVHJkTm1cIjpcIlhZWiBJbmR1c3RyaWVzXCIsXCJQb3NcIjpcIjEyXCIsXCJBZGRyMVwiOlwiN3RoIGJsb2NrLCBrdXZlbXB1IGxheW91dFwiLFwiQWRkcjJcIjpcImt1dmVtcHUgbGF5b3V0XCIsXCJMb2NcIjpcIkdBTkRISU5BR0FSXCIsXCJQaW5cIjo1MDAwNTUsXCJQaFwiOlwiOTExMTExMTExMTFcIixcIkVtXCI6XCJ4eXpAeWFob28uY29tXCIsXCJTdGNkXCI6XCIzNlwifSxcIkl0ZW1MaXN0XCI6W3tcIkl0ZW1Ob1wiOjAsXCJTbE5vXCI6XCIxXCIsXCJJc1NlcnZjXCI6XCJOXCIsXCJQcmREZXNjXCI6XCJSaWNlXCIsXCJIc25DZFwiOlwiMzAwNDkwOTlcIixcIkJhcmNkZVwiOlwiMTIzNDU2XCIsXCJRdHlcIjoxMDAuMzQ1LFwiRnJlZVF0eVwiOjEwLFwiVW5pdFwiOlwiQkFHXCIsXCJVbml0UHJpY2VcIjo5OS41NDUsXCJUb3RBbXRcIjo5OTg4Ljg0LFwiRGlzY291bnRcIjoxMCxcIlByZVRheFZhbFwiOjEsXCJBc3NBbXRcIjo5OTc4Ljg0LFwiR3N0UnRcIjoxMixcIklnc3RBbXRcIjoxMTk3LjQ2LFwiQ2dzdEFtdFwiOjAsXCJTZ3N0QW10XCI6MCxcIkNlc1J0XCI6NSxcIkNlc0FtdFwiOjQ5OC45NCxcIkNlc05vbkFkdmxBbXRcIjoxMCxcIlN0YXRlQ2VzUnRcIjoxMixcIlN0YXRlQ2VzQW10XCI6MTE5Ny40NixcIlN0YXRlQ2VzTm9uQWR2bEFtdFwiOjUsXCJPdGhDaHJnXCI6MTAsXCJUb3RJdGVtVmFsXCI6MTI4OTcuNyxcIk9yZExpbmVSZWZcIjpcIjMyNTZcIixcIk9yZ0NudHJ5XCI6XCJBR1wiLFwiUHJkU2xOb1wiOlwiMTIzNDVcIixcIkJjaER0bHNcIjp7XCJObVwiOlwiMTIzNDU2XCIsXCJFeHBEdFwiOlwiMDEvMDgvMjAyMFwiLFwiV3JEdFwiOlwiMDEvMDkvMjAyMFwifSxcIkF0dHJpYkR0bHNcIjpbe1wiTm1cIjpcIlJpY2VcIixcIlZhbFwiOlwiMTAwMDBcIn1dfV0sXCJWYWxEdGxzXCI6e1wiQXNzVmFsXCI6OTk3OC44NCxcIkNnc3RWYWxcIjowLFwiU2dzdFZhbFwiOjAsXCJJZ3N0VmFsXCI6MTE5Ny40NixcIkNlc1ZhbFwiOjUwOC45NCxcIlN0Q2VzVmFsXCI6MTIwMi40NixcIkRpc2NvdW50XCI6MTAsXCJPdGhDaHJnXCI6MjAsXCJSbmRPZmZBbXRcIjowLjMsXCJUb3RJbnZWYWxcIjoxMjkwOH0sXCJQYXlEdGxzXCI6e1wiTm1cIjpcIkFCQ0RFXCIsXCJBY2NEZXRcIjpcIjU2OTczODk3MTMyMTBcIixcIk1vZGVcIjpcIkNhc2hcIixcIkZpbkluc0JyXCI6XCJTQklOMTEwMDBcIixcIlBheVRlcm1cIjpcIjEwMFwiLFwiUGF5SW5zdHJcIjpcIkdpZnRcIixcIkNyVHJuXCI6XCJ0ZXN0XCIsXCJEaXJEclwiOlwidGVzdFwiLFwiQ3JEYXlcIjoxMDAsXCJQYWlkQW10XCI6MTAwMDAsXCJQYXltdER1ZVwiOjUwMDB9LFwiUmVmRHRsc1wiOntcIkludlJtXCI6XCJURVNUXCIsXCJEb2NQZXJkRHRsc1wiOntcIkludlN0RHRcIjpcIjAxLzA4LzIwMjBcIixcIkludkVuZER0XCI6XCIwMS8wOS8yMDIwXCJ9LFwiUHJlY0RvY0R0bHNcIjpbe1wiSW52Tm9cIjpcIkRPQy8xMjAwM1wiLFwiSW52RHRcIjpcIjAxLzA4LzIwMjBcIixcIk90aFJlZk5vXCI6XCIxMjM0NTZcIn1dLFwiQ29udHJEdGxzXCI6W3tcIlJlY0FkdlJlZnJcIjpcIkRvYy8wMDNcIixcIlJlY0FkdkR0XCI6XCIwMS8wOC8yMDIwXCIsXCJUZW5kUmVmclwiOlwiQWJjMDAxXCIsXCJDb250clJlZnJcIjpcIkNvMTIzXCIsXCJFeHRSZWZyXCI6XCJZbzQ1NlwiLFwiUHJvalJlZnJcIjpcIkRvYy00NTZcIixcIlBPUmVmclwiOlwiRG9jLTc4OVwiLFwiUE9SZWZEdFwiOlwiMDEvMDgvMjAyMFwifV19LFwiQWRkbERvY0R0bHNcIjpbe1wiVXJsXCI6XCJodHRwczovL2VpbnYtYXBpc2FuZGJveC5uaWMuaW5cIixcIkRvY3NcIjpcIlRlc3QgRG9jXCIsXCJJbmZvXCI6XCJEb2N1bWVudCBUZXN0XCJ9XSxcIkV4cER0bHNcIjp7XCJTaGlwQk5vXCI6XCJBLTI0OFwiLFwiU2hpcEJEdFwiOlwiMDEvMDgvMjAyMFwiLFwiUG9ydFwiOlwiSU5BQkcxXCIsXCJSZWZDbG1cIjpcIk5cIixcIkZvckN1clwiOlwiQUVEXCIsXCJDbnRDb2RlXCI6XCJBRVwifSxcIkV3YkR0bHNcIjp7XCJUcmFuc0lkXCI6XCIzN0FNQlBHNzc3M00wMDJcIixcIlRyYW5zTmFtZVwiOlwiWFlaIEVYUE9SVFNcIixcIlRyYW5zTW9kZVwiOlwiMVwiLFwiRGlzdGFuY2VcIjoyMDQzLFwiVmVoTm9cIjpcImthMTIzNDU2XCIsXCJWZWhUeXBlXCI6XCJSXCJ9fSIsImlzcyI6Ik5JQyBTYW5kYm94In0.3rq0lXX-fKpnVXdA7tU2eXjdyQy5SXLseEe38vBa07MHCpjTZ3-52Ze336PrQRGnTx_pqfMitWVvzvt_WMCx1XCmrqhZV2ZHkiKY9uw8FAzgsIYq4w75KZWLhMMme9nbeJC8G03OEvoRtilC7VhEgB79q8WYXofCb4Yb5dPIrtwfTURMQnis-XK2J6I8-YYp_wxzyD9alZFrkxHUvrfDcSpkElgv_18Yr8HNcOh-gVQtiraBs24ia0dlERBA6E-Bemepk9VA1osgzLVDIrUNqKFGxR2olsZjeXoM722x-42JOEF5XU2brxOkf6U_0R4NO1Lpf572jSF615QGG_HsYw",
								"SignedQRCode": "eyJhbGciOiJSUzI1NiIsImtpZCI6IjE1MTNCODIxRUU0NkM3NDlBNjNCODZFMzE4QkY3MTEwOTkyODdEMUYiLCJ4NXQiOiJGUk80SWU1R3gwbW1PNGJqR0w5eEVKa29mUjgiLCJ0eXAiOiJKV1QifQ.eyJkYXRhIjoie1wiU2VsbGVyR3N0aW5cIjpcIjAyQU1CUEc3NzczTTAwMlwiLFwiQnV5ZXJHc3RpblwiOlwiMzZBQUdDVDE1ODdRMVpKXCIsXCJEb2NOb1wiOlwiQVJPTTVcIixcIkRvY1R5cFwiOlwiSU5WXCIsXCJEb2NEdFwiOlwiMTgvMDMvMjAyM1wiLFwiVG90SW52VmFsXCI6MTI5MDgsXCJJdGVtQ250XCI6MSxcIk1haW5Ic25Db2RlXCI6XCIzMDA0OTA5OVwiLFwiSXJuXCI6XCJkN2RmNWI4NjA0ZjFiMzQ3YWZjYzhmOTRmYmRmNzdjZDRhZjNlYjhiN2YwNTE1NDQ4MmQxMDI2ZTJiZGM0ZmRmXCIsXCJJcm5EdFwiOlwiMjAyNC0wNC0xMSAwOToyOTo0MlwifSIsImlzcyI6Ik5JQyBTYW5kYm94In0.aySuCDXjLe0anNpaSflpJxO8j0jquUlW0zKseI0MbUAgFMk9gjr5dvmQBXrVk0QavYO77XC5EHLQ3Prwptd-7a7qe8Edb7K_QmjqCXU1SqYIeeqNM3-R2UVNfxk_zmAx3QgWo6Y0W3L2jbqQBP3rQtbXo-Mucxoo0zGlNrYPcIw-b--ONSmNaFZiCw0o5zgh_gs5HVVebJSsgV8DDmJ7niQlDp7yZHdQMawyBVd5UDcYiQInRxcsLfOgBg16cOQAxRUN8EiC1dV-EbJkdPATON3JV-sN-_J5H3PUMdhLM1xWpx8DZjU9hFIsoTuxViqJ90BwEml6PwSzrf-3gifu9g",
								"Status": "ACT",
								"EwbNo": 381009325908,
								"EwbDt": "2024-04-11 09:30:00",
								"EwbValidTill": "2024-04-22 23:59:00",
								"Remarks": null
							}
						}';


				$result = $withEwayJsonData;
				$testArrayData = json_decode($result, true);
				$result = $testArrayData;
			}
		echo "<br><br>API Result : ".$result;
			 
		$isSuccess = false;
		$isDuplicateIRNError = false;
		echo "<br>isSuccess?".$result['success'];
		if(isset($result['success']) && $result['success'] == false) {
			$this->echoToTriage("API error occured...");
			$errorDet = $result['message'];
			$this->echoToTriage( "<br><br><u>Errors:</u><br>");
			
			if (strpos($errorDet, "2150") !== false) {
						$isDuplicateIRNError = true;
						$alertCode = "<script>
							alert('\\n Einvoice is already generated so refresh View Einvoice page and use Get E-invoice Details button to get Einvoce details. \\n Close this window');
							</script>";
						echo $alertCode;
						$this->addWarningMessage("GST Error Response: <br> ErrorMsg: " .$errorDet." <br>Use 'Get E-invoice Details' button to refresh Einvoice details");
			} else {
						$this->echoToTriage("\n GST Error Response: 
							   \n ErrorMsg: " .$errorDet);
						$alertCode = "<script>
							alert('\\n GST Error Response: \\n ErrorMsg: " .$errorDet."');
							</script>";
						echo $alertCode;
			}

			$this->load->model('NewEInvoice');
			$infoDet = $result['result'];
			$this->echoToTriage( "<br><br><u>More Details:</u><br>");
			foreach($infoDet as $info) {
				if(isset($info)){
					$this->echoToTriage('<ul><b>IRN Number:</b> ' . $info['Irn'] . '</ul>');
					if($isDuplicateIRNError && $info['InfCd']=="DUPIRN"){
						//insert record so this can be used to retrieve Einvoice details
						$response_data = array(
							'new_sales_id' => $new_sales_id,
							'Irn' => $info['Desc']['Irn']
						);
						$insert = $this->Common_admin_model->insert('einvoice_res', $response_data);
					}
					
				}
			}
			echo '<script>window.close();</script>';
			
		} else if(isset($result['success']) && $result['success'] == true) {
			$isSuccess = true;
			$infoDet = $result['info'];
			$this->echoToTriage("EInvoice generated successfully.");
			$alertCode = "<script>alert('EInvoice generated successfully.');</script>";
			echo $alertCode;
			
			foreach($infoDet as $info) {
				$descDet = $info['Desc'];
				foreach($descDet as $desc) {
					if(isset($info['InfCd']) && isset($info['InfCd']) == "EWBERR") {
							$this->echoToTriage("\n EWAY BILL ERROR: 
									\n ErrorCode: ".$desc['ErrorCode']."
									\n ErrorMsg: " .$desc['ErrorMessage']);
							$alertCode = "<script>
								alert('\\n EWAY BILL ERROR : \\n ErrorCode: ".$desc['ErrorCode']."\\n ErrorMsg: " .$desc['ErrorMessage']."');
								</script>";
							echo $alertCode;
						}
					}
				}
			} 
		
	if($isSuccess == true) {
		  $gstResponse = $result['result'];
		  $AckNo = $gstResponse['AckNo'];
		  $AckDt = $gstResponse['AckDt'];
		  $IrnNo=$gstResponse['Irn'];
		  $SignedQRCode = $gstResponse['SignedQRCode'];
	      $SignedInvoice = $gstResponse['SignedInvoice'];
		  
		  $EwbNo= $gstResponse['EwbNo'];
		  $EwbDt= $gstResponse['EwbDt'];
		  $EwbValidTill = $gstResponse['EwbValidTill'];
		  if(!empty($EwbNo)){
			$ewbStatus = 'ACTIVE';
		  }
		 
			// Response Insert
			$response_data = array(
				'Status' => $gstResponse['Status'],
				'new_sales_id' => $new_sales_id,
				'EwbNo' => $EwbNo,
				'ack_date' => $gstResponse['AckDt'],
				'AckDt' => $gstResponse['AckDt'],
				'Irn' => $IrnNo,
				'EwbDt' => $gstResponse['EwbDt'],
				'EwbValidTill' => $EwbValidTill,
				'EwbStatus' => $ewbStatus,
				'SignedQRCode' => $SignedQRCode,
				'AckNo' => $AckNo,
				'SignedInvoice' => $SignedInvoice,
				'info' => $gstResponse['info'],
				'statuscode' => $gstResponse['status']
			);
			$insert = $this->Common_admin_model->insert('einvoice_res', $response_data);
    	
 			
		$this->echoToTriage("<br><br>IRN information from Response: <br><b>IRN: ". $IrnNo ." ,<br>Ack No: " .$AckNo ." ,<br>AckDt: " . $AckDt."<br><br>");

		$final_total = 0;
		$cgst_amount = 0;
		$sgst_amount = 0;
		$igst_amount = 0;
		$tcs_amount = 0;
		$height = "350px";

    if ($i == 2) {
      $height = "200px";
    }
    if ($i == 3) {
      $height = "200px";
    }
    if ($i == 4) {
      $height = "200px";
    }
    if ($i == 5) {
      $height = "200px";
    }
    if ($i >= 6) {
      $height = "200px";
    }
    if ($i >= 7) {
      $height = "200px";
    }
    if ($i >= 8) {
      $height = "200px";
    }
    if ($i >= 9) {
      $height = "200px";
    }
    if ($i >= 10) {
      $height = "200px";
    }
    if ($i >= 11) {
      $height = "30px";
    }
    if ($i >= 12) {
      $height = "0px";
    }
    if ($i >= 13) {
      $height = "0px";
    }
    if ($i >= 14) {
      $height = "0px";
    }
    if ($i >= 15) {
      $height = "0px";
    }

	$all_totalOther = $all_cgst_amounts + $all_sgst_amounts + $all_igst_amounts + $all_tcs_amounts;
    $final_final_amount = $all_final_totals + $all_cgst_amounts + $all_sgst_amounts + $all_igst_amounts + $all_tcs_amounts;
   
    // Sort the multidimensional array by the 'hsn_code' column in ascending order
	$this->Crud->sort_by_column($unsortedHSNCodes, 'hsn_code');
	$hsn_code_table_html = $this-> NewEInvoice -> getHSNTableData($unsortedHSNCodes);
    
	//$all_final_final_amount = $all_final_totals + $all_cgst_amounts + $all_sgst_amounts + $all_igst_amounts + $all_tcs_amounts;

	$transportMode = $this-> NewEInvoice -> getModeOfTransport ($new_sales_data[0]->mode);
    $html_content = '
	    <!DOCTYPE html>
        <head>
			<style> html { margin: 1px}
			@media print {
				  .article { page-break-after: always; }
				  a[href]:after {
					content: none !important;
				  }
				  
				  table { /* Or specify a table class */
					max-height: 100%;
					overflow: hidden;
					page-break-after: always;
					 border: 1px solid black;
					 border-collapse: collapse;
				  }
				  @page 
					{
						size: auto;   /* auto is the initial value */
						margin: 2mm;  /* this affects the margin in the printer settings */
					}
				  body {
					   margin-top: 5mm; 
					   margin-left: 2mm;
					   margin-bottom: 5mm; 
					   margin-right: 2mm
				 }
				}
				
			th, td {
			  border: 1px solid black;
			  border-collapse: collapse;
			  padding-top: 3px;
			  padding-bottom: 3px;
			  padding-left: 8px;
			  padding-right: 8px;
			}
			
			</style>
			<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
		</head>
        <body>
		
		<script>
		function printSection() {
			var printContent = document.getElementById("print-section").innerHTML;
			var originalContent = document.body.innerHTML;
			document.body.innerHTML = printContent;
			window.print();
			document.body.innerHTML = originalContent;
		}
		</script>
		<div style>
		<button style="color: white;background-color: red;"onclick="printSection()">Print E-Invoice</button>
		</div>
		<br>
		<div id="print-section">
		<table padding="2" cellspacing="0" border="1px">
			<tr>
				<th colspan="12" style="text-align:center; font-size:16px">EInvoice</th>
			</tr>
			<tr>
				<td colspan="6" align="bottom">
					IRN No :<b>'.$IrnNo.'</b><br>
					Ack No :<b>'.$AckNo.'</b><br>
					Act Date :<b>'.$AckDt.'</b><br><br>
					e-Way Bill No :<b>'.$EwbNo.'</b><br>
					e-Way Bill Date :<b>'.$EwbDt.'</b>
				  </td>
				<td colspan="6" style="padding-top: 5px;padding-bottom: 5px;">    
					<span class="qrcode"></span>
			  </td>
			  <script>
				var qrData ="'.$SignedQRCode.'"; 
				var qrcode = new QRCode(document.querySelector(".qrcode"), {
					text: qrData,
					width: 128,
					height: 128,
					colorDark : "#000000",
					colorLight : "#ffffff",
					correctLevel : QRCode.CorrectLevel.H
				});
			  </script>
			</tr>
			
			<!-- <tr> 
				  <td colspan="6" >IRN No.'.$IrnNo.'</td>      
				  <td colspan="6" rowspan="3" ><img colspan="" src="' . base_url('Logo.jpg') . '" style="float:left;" "></td> 
			</tr> -->    
			<tr style="font-size:14px">
				<td colspan="6"  width="60%">
					<b>'.$client_data[0]->client_name.'</b><br>
					'.$client_data[0]->address1.'<br>
					STATE : ' . $client_data[0]->state . ', STATE CODE : ' . $client_data[0]->state_no . '<br>
					GSTIN/UIN : '  . $client_data[0]->gst_number . '<br>
					PAN NO : ' . $client_data[0]->pan_no . '<br>
				</td>
				<td colspan="6" align="left" width="40%">
					Invoice NO. <b> ' . $new_sales_data[0]->sales_number . '</b><br>
					Invoice Date . <b>' . $po_parts_data[0]->created_date . '</b><br>
					Time of Supply <b> . ' . $po_parts_data[0]->created_time . '</b><br>
					WHETHER TAX ON REVERSE CHARGE  : <b>No</b><br>
				</td>
			</tr>
            <tr style="font-size:14px">
			<td colspan="6">
				<b> Details of Consignee (Shipped to)</b> ,<br>
				<b>' . $shipping_data['shipping_name'] . '</b><br>
				' . $shipping_data['ship_address'] . ' <br>
				STATE : </b>' . $shipping_data['state'] . '<br>
				STATE CODE : ' . $shipping_data['state_no'] . '<br>
				PAN NO : ' . $shipping_data['pan_no'] . '<br>
				GSTIN/UIN : ' . $shipping_data['gst_number'] . '
			</td>
			<td colspan="6">
				<b>Details of Receiver (Billed To)</b><br> 
				<b>' . $customer_data[0]->customer_name . '</b><br>
				' . $customer_data[0]->billing_address . '<br>
				STATE : ' . $customer_data[0]->state . '<br>
				STATE CODE : ' . $customer_data[0]->state_no . '<br>
				PAN NO : ' . $customer_data[0]->pan_no . '<br>
				GSTIN/UIN : ' . $customer_data[0]->gst_number . '
			</td>
        </tr>
        <tr  style="font-size:14px">
        <td colspan="6">
        
        <b>PO Number  :</b>' . $po_parts_data[0]->po_number . '     
        

        <b style="margin-left:10px">PO Date  :</b>' . $po_parts_data[0]->po_date . '
        </td>
        <td colspan="6">
        <b>Vendor Code  . :</b>' . $customer_data[0]->vendor_code . '<br>
        </td>
        </tr>
        <tr style="font-size:12px;text-align:center">
          <th style="width:20px;">Sr No</th>
		  <th style="width:70px;" >Part Number </th>
		  <th colspan="3" style="width:200px;">Part Description </th>
		  <th style="width:50px;" >HSN / SAC </th>
		  <th style="width:20px;">UOM </th>
		  <th style="width:20px;">QTY </th>
		  <th style="width:20px;">Rate/Unit  </th>
		  <th style="width:20px;">Disc. %</th>
		  <th colspan="2">Amount</th>
        </tr>
          ' . $parts_html . '
          <tr>
            <td colspan="12" style="height:' . $height . '"></td>
          </tr>

          <tr style="font-size:12px">
            <td rowspan="3" colspan="7">

            <b>
            Mode Of Transport : ' . $transportMode . ' <br> <br> 
            Transporter : ' . $transporter_data[0]->transporter_id . ' <br> <br>
            Vehicle No : ' . $new_sales_data[0]->vehicle_number . ' <br> <br>
            L.R No : ' . $new_sales_data[0]->lr_number . ' <br> <br>
            </b>

            </td>
          
            <th colspan="3" style="text-align:right">SUB TOTAL </th>
            <th colspan="2">'  . number_format((float)$all_final_totals, 2, '.', '') . '</th>
          </tr>

          <tr style="font-size:12px">
            <th colspan="3" style="text-align:right">CGST Amt' . $cgst . '</th>
            <th colspan="2">' .  number_format((float)$all_cgst_amounts, 2, '.', '') . '</th>
          </tr>
          
          <tr style="font-size:12px">
            <th colspan="3" style="text-align:right">SGST Amt' . $sgst . '</th>
            <th colspan="2">'  . number_format((float)$all_sgst_amounts, 2, '.', '') . '</th>
          </tr>
          <tr style="font-size:12px">
          <td rowspan="3" colspan="7">
            <b>Payment Terms : ' . $customer_data[0]->payment_terms . '</b> <br><br>
            <span><b>Bank Details :</b> ' . $client_data[0]->bank_details . '</span><br> <br>
            <b>Electronic Reference No.</b> <br> <br>
            <span> <b>Invoice Value (In Words):</b> ' . strtoupper($this->getIndianCurrency(number_format((float)$final_final_amount, 2, '.', ''))) . '</span> 
          </td>
		    <th colspan="3" style="text-align:right">IGST Amt' . $igst . '</th>
            <th colspan="2">' .  number_format((float)$all_igst_amounts, 2, '.', '') . '</th>
          </tr>
		  <tr style="font-size:12px">
            <th colspan="3" style="text-align:right">TCS Amt' . $tcs . '</th>
            <th colspan="2">' .  number_format((float)$all_tcs_amounts, 2, '.', '') . '</th>
          </tr>
          
          <tr style="font-size:12px">
            <th colspan="3" style="text-align:right">GRAND TOTAL (Rs) </th>
            <th colspan="2">' . number_format((float)$final_final_amount, 2, '.', '') . '</th>
          </tr>
		  </table>
		  <!-- <div style="page-break-inside:avoid;page-break-after:always"></div> -->
		  <table padding="0" cellspacing="0" border="1px">
			<tr>
			<th colspan="12" style="text-align:center; font-size:16px"></th>
			</tr>
			<tr style="font-size:12px;text-align:center">
				<th colspan="2" width="30%" rowspan="2">HSN/SAC</th>
				<th colspan="2" width="30%" rowspan="2">Taxable</th>
				<th colspan="2" width="10%">Central Tax</th>
				<th colspan="2" width="10%">State Tax</th>
				<th colspan="2" width="10%">IGST</th>
				<th colspan="1" width="10%">TCS</th>
				<th colspan="2" rowspan="2" width="10%">Total Tax Amount</th>
			</tr>
			<tr style="font-size:12px;text-align:center">
				<th>Rate</th>
				<th>Amount</th>
				<th>Rate</th>
				<th>Amount</th>
				<th>Rate</th>
				<th>Amount</th>
				<th>Amount</th>
			</tr>'		
			.$hsn_code_table_html.'
			<tr style="font-size:15px;text-align:right">
			
				<td colspan="2"><b>Total</b></td>
				<td colspan="2"><b>Rs.'.$sortedHSNCodesAssAmt.'</b></td>
				<td colspan="2"><b>Rs.'.$sortedHSNCodesCgstAmt.'</b></td>
				<td colspan="2"><b>Rs.'.$sortedHSNCodesSgstAmt.'</b></td>
				<td colspan="2"><b>Rs.'.$sortedHSNCodesIgstAmt.'</b></td>
				<td colspan="1"><b>Rs.'.$sortedHSNCodesTCSAmt.'</b></td>
				<td colspan="2"><b>Rs.'.($sortedHSNCodesCgstAmt + $sortedHSNCodesSgstAmt +$sortedHSNCodesIgstAmt + $sortedHSNCodesTCSAmt).'</b></td>
			</tr>
	      <tr style="font-size:9px">
            <td colspan="6">
			<p>We hereby certify that my/our registration certificate under the Goods and Service Tax
                Act, 2017 is in force on the date on which the sale of the goods specified in this Tax
                invoice is made by me/us and that the transaction of sale covered by this taxinvoice has
                been effected by me/us and it shall be accounted for in the turnover of sales while filling
                of return and the due tax. If any, payable on the sale has been paid or shall be paid.
                <br>
                Certified that the particulars given above are true and correct and the amount indicated
                represents the price actully charged and that there is no flow of additional consideration
    directly or indirectly from byuer.
    Interest @24% P.A. will be charged on all overdue invoices.<br>
    Subject To Pune Jurisdiction.</p>
          </td>
          <td colspan="3" >
          <br>
          <br>
          <br>
          <br>  
          <br>
          <br>

          <h4 style="text-align: left;margin-left:25px; font-size:11px"> Receiver Signature </h4>
          </td>
          <td colspan="3" >
          
          <h4 style="text-align: right;margin-right:25px; font-size:12px"> For, '.$this->getCustomerNameDetails().' </h4>
          <h6 style="text-align: right">  </h6>
          <h6 style="text-align: right">  </h6>
          <h6 style="text-align: right">  </h6>
          <br>
          <br>
          <h4 style="text-align: right;margin-right:25px; font-size:11px"> Authorized Signatory </h4>
         
          <h6 style="text-align: right">  </h6>
          <h6 style="text-align: right">  </h6>

          </td>
        </tr>
        </table>
		<p><p>
		<div style="page-break-inside:avoid;page-break-after:always"></div>
		<table padding="2" cellspacing="0" border="1px">
			<tr>
				<th colspan="12" style="width:500px; text-align:center; font-size:16px">e-Way Bill</th>
			</tr>
			<tr>
				<td colspan="8" align="bottom">
					Doc No :<b> '.$new_sales_data[0]->sales_number.'</b><br>
					Date   :<b> '.$new_sales_data[0]->created_date.'</b><br>
					IRN    :<b> '.$IrnNo.'</b><br><br>
					Ack No :<b> '.$AckNo.'</b><br>
					Ack Date :<b>'.$AckDt.'</b>
				 </td>
				 <td colspan="4" align="bottom">
					<span class="ewayQRcode"></span>
				 </td>
				  <script>
					var qrData ="'.$EwbNo.'"; 
					var qrcode = new QRCode(document.querySelector(".ewayQRcode"), {
						text: qrData,
						width: 128,
						height: 128,
						colorDark : "#000000",
						colorLight : "#ffffff",
						correctLevel : QRCode.CorrectLevel.H
					});
				</script>
			</tr>
			<tr>
				<td colspan="12" style="text-align:left; font-size:16px" ><b>1. e-Way Bill Details</b><br></th>
			</tr>
			<tr>
				<td colspan="6" align="top">
					e-Way Bill No :<b> '.$EwbNo.'</b><br>
					Generated By   :<b> '.$client_data[0]->gst_number.'</b><br>
					Supply Type    :<b> Outward-Supply</b><br><br>
					Ack No :<b> '.$AckNo.'</b><br>
					Ack Date :<b>'.$AckDt.'</b>
				  </td>
				  <td colspan="4" align="top">
					Mode :<b> '.$new_sales_data[0]->mode.'- Road</b><br>
					Approximate Distance   :<b>'.$new_sales_data[0]->distance.'</b><br>
					Transaction Type    :<b> Regular</b><br><br>
					Ack No :<b> '.$AckNo.'</b><br>
					Ack Date :<b>'.$AckDt.'</b>
				  </td>
				  <td colspan="2" align="top">
					  Generated Date:<b>   '.$EwbDt.'</b><br>
					  Valid Upto	:<b>   '.$EwbValidTill.'</b><br>
				  </td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:left; font-size:16px"><b>2. Address Details</b></th>
			</tr>
			<tr>
				<td colspan="6" align="top">
					<b>From :</b><br>
					'.$client_data[0]->client_name.'<br>
					'.$client_data[0]->address1.','.$client_data[0]->state.' '.$client_data[0]->pin.'<br>
					GSTIN : '.$client_data[0]->gst_number.'<br>
				  </td>
				  <td colspan="6" align="top">
				  <b>To :</b><br>
					'.$customer_data[0]->customer_name.'<br>
					'.$customer_data[0]->billing_address.','.$customer_data[0]->state.' '.$customer_data[0]->pin.'<br>
					GSTIN : '.$customer_data[0]->gst_number .'<br>
				  </td>
			</tr>
			<tr>
				<td colspan="8" align="top">
					<b>Dispatched From :</b><br>
					'.$client_data[0]->client_name.'<br>
					'.$client_data[0]->address1.','.$client_data[0]->state.' '.$client_data[0]->pin.'<br>
					GSTIN : '.$client_data[0]->gst_number.'<br>
				  </td>
				  <td colspan="4" align="top">
				  <b>Ship To :</b><br>
					'.$shipping_data['shipping_name'].'<br>
					'.$shipping_data['ship_address'].','.$shipping_data['state'].' '.$shipping_data['pin_code'].'<br>
					GSTIN : '.$shipping_data['gst_number'] .'<br>
				  </td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:left; font-size:16px"><b>3. Goods Details</b></th>
			</tr>
			<tr style="font-size:14px;text-align:center;">
				<th>HSN Code</th>
				<th>Product Name</th>
				<td colspan="6" style="text-align:left;">Product Description</th>
				<th>Quantity </th>
				<th>Taxable Amt</th>
				<th colspan="2">Rate</th>
			</tr>
			' . $eway_parts_html . '
			<tr>
				<td colspan="12" style="height:25px"></td>
			</tr>
			<tr>
			  <td colspan="4" width="33%"> 
				Tot.Taxable Amt: <b>'.number_format((float)$all_final_totals, 2, '.', '').'</b><br>
				Other Amt :<b>'.number_format((float)$all_totalOther, 2, '.', '').'</b><br>
				
			  </td>
              <td colspan="4" width="33%">
			    CGST Amt : <b>'.number_format((float)$all_cgst_amounts, 2, '.', '').'</b><br>
				SGST Amt : <b>'.number_format((float)$all_sgst_amounts, 2, '.', '').'</b><br>
				IGST Amt : <b>'.number_format((float)$all_igst_amounts, 2, '.', '').'</b><br>
				TCS Amt  : <b>'.number_format((float)$all_tcs_amounts, 2, '.', '').'</b>
			  </td>
			  <td colspan="4" width="33%"><br>
				Total Inv Amt :<b>'.number_format((float)$final_final_amount, 2, '.', '').'</b><br>
			  </td>
			</tr>
			<tr>
				<td colspan="12" style="text-align:left; font-size:16px"><b>4. Transportation Details</b></th>
			</tr>
			<tr>
				<td colspan="12" align="top">
					Transporter ID :'.$transporter_data[0]->transporter_id.'<br>
					Name :'.$transporter_data[0]->name.'<br>
				</td>
				<!-- <td colspan="6" align="top">
					Doc No:<br>
					Date<br>
				  </td> -->
			</tr>
			
			<tr>
				<td colspan="12" style="text-align:left; font-size:16px"><b>5. Vehicle Details</b></th>
			</tr>
			<tr>
				<td colspan="4" align="top">
					Vehicle No : <b>'.$new_sales_data[0]->vehicle_number.'</b><br>
				</td>
				<td colspan="4" align="top">
					From : <br>
				</td>
				<td colspan="4" align="top">
					CEWB No : <br>
				</td>
			</tr>
			
		</table>
		</div>
        </body>
      </html>
	 ';

		if($downloadPDF == true){
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("E-Invoice-Details.pdf", array("Attachment" => 1));
		}else{
			echo $html_content;
			die;
		}
	  }
  }
}

	/**
	 * LOOKS FINE - NO 3RD PARTY CHANGES
	 */
	public function view_e_invoice_by_id() {
		
		$sales_id = $this->uri->segment('2');
		$new_sales = $this->Crud->get_data_by_id("new_sales", $sales_id, "id");
									 
		$data['new_sales'] = $this->Crud->get_data_by_id("new_sales", $sales_id, "id");
		$data['customer'] = $this->Crud->get_data_by_id("customer", $data['new_sales'][0]->customer_id, "id");
		// $data['gst_structure'] = $this->Crud->read_data("gst_structure");
		// $data['uom'] = $this->Crud->read_data("uom");
		$data['transporter'] = $this->Crud->read_data("transporter");
		$sales=array("new_sales_id"=> $sales_id);
        $data['einvoice_res_data'] = $this->Crud->get_data_by_id_multiple_condition("einvoice_res", $sales); 
									 
		$data['$new_sales'] = $this->Crud->get_data_by_id("new_sales", $sales_id, "id");
		$this->load->view('header');
		$this->load->view('view_e_invoice_by_id', $data);
		$this->load->view('footer');
	}
	
  /**
   * Cancel E-Invoice
   */
  public function cancel_E_invoice_update()
	{
		$new_sales_id = $this->input->post('new_sales_id');
		$new_sales=array(
			"new_sales_id"=>$new_sales_id,
		  );

		$einvoice_res_data = $this->Crud->get_data_by_id_multiple_condition("einvoice_res", $new_sales);
	
		$issdata = $einvoice_res_data[0]->iss; //TO-DO : what to do with this ?
		$IrnNo=$einvoice_res_data[0]->Irn;

		$CancelReason = $this->input->post('CancelReason');
		$CancelRemark = $this->input->post('CancelRemark');

		$this->echoToTriage("<br> CancelReason : ".$CancelReason." <br>CancelRemark : ". $CancelRemark. " <br>IRN No: ".$IrnNo);

		$data = array(
			"Status" => 'CANCELLED',
			"CancelReason" => $CancelReason,
			"CancelRemark" => $CancelRemark,
		);

		$this->load->model('NewGSTCommon');
		$token = $this->NewGSTCommon->authentication($new_sales_id);
		if($token) {
			if($this->isProduction()==true){
				$url="https://gsp.adaequare.com/enriched/ei/api/invoice/cancel";			
			}else{
				$url="https://gsp.adaequare.com/test/enriched/ei/api/invoice/cancel";
			}

			$Authorization='Bearer '.$token;         
			$jsondata=array(
						"Irn"=> $IrnNo,
						"CnlRsn"=> $CancelReason,
						"CnlRem"=> $CancelRemark
			);

			$requestData = json_encode($jsondata);
			$this->load->model('NewEInvoice');
			$cancelResult=$this->NewEInvoice->execute($url,$requestData,$action,$Authorization); 
			$this->echoToTriage("<br><br><b>Response For Cancel :</b><br>" .json_encode($cancelResult) . "<br>");

			if (isset($cancelResult['success']) && $cancelResult['success'] == false) {
				$this->echoToTriage("API error occured for Cancel Request...");
				$errorDet = $cancelResult['message'];

				$this->echoToTriage("<br><br><u>GST Errors for Cancel Request:</u><br>");
				$this->echoToTriage("\n GST Error Response for Cancel Request:
										\n ErrorMsg: " . $errorDet);
				$this->addErrorMessage($errorDet);
				$this->load->model('NewEInvoice');
				$this->NewEInvoice->redirect($new_sales_id);

			} else if (isset($cancelResult['success']) && $cancelResult['success'] == true) {
				$resultUpdate = $this->Common_admin_model->update("einvoice_res", $data, "new_sales_id", $new_sales_id);
				if ($resultUpdate) {
					$this->addSuccessMessage('Envoice Canceled Sucessfully');
					$this->redirectMessage();
				} else {
					$this->addErrorMessage('Not Updated. Please try again.');
					$this->redirectMessage();
				}
			}

        }      
	}
	
	
  /**
   * Get E-Invoice
   */
   
  public function get_E_invoice()
	{
		$new_sales_id = $this->uri->segment('2');
		$new_sales=array(
			"new_sales_id"=>$new_sales_id,
		  );

		$einvoice_res_data = $this->Crud->get_data_by_id_multiple_condition("einvoice_res", $new_sales);
		$IrnNo=$einvoice_res_data[0]->Irn;
		$this -> load-> model('NewGSTCommon');
		$token = $this->NewGSTCommon->authentication($new_sales_id);

		$this->load->model('NewEInvoice');		
		if($token) {
			if($this->isProduction()==true){
				$url = "https://gsp.adaequare.com/enriched/ei/api/invoice/irn?irn=" . $IrnNo;
			}else{
				$url="https://gsp.adaequare.com/test/enriched/ei/api/invoice/irn?irn=".$IrnNo;
			}

			$Authorization='Bearer '.$token;         
		
			$getEinvoiceResult =$this->NewEInvoice->executeGetMethod($url,$action,$Authorization,$XConnectorAuthToken); 
			$this->echoToTriage("<br><br><b>Response For GetEinvoice :</b><br>" .json_encode($getEinvoiceResult) . "<br>");
			if(isset($getEinvoiceResult['success']) && $getEinvoiceResult['success'] == false) {
				$this->echoToTriage("API error occured for GetEinvoice Request...");
				$errorDet = $getEinvoiceResult['message'];
				$this->echoToTriage( "<br><br><u>GST Errors for GetEinvoice Request:</u><br>");
				
				$this->echoToTriage("\n GST Error Response for Cancel Request: 
							   \n ErrorMsg: " .$errorDet);
						$alertCode = "<script>
							alert('\\n GST Error Response: \\n ErrorMsg: " .$errorDet."');
							</script>";
				echo $alertCode;
				$this->addErrorMessage($errorDet);
				$this->load->model('NewEInvoice');
				$this->NewEInvoice->redirect($new_sales_id); 

			} else if(isset($getEinvoiceResult['success']) && $getEinvoiceResult['success'] == true) {				
				$getResponse = $getEinvoiceResult['result'];
		  		$IrnNo=$getResponse['Irn'];
				$ackNo=$getResponse['AckNo'];
				$EwbNo= $getResponse['EwbNo'];
				$EwbDt= $getResponse['EwbDt'];
				$SignedQRCode= $getResponse['SignedQRCode'];
				$EwbValidTill = $getResponse['EwbValidTill'];
				if(!empty($EwbNo)){
					$ewbStatus = 'ACTIVE';
			}
			
			$this->echoToTriage("<br><br>Got Einvoice respone details.<br><b>IRN: ". $IrnNo ." ,<br>Ack No: " .$ackNo ." ,<br>AckDt: " . $ackDt.", EwbNo: ".$EwbNo." , EwbDt: ".$EwbDt."<br><br>");
			
			// Response Insert
			$response_data = array(
				'Status' => $getResponse['Status'],
				'ack_date' => $getResponse['AckDt'],
				'AckDt' => $getResponse['AckDt'],
				'Irn' => $getResponse['Irn'],
				'EwbDt' => $getResponse['EwbDt'],
				'SignedQRCode' => $getResponse['SignedQRCode'],
				'AckNo' => $getResponse['AckNo'],
				'SignedInvoice' => $getResponse['SignedInvoice'],
				'EwbNo' => $getResponse['EwbNo'],
				'EwbValidTill' => $getResponse['EwbValidTill'],
				'EwbStatus' => $ewbStatus
			);

			$resultUpdate = $this->Common_admin_model->update("einvoice_res", $response_data, "new_sales_id", $new_sales_id);
			if ($resultUpdate) {
					$this->addSuccessMessage('Envoice details are fetched sucessfully');					
				} else {
					$this->addErrorMessage("Couldn't get Einvoice details please try again.");
				}
			}
        }    
		$this->redirectMessage();
	}


  /**
   * LOOKS LIKE NOT IN USE AS OF NOW Cancel E-Way Bill
   */
  /*public function cancel_EWay_Bill_update() {
		$new_sales_id = $this->uri->segment('2');
		// $new_sales_id = $this->input->post('new_sales_id');
		$new_sales=array(
			"new_sales_id"=>$new_sales_id,
		  );

		$einvoice_res_data = $this->Crud->get_data_by_id_multiple_condition("einvoice_res", $new_sales);
	
		$issdata = $einvoice_res_data[0]->iss; //TO-DO : what to do with this ?
		$EwbNo=$einvoice_res_data[0]->EwbNo;
		$IrnNo=$einvoice_res_data[0]->Irn;
		
		$CancelReason = 2;
		$CancelRemark = "Cancelled the order";

		$this->echoToTriage("<br> Cancelled the order for EwbNo: ".$EwbNo);

		$data = array(
			"Status" => 'EWAYBCANCELLED',
			"CancelReason" => 2,
			"CancelRemark" => "Cancelled the order"
		);

		$this -> load-> model('NewGSTCommon');
		$token = $this->NewGSTCommon -> authentication($new_sales_id);
		
		if($token) {

			$XConnectorAuthToken=$this->getXConnectorAuthToken();
			if($this->isProduction()==true){
				$url="https://gsthero.com/einvoice/v1.03/invoice/cancelewb";
			}else{
				$url="https://qa.gsthero.com/einvoice/v1.03/invoice/cancelewb";
			}
			
			$Authorization='Bearer '.$token;         
			$action='CANCELEWB';
			
			$jsondata=array(
				"action"=>"CANCELEWB",
					"data"=>array(
						"ewbNo"=> $EwbNo,
						"cancelRsnCode"=> $CancelReason,
						"cancelRmrk"=> $CancelRemark
					)
			);

			$requestData = json_encode($jsondata);
			$this->echoToTriage("<br><br><b>Dynamic Request For Cancel EWAY Bill :</b><br>" . json_encode($requestData) . "<br>");
			//echo "requestData: " . $requestData;
			//exit();


			$cancelResult=$this->NewEInvoice->execute($url,$requestData,$action,$Authorization,$XConnectorAuthToken); 
			$this->echoToTriage("<br><br><b>Response from Adaequare For Cancel EWAY Bill :</b><br>" .json_encode($cancelResult) . "<br>");

			if(isset($cancelResult['status']) && $cancelResult['status'] == 0) {
				$this->echoToTriage("API error occured for Cancel Request...");
				$errorDet = $cancelResult['error'];
				$this->echoToTriage( "<br><br><u>GST Errors for Cancel EWAY Bill Request:</u><br>");
				foreach($errorDet as $error) {
						$this->echoToTriage("\n GST Error Response for Cancel EWAY Bill Request: 
								\n ErrorCode: ".$error['errorCodes']."
								\n ErrorMsg: " .$error['errorMsg']);
						$alertCode = "<script>
							alert('\\n GST Error Response: \\n ErrorCode: ".$error['errorCodes']."\\n ErrorMsg: " .$error['errorMsg']."');
							</script>";
						
						echo $alertCode;
				}
			} else if(isset($cancelResult['status']) && $cancelResult['status'] == 1) {
				$resultUpdate = $this->Common_admin_model->update("einvoice_res", $data, "new_sales_id", $new_sales_id);
				if ($resultUpdate) {
					echo "<script>alert('EWAY Bill Canceled Sucessfully');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
				} else {
					echo "<script>alert('Not Updated');document.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
				}
			}
			//echo "<script>window.close();</script>";
			
        }      
	} */


  /**
   * TESTED WITH NEW GST 3RD PARTY - Get EInvoice - from Local DB 
   */
  public function view_E_invoice() {
		$this->echoToTriage("<br><u><b>view_E_invoice</b></u>");
		
		$downloadPDF = false;
		
		$new_sales_id = $this->uri->segment('2');
		$new_sales_data = $this->Crud->get_data_by_id("new_sales", $new_sales_id, "id");
		$customer_data = $this->Crud->get_data_by_id("customer", $new_sales_data[0]->customer_id, "id");
		
		//get client data based on unit selection
		$client_data = $this->Crud->get_data_by_id("client", $new_sales_data[0]->clientId, "id");
		//get shipping details based on new sales data like customer or consignee address..
		$shipping_data = $this->getShippingDetails($new_sales_data, $customer_data);

		$po_parts_data = $this->Crud->get_data_by_id("sales_parts", $new_sales_id, "sales_id");
		$transporter_data = $this->Crud->get_data_by_id("transporter", $new_sales_data[0]->transporter_id, "id");
	    
		$actualAllItemsArr = array();
		$all_final_totals = 0;
		$all_cgst_amounts = 0;
		$all_sgst_amounts = 0;
		$all_igst_amounts = 0;
		$all_tcs_amounts = 0;
		$total_assAmt = 0;
		$total_igstAmt = 0;
		$total_cgstAmt = 0;
		$total_sgstAmt = 0;
		$total_tcsAmt = 0;
		$total_totItemVal = 0;

		$unsortedHSNCodes = array();
		$sortedHSNCodesAssAmt = 0;
		$sortedHSNCodesIgstAmt =0;
		$sortedHSNCodesCgstAmt = 0;
		$sortedHSNCodesSgstAmt = 0;
		$sortedHSNCodesTCSAmt = 0;
		$previousHSNCode;

		$i = 1;
		foreach ($po_parts_data as $ps) {
					  $actualIemsArr = array();
					 
					  $child_part_datas = $this->Crud->get_data_by_id("customer_part", $ps->part_id, "id");
					  $gst_structure_datas = $this->Crud->get_data_by_id("gst_structure", $ps->tax_id, "id");
					  $hsn_codes = $child_part_datas[0]->hsn_code;
					  
					  $unsortedHSN = array();
					  $hsn_codes = $child_part_datas[0]->hsn_code;
					  $isServc = $child_part_datas[0]->isservice;
					  $isInterState = false; //means only IGST is applicable so show it accordingly
					  if ((int)$gst_structure_datas[0]->igst === 0) {
							$gsts = (int)$gst_structure_datas[0]->cgst + (int)$gst_structure_datas[0]->sgst;
							$cgsts = (int)$gst_structure_datas[0]->cgst;
							$sgsts = (int)$gst_structure_datas[0]->sgst;
							$tcss = (float)$gst_structure_datas[0]->tcs;
							$igsts = 0;
							$total_gst_percentages = $cgsts + $sgsts;
					  } else {
							$gsts = (int)$gst_structure_datas[0]->igst;
							$tcss = (float)$gst_structure_datas[0]->tcs;
							$cgsts = 0; 
							$sgsts = 0;
							$igsts = $gsts;
							$total_gst_percentages = $igsts;
							$isInterState = true;
					  }

					  if($ps->basic_total > 0) {
                           $subtotal = $ps->basic_total;
                      }else{
						   $subtotal = $ps->total_rate - $ps->gst_amount;
					  }

					  if($ps->part_price > 0) {
                           $rate = $ps->part_price;
                      }else{
						   $rate = round($subtotal / $ps->qty, 2);
					  }

	                  $row_total =(float) $ps->total_rate+(float)$ps->tcs_amount;
					  $final_po_amount = (float)$final_po_amount + (float)$row_total;

					  $gst_amounts = ($gsts * $rate) / 100;
					  $final_amounts = $gst_amounts + $rate;
					  $final_row_amounts = $final_amounts * $ps->qty;

					  // $final_total = $final_total + $final_row_amount;
					  $actual_indv_totalAmt = $ps->qty * $rate;
					  $all_final_totals = $all_final_totals + $actual_indv_totalAmt;
				
					  $all_cgst_amounts = $all_cgst_amounts + $ps->cgst_amount;
					  $all_sgst_amounts = $all_sgst_amounts + $ps->sgst_amount;
					  $all_igst_amounts = $all_igst_amounts + $ps->igst_amount;
					  $all_tcs_amounts = $all_tcs_amounts + $ps->tcs_amount;
					
					  /*if ($gst_structure_datas[0]->tcs_on_tax == "no") {
							$all_tcs_amounts =  $all_tcs_amounts + (($actual_indv_totalAmt * $tcss) / 100);
					  } else {
							//$all_tcs_amounts =  $all_tcs_amounts + ((($all_cgst_amounts + $all_sgst_amounts + $all_igst_amounts + $actual_indv_totalAmt) * $tcss) / 100);
							$all_tcs_amounts =  $all_tcs_amounts + ((((float)(($actual_indv_totalAmt * $cgsts) / 100) + (float)(($actual_indv_totalAmt * $sgsts) / 100) + (float)$all_igst_amounts + (float)$actual_indv_totalAmt) * $tcss) / 100);
					  }*/
					  
					    $discount = 0; //Not defined as of now
						$totAmt = round((float)$actual_indv_totalAmt, 2);	
						//AssAmt: Taxable Value (Total Amount -Discount)
						$assAmt =  round((float)($actual_indv_totalAmt - $discount), 2);
						$igstAmt = round($ps->igst_amount,2); 
						$cgstAmt = round($ps->cgst_amount,2); 
						$sgstAmt = round($ps->sgst_amount,2);
						$tcsAmt = round($ps->tcs_amount,2); 
						
						$total_assAmt = $total_assAmt + $assAmt;
						$total_igstAmt = $total_igstAmt + $igstAmt;
						$total_cgstAmt = $total_cgstAmt + $cgstAmt;
						$total_sgstAmt = $total_sgstAmt + $sgstAmt;
						$total_tcsAmt = $total_tcsAmt + $tcsAmt;
						
						$actualIemsArr['slNo'] = $i;
						$actualIemsArr['prdDesc'] = $child_part_datas[0]->part_description;
						$actualIemsArr['isServc'] = $isServc;
						$actualIemsArr['hsnCd'] = $child_part_datas[0]->hsn_code; 		
						$actualIemsArr['qty'] = $ps->qty;								
						$actualIemsArr['unit'] = $ps->uom_id;							
						$actualIemsArr['unitPrice'] = $rate;
						$actualIemsArr['totAmt'] = $totAmt;
						$actualIemsArr['discount'] = $discount;				
						$actualIemsArr['preTaxVal'] = 0;
						$actualIemsArr['assAmt'] = $assAmt;
						$actualIemsArr['gstRt'] = $total_gst_percentages;
						//gstRt: The GST rate, represented as percentage that applies to the invoiced item. It will IGST rate only
						$actualIemsArr['igstAmt'] = $igstAmt;				
						$actualIemsArr['cgstAmt'] = $cgstAmt;					
						$actualIemsArr['sgstAmt'] = $sgstAmt;
						//$actualIemsArr['othChrg'] = $tcsAmt;  
						
						//NOTE: We don't need to pass individual other charges but that should be added to totalvalue 
						
						$totItemVal = round(($assAmt + $igstAmt + $cgstAmt + $sgstAmt ), 2); 
						$total_totItemVal = $total_totItemVal + $totItemVal + $tcsAmt; //adding other charges(tcs) here to totalvalue 
						$actualIemsArr['totItemVal'] = $totItemVal; 
						$actualIemsArr['orgCntry'] = "IN";
						
						//get this for HSN sorting
						$unsortedHSN['hsn_code'] = $hsn_codes;
						$unsortedHSN['assAmt'] = $assAmt;
						$unsortedHSN['cgstRate'] = $cgsts;
						$unsortedHSN['cgstAmt'] = $cgstAmt;
						$unsortedHSN['sgstRate'] = $sgsts;
						$unsortedHSN['sgstAmt'] = $sgstAmt;
						$unsortedHSN['igstAmt'] = $igstAmt;
						$unsortedHSN['igstRate'] = $igsts;
						$unsortedHSN['igstAmt'] = $igstAmt;
						//$unsortedHSN['othChrg'] = $tcsAmt;
						
						//$unsortedHSN['total'] = $totItemVal;
						//echo var_dump($unsortedHSN);
						$sortedHSNCodesAssAmt = $sortedHSNCodesAssAmt +  $assAmt;
						$sortedHSNCodesCgstAmt = $sortedHSNCodesCgstAmt +  $cgstAmt;
						$sortedHSNCodesSgstAmt = $sortedHSNCodesSgstAmt +  $sgstAmt;
						$sortedHSNCodesIgstAmt = $sortedHSNCodesIgstAmt +  $igstAmt;
						$sortedHSNCodesTCSAmt = $sortedHSNCodesTCSAmt +  $tcsAmt;
						$sortedHSNCodesTCSAmt  = round((float)$sortedHSNCodesTCSAmt, 2);
						//$sortedHSNCodesTotal = $sortedHSNCodesTotal +  $totItemVal;
						
						array_push($unsortedHSNCodes,$unsortedHSN);
						array_push($actualAllItemsArr,$actualIemsArr);

						$heights = "150px";
			
						$parts_html .= '
							<tr style="font-size:14px;text-align:right;"">
								<td style="width:20px;">' . $i . '</td>
							<td>' . $child_part_datas[0]->part_number .  '</td>
							<td colspan="3" style="width:200px;text-align:left;">' . $child_part_datas[0]->part_description . '</td>
							<td>' .  $hsn_codes . '</td>
							<td>' . $ps->uom_id . '</td>
							<td>' . $ps->qty . '</td>
							<td>' . $rate . '</td>
							<td></td>
							<td colspan="2" style="text-align:center;">' . number_format((float)$actual_indv_totalAmt, 2, '.', '') . '</td>
						</tr>
						';
						
						if($isInterState==true) {
							$eway_parts_html .= '
							<tr style="font-size:14px;text-align:center;">
							<td>' .  $hsn_codes . '</td>
							<td>' .  $child_part_datas[0]->part_number.'</td>
							<td colspan="6" style="text-align:left;" >'.$child_part_datas[0]->part_description.'</td>
							<td>' . $ps->qty . ' '.$ps->uom_id.'</td>
							<td>' . number_format((float)$actual_indv_totalAmt, 2, '.', '') . '</td>
							<td colspan="2"> IGST: '.$igsts.'%</td>
						</tr>';
						}else{
							$eway_parts_html .= '
							<tr style="font-size:14px;text-align:center;">
							<td>' .  $hsn_codes . '</td>
							<td>' .  $child_part_datas[0]->part_number.'</td>
							<td colspan="6" style="text-align:left;">'.$child_part_datas[0]->part_description.'</td>
							<td>' . $ps->qty . ' '.$ps->uom_id.'</td>
							<td>' . number_format((float)$actual_indv_totalAmt, 2, '.', '') . '</td>
							<td colspan="2"> SGST: '.$sgsts .'%<br> CGST: ' .$cgsts .'</td>
						</tr>';
						}
						
			 $i++;
		}
	
	//API details:
	$this -> load-> model('NewEInvoice');
	$einvoice_res_id = $this->uri->segment('2');
	$einvoice_res_data = $this->Crud->get_data_by_id("einvoice_res", $einvoice_res_id, "new_sales_id");

		$issdata = $einvoice_res_data[0]->iss; //TO-DO : what to do with this ?

		$IrnNo=$einvoice_res_data[0]->Irn;
		$AckNo=$einvoice_res_data[0]->AckNo;
		$AckDt=$einvoice_res_data[0]->AckDt;
		$EwbNo= $einvoice_res_data[0]->EwbNo;
		$EwbDt= $einvoice_res_data[0]->EwbDt;
		$SignedQRCode= $einvoice_res_data[0]->SignedQRCode;
		$EwbValidTill = $einvoice_res_data[0]->EwbValidTill;

		$sellrgstn=$einvoice_res_data[0]->SellerGstin;
		$buyergstin=$einvoice_res_data[0]->BuyerGstin;
		$DocNo= $einvoice_res_data[0]->DocNo;
		$DocTyp=$einvoice_res_data[0]->DocTyp;
		$DocDt=$einvoice_res_data[0]->DocDt;
		$TotInvVal=$einvoice_res_data[0]->TotInvVal;
		$ItemCnt=$einvoice_res_data[0]->ItemCnt;
		$MainHsnCode=$einvoice_res_data[0]->MainHsnCode;
		$IrnDt=$einvoice_res_data[0]->IrnDt; 
    
		$this->echoToTriage("<br><br>IRN information from Get Invoice: <br><b>IRN: ". $IrnNo ." ,<br>Ack No: " .$AckNo ." ,<br>AckDt: " . $AckDt."<br><br>");

		$final_total = 0;
		$cgst_amount = 0;
		$sgst_amount = 0;
		$igst_amount = 0;
		$tcs_amount = 0;
		$height = "280px";

    if ($i == 2) {
      $height = "240px";
    }
    if ($i == 3) {
      $height = "220px";
    }
    if ($i == 4) {
      $height = "180px";
    }
    if ($i == 5) {
      $height = "140px";
    }
    if ($i == 6) {
      $height = "100px";
    }
    if ($i == 7) {
      $height = "80px";
    }
    if ($i == 8) {
      $height = "40px";
    }
    
    $all_totalOther = $all_cgst_amounts + $all_sgst_amounts + $all_igst_amounts + $all_tcs_amounts;
    $final_final_amount = $all_final_totals + $all_cgst_amounts + $all_sgst_amounts + $all_igst_amounts + $all_tcs_amounts;
	// Sort the multidimensional array by the 'hsn_code' column in ascending order
	$this->Crud->sort_by_column($unsortedHSNCodes, 'hsn_code');
	$hsn_code_table_html = $this->NewEInvoice -> getHSNTableData($unsortedHSNCodes);
	$transportMode = $this->NewEInvoice -> getModeOfTransport ($new_sales_data[0]->mode);

	$html_content = '
    
	<!DOCTYPE html>
	<head>
			<style> html { margin: 1px}
			@media print {

				.container{ 
					width: 95%; 
					height: auto; 
					margin: 50px auto; 
				} 

				  .article { page-break-after: always; }
				  a[href]:after {
					content: none !important;
				  }
				  
				  table { /* Or specify a table class */
					 max-height: 100%;
					 overflow: hidden;
					 page-break-after: always;
					 border: 1px solid black;
					 border-collapse: collapse;
				  }
				  @page 
					{
						size: auto;   /* auto is the initial value */
						margin: 2mm;  /* this affects the margin in the printer settings */
					}
				  body {
					   margin-top: 5mm; 
					   margin-left: 2mm;
					   margin-bottom: 5mm; 
					   margin-right: 2mm
				 }
				}
			
			th, td {
			  border: 1px solid black;
			  border-collapse: collapse;	
			  padding-top: 3px;
			  padding-bottom: 3px;
			  padding-left: 8px;
			  padding-right: 8px;
			 // font-family: "Poppins", sans-serif;
            line-height: 1.1
			}
			
			</style>
			<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
	</head>	
	<body>
	<script>
		function printSection() {
			var printContent = document.getElementById("print-section").innerHTML;
			var originalContent = document.body.innerHTML;
			document.body.innerHTML = printContent;
			window.print();
			document.body.innerHTML = originalContent;
		}
		</script>
		<div>
		<button style="color: white;background-color: red;"onclick="printSection()">Print E-Invoice</button>
		</div>
		<br>
		<div id="print-section">
		<table cellspacing="0" border="1px">
		<tr>
			<th colspan="12" style="text-align:center; font-size:16px">EInvoice</th>
		</tr>
		<tr>
			<td colspan="6" align="bottom">
				IRN No :<b>'.$IrnNo.'</b><br>
				Ack No :<b>'.$AckNo.'</b><br>
				Act Date :<b>'.$AckDt.'</b><br><br>
				e-Way Bill No :<b>'.$EwbNo.'</b><br>
				e-Way Bill Date :<b>'.$EwbDt.'</b>
			  </td>
			<td colspan="6" style="padding-top: 5px;padding-bottom: 5px;"> 
				<span class="qrcode"></span>
		  </td>
		  <script>
			var qrData ="'.$SignedQRCode.'"; 
			var qrcode = new QRCode(document.querySelector("qrcode"), {
				text: qrData,
				width: 128,
				height: 128,
				colorDark : "#000000",
				colorLight : "#ffffff",
				correctLevel : QRCode.CorrectLevel.H
			});
		  </script>
		</tr>
		<tr style="font-size:14px">
			<td colspan="6" width="60%">
					<b>'.$client_data[0]->client_name.'</b><br>
					'.$client_data[0]->address1.'<br>
					STATE : ' . $client_data[0]->state . ',  &nbsp;STATE CODE : ' . $client_data[0]->state_no . '<br>
					GSTIN/UIN : '  . $client_data[0]->gst_number . '<br>
					PAN NO : ' . $client_data[0]->pan_no . '<br>
			</td>
			<td colspan="6" align="left" width="40%">
				Invoice NO. <b> ' . $new_sales_data[0]->sales_number . '</b><br>
				Invoice Date . <b>' . $po_parts_data[0]->created_date . '</b><br>
				Time of Supply <b> . ' . $po_parts_data[0]->created_time . '</b><br>
				 <span style="font-size:10px">WHETHER TAX ON REVERSE CHARGE: NO</span>
			</td>
		</tr>
		<tr style="font-size:14px">
		<td colspan="6">
			<b> Details of Consignee (Shipped to)</b> ,<br>
			<b>' . $shipping_data['shipping_name'] . '</b><br>
			' . $shipping_data['ship_address'] . '<br>
			STATE : ' . $shipping_data['state'] . '<br>
			STATE CODE : ' . $shipping_data['state_no'] . '<br>
			PAN NO : ' . $shipping_data['pan_no'] . '<br>
			GSTIN/UIN : ' . $shipping_data['gst_number']. '
		</td>
		<td colspan="6">
			<b>Details of Receiver (Billed To)</b><br> 
			' . $customer_data[0]->customer_name . '<br>
			' . $customer_data[0]->billing_address . '<br>
			STATE : ' . $customer_data[0]->state . '<br>
			STATE CODE : ' . $customer_data[0]->state_no . '<br>
			PAN NO : ' . $customer_data[0]->pan_no . '<br>
			GSTIN/UIN : ' . $customer_data[0]->gst_number . '
		</td>
	</tr>
	<tr  style="font-size:14px">
		<td colspan="6">
			<b>PO Number  :</b>' . $po_parts_data[0]->po_number . '        
			<b style="margin-left:10px">PO Date  :</b>' . $po_parts_data[0]->po_date . '
		</td>
		<td colspan="6">
			<b>Vendor Code  . :</b>' . $customer_data[0]->vendor_code . '<br>
		</td>
	</tr>
	
	<tr style="font-size:12px;text-align:center">
		  <th style="width:20px;">Sr No</th>
		  <th style="width:70px;">Part Number </th>
		  <th colspan="3" style="width:200px;">Part Description </th>
		  <th style="width:50px;" >HSN / SAC </th>
		  <th style="width:20px;">UOM </th>
		  <th style="width:20px;">QTY </th>
		  <th style="width:20px;">Rate/Unit  </th>
		  <th style="width:20px;">Disc. %</th>
		  <th colspan="2">Amount</th>
	</tr>
	  ' . $parts_html . '
	  <tr>
		<td colspan="12" style="height:' . $height . '"></td>
	  </tr>

	  <!-- New -->
	  <tr style="font-size:10px">
            <td rowspan="2" colspan="8">
              <b>&nbsp;Mode Of Transport : </b>' . $transportMode . '&nbsp;&nbsp;&nbsp;&nbsp;<b>&nbsp;Vehicle No : </b>' . $new_sales_data[0]->vehicle_number . '&nbsp;&nbsp;&nbsp;&nbsp;<b>&nbsp;L.R No : </b>' . $new_sales_data[0]->lr_number . '
              <br><b>&nbsp;Transporter : </b>' . $transporter_data[0]->transporter_id . '<br>
            </td>
            <td colspan="2" style="text-align:center;margin-left:10px;">SUB TOTAL </td>
            <td colspan="2" style="text-align:center">' . number_format((float) $all_final_totals, 2, '.', '') . '</td>
          </tr>
          <tr style="font-size:10px">
            <td colspan="2" style="text-align:center">IGST Amt</td>
            <td colspan="2" style="text-align:center">' . number_format((float) $all_igst_amounts, 2, '.', '') . '</td>
         </tr>
          <tr style="font-size:10px">
          <td rowspan="5" colspan="8">
            <b> &nbsp;Payment Terms : ' . $customer_data[0]->payment_terms . '</b> <br>
            <span><b> &nbsp;Bank Details : </b> ' . $client_data[0]->bank_details . '</span><br>
            <b> &nbsp;Electronic Reference No.</b> <br>
            <span> <b> &nbsp;Invoice Value (In Words) : </b> ' . strtoupper($this->getIndianCurrency(number_format((float)$final_final_amount, 2, '.', ''))) . '</span>
            </td>
            <td colspan="2" style="text-align:center;margin-left:10px;">CGST Amt</td>
            <td colspan="2" style="text-align:center">' . number_format((float) $all_cgst_amounts, 2, '.', '') . '</td>
        </tr>
          <tr style="font-size:10px">
            <td colspan="2" style="text-align:center;margin-left:10px;">SGST Amt</td>
            <td colspan="2" style="text-align:center">' . number_format((float) $all_sgst_amounts, 2, '.', '') . '</td>
          </tr>
          <tr style="font-size:10px">
            <td colspan="2" style="text-align:center">TCS Amt</td>
            <td colspan="2" style="text-align:center">' . number_format((float) $all_tcs_amounts, 2, '.', '') . '</td>
          </tr>
          <tr style="font-size:10px">
            <td colspan="2" style="text-align:center;margin-left:10px;">Freight Charges</td>
            <td colspan="2" style="text-align:center">' . '0.00' . '</td>
          </tr>
          <tr style="font-size:10px">
            <th colspan="2" style="text-align:center">GRAND TOTAL</th>
            <th colspan="2" style="text-align:center">Rs. ' . number_format((float) $final_final_amount, 2, '.', '') . '</th>
          </tr>
		<!-- New end -->

	 	</table>
		  <!-- <div style="page-break-inside:avoid;page-break-after:always"></div> -->
		  <table padding="0" cellspacing="0" border="1px">
			<tr>
				<th colspan="12" style="text-align:center; font-size:16px"></th>
			</tr>
			<tr style="font-size:12px;text-align:center">
			  <th colspan="2" width="30%" rowspan="2">HSN/SAC</th>
			  <th colspan="2" width="30%" rowspan="2">Taxable</th>
			  <th colspan="2" width="10%">Central Tax</th>
			  <th colspan="2" width="10%">State Tax</th>
			  <th colspan="2" width="10%">IGST</th>
			  <th colspan="1" width="10%">TCS</th>
			  <th colspan="2" rowspan="2" width="10%">Total Tax Amount</th>
			</tr>
			<tr style="font-size:12px;text-align:center">
			  <th>Rate</th>
			  <th>Amount</th>
			  <th>Rate</th>
			  <th>Amount</th>
			  <th>Rate</th>
			  <th>Amount</th>
			  <th>Amount</th>
			</tr>
			
			'
			
			.$hsn_code_table_html.'
			<tr style="font-size:15px;text-align:right">
			
			  <td colspan="2"><b>Total</b></td>
			  <td colspan="2"><b>Rs.'.$sortedHSNCodesAssAmt.'</b></td>
			  <td colspan="2"><b>Rs.'.$sortedHSNCodesCgstAmt.'</b></td>
			  <td colspan="2"><b>Rs.'.$sortedHSNCodesSgstAmt.'</b></td>
			  <td colspan="2"><b>Rs.'.$sortedHSNCodesIgstAmt.'</b></td>
			  <td colspan="1"><b>Rs.'.$sortedHSNCodesTCSAmt.'</b></td>
			  <td colspan="2"><b>Rs.'.($sortedHSNCodesCgstAmt + $sortedHSNCodesSgstAmt +$sortedHSNCodesIgstAmt + $sortedHSNCodesTCSAmt).'</b></td>
			</tr>
			
	  <tr style="font-size:9px">
		<td colspan="6">
		<p>We hereby certify that my/our registration certificate under the Goods and Service Tax
			Act, 2017 is in force on the date on which the sale of the goods specified in this Tax
			invoice is made by me/us and that the transaction of sale covered by this taxinvoice has
			been effected by me/us and it shall be accounted for in the turnover of sales while filling
			of return and the due tax. If any, payable on the sale has been paid or shall be paid.
			<br>
			Certified that the particulars given above are true and correct and the amount indicated
			represents the price actully charged and that there is no flow of additional consideration
directly or indirectly from byuer.
Interest @24% P.A. will be charged on all overdue invoices.<br>
Subject To Pune Jurisdiction</p>
	  </td>
	  <td colspan="3" >
	  <br>
	  <br>
	  <br>
	  <br>  
	  <br>
	  <br>

	  <h4 style="text-align: left;margin-left:25px; font-size:11px"> Receiver Signature </h4>
	  </td>
	  <td colspan="3" >
	  
	  <h4 style="text-align: right;margin-right:25px; font-size:12px"> For, '.$this->getCustomerNameDetails().' </h4>
	  <h6 style="text-align: right">  </h6>
	  <h6 style="text-align: right">  </h6>
	  <h6 style="text-align: right">  </h6>
	  <br>
	  <br>
	  <h4 style="text-align: right;margin-right:25px; font-size:11px"> Authorized Signatory </h4>
	 
	  <h6 style="text-align: right">  </h6>
	  <h6 style="text-align: right">  </h6>

	  </td>
	</tr>
	</table>
	<div style="page-break-inside:avoid;page-break-after:always"></div>
	<table padding="2" cellspacing="0" border="1px">
		<tr>
			<th colspan="12" style="width:600px; text-align:center; font-size:16px">e-Way Bill</th>
		</tr>
		<tr>
				<td colspan="8" align="bottom">
					Doc No :<b> '.$new_sales_data[0]->sales_number.'</b><br>
					Date   :<b> '.$new_sales_data[0]->created_date.'</b><br>
					IRN    :<b> '.$IrnNo.'</b><br><br>
					Ack No :<b> '.$AckNo.'</b><br>
					Ack Date :<b>'.$AckDt.'</b>
				 </td>
				 <td colspan="4" align="bottom">
					<span class="ewayQRcode"></span>
				 </td>
				  <script>
					var qrData ="'.$EwbNo.'"; 
					var qrcode = new QRCode(document.querySelector(".ewayQRcode"), {
						text: qrData,
						width: 128,
						height: 128,
						colorDark : "#000000",
						colorLight : "#ffffff",
						correctLevel : QRCode.CorrectLevel.H
					});
				</script>
			</tr>
		<tr>
			<td colspan="12" style="text-align:left; font-size:16px"><b>1. e-Way Bill Details</b><br></th>
		</tr>
		<tr>
			<td colspan="6" align="top">
				e-Way Bill No :<b> '.$EwbNo.'</b><br>
				Generated By   :<b> '.$client_data[0]->gst_number.'</b><br>
				Supply Type    :<b> Outward-Supply</b><br><br>
				Ack No :<b> '.$AckNo.'</b><br>
				Ack Date :<b>'.$AckDt.'</b>
			  </td>
			  <td colspan="4" align="top">
				Mode :<b> '.$new_sales_data[0]->mode.'- Road</b><br>
				Approximate Distance   :<b>'.$new_sales_data[0]->distance.'</b><br>
				Transaction Type    :<b> Regular</b><br><br>
				Ack No :<b> '.$AckNo.'</b><br>
				Ack Date :<b>'.$AckDt.'</b>
			  </td>
			  <td colspan="2" align="top">
				  Generated Date:<b>   '.$EwbDt.'</b><br>
				  Valid Upto	:<b>   '.$EwbValidTill.'</b><br>
			  </td>
		</tr>
		<tr>
			<td colspan="12" style="text-align:left; font-size:16px"><b>2. Address Details</b></th>
		</tr>
		<tr>
			<td colspan="6" align="top">
				<b>From :</b><br>
				'.$client_data[0]->client_name.'<br>
				'.$client_data[0]->address1.','.$client_data[0]->state.' '.$client_data[0]->pin.'<br>
				GSTIN : '.$client_data[0]->gst_number.'<br>
			  </td>
			  <td colspan="6" align="top">
			  <b>To :</b><br>
				'.$customer_data[0]->customer_name.'<br>
				'.$customer_data[0]->billing_address.','.$customer_data[0]->state.' '.$customer_data[0]->pin.'<br>
				GSTIN : '.$customer_data[0]->gst_number .'<br>
			  </td>
		</tr>
		<tr>
			<td colspan="6" align="top">
					<b>Dispatched From :</b><br>
					'.$client_data[0]->client_name.'<br>
					'.$client_data[0]->address1.','.$client_data[0]->state.' '.$client_data[0]->pin.'<br>
					GSTIN : '.$client_data[0]->gst_number.'<br>
				  </td>
				  <td colspan="6" align="top">
				  <b>Ship To :</b><br>
					'.$shipping_data['shipping_name'].'<br>
					'.$shipping_data['ship_address'].','.$shipping_data['state'].' '.$shipping_data['pin_code'].'<br>
					GSTIN : '. $shipping_data['gst_number'] .'<br>
		  	</td>
		</tr>
		<tr>
			<td colspan="12" style="text-align:left; font-size:16px"><b>3. Goods Details</b></th>
		</tr>
		<tr style="font-size:14px;text-align:center;">
		  <th>HSN Code</th>
		  <th>Product Name</th>
		  <td colspan="6" style="text-align:left;">Product Description</th>
		  <th>Quantity </th>
		  <th>Taxable Amt</th>
		  <th colspan="2">Rate</th>
		</tr>
		' . $eway_parts_html . '
		<tr>
			<td colspan="12" style="height:25px"></td>
		</tr>
		<tr>
			  <td colspan="4" width="33%"> 
				Tot.Taxable Amt: <b>'.number_format((float)$all_final_totals, 2, '.', '').'</b><br>
				Other Amt :<b>'.number_format((float)$all_totalOther, 2, '.', '').'</b><br>
				
			  </td>
              <td colspan="4" width="33%">
			    CGST Amt : <b>'.number_format((float)$all_cgst_amounts, 2, '.', '').'</b><br>
				SGST Amt : <b>'.number_format((float)$all_sgst_amounts, 2, '.', '').'</b><br>
				IGST Amt : <b>'.number_format((float)$all_igst_amounts, 2, '.', '').'</b><br>
				TCS Amt  : <b>'.number_format((float)$all_tcs_amounts, 2, '.', '').'</b>
			  </td>
			  <td colspan="4" width="33%"><br>
				Total Inv Amt :<b>'.number_format((float)$final_final_amount, 2, '.', '').'</b><br>
			  </td>
			</tr>
		<tr>
			<td colspan="12" style="text-align:left; font-size:16px"><b>4. Transportation Details</b></th>
		</tr>
		<tr>
			<td colspan="12" align="top">
				Transporter ID :'.$transporter_data[0]->transporter_id.'<br>
				Name :'.$transporter_data[0]->name.'<br>
			</td>
			<!--  <td colspan="6" align="top">
				Doc No:<br>
				Date<br>
			  </td> -->
		</tr>
		
		<tr>
			<td colspan="12" style="text-align:left; font-size:16px"><b>5. Vehicle Details</b></th>
		</tr>
		<tr>
		<td colspan="4" align="top">
			Vehicle No : <b>'.$new_sales_data[0]->vehicle_number.'</b><br>
		</td>
		<td colspan="4" align="top">
			From : <br>
		</td>
		<td colspan="4" align="top">
			CEWB No : <br>
		</td>
		</tr>
	</table>
	</div>
	</body>
  </html>
 ';

		if($downloadPDF == true){
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("View-E-Invoice-Details.pdf", array("Attachment" => 1));
		}else{
			echo $html_content;
			die;
		}
  }
  

  /**
   * Get Currency
   */
  function getIndianCurrency(float $number)
	  {
		$decimal = round($number - ($no = floor($number)), 2) * 100;
		$hundred = null;
		$digits_length = strlen($no);
		$i = 0;
		$str = array();
		$words = array(
		  0 => '', 1 => 'one', 2 => 'two',
		  3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
		  7 => 'seven', 8 => 'eight', 9 => 'nine',
		  10 => 'ten', 11 => 'eleven', 12 => 'twelve',
		  13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
		  16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
		  19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
		  40 => 'forty', 50 => 'fifty', 60 => 'sixty',
		  70 => 'seventy', 80 => 'eighty', 90 => 'ninety'
		);
		$digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
		while ($i < $digits_length) {
		  $divider = ($i == 2) ? 10 : 100;
		  $number = floor($no % $divider);
		  $no = floor($no / $divider);
		  $i += $divider == 10 ? 1 : 2;
		  if ($number) {
			$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
			$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
			$str[] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural . ' ' . $hundred : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural . ' ' . $hundred;
		  } else $str[] = null;
		}
		$Rupees = implode('', array_reverse($str));
		$paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
		return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
	  }
	  
}

