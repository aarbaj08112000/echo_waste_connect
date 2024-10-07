<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

#require_once('libraries/PHPExcel/IOFactory.php');
require_once('CommonController.php');
require_once(APPPATH.'libraries/PHPExcel/IOFactory.php');
//require 'PHPExcel/PHPExcel.php';
//require_once(APP. ‘Vendor’.DS.‘PHPExcel’.DS.‘IOFactory.php’);

class MagrationScript_Controller extends CommonController
{
   
	
	function __construct() {
		parent::__construct();
		$this->load->model('MagrationScript_Model');
	}

	public function yesterdays_sales_for_mail(){
		$yesterday = new DateTime('yesterday');
        $date = $yesterday->format('d/m/Y');
        $yesterday_sales_data = $this->MagrationScript_Model->get_sales($date);
        $customer_arr = array_column($yesterday_sales_data, "customer_name","customer_id");
        $yesterday_sales_arr = array_column($yesterday_sales_data,"basic_total","customer_id");

        $current_month = date("n");
        $current_monthsales_data = $this->MagrationScript_Model->get_current_month_sales_block($current_month);
        $current_monthsales_arr = array_column($current_monthsales_data,"basic_total","customer_id");
        $customer_array = array_column($current_monthsales_data, "customer_name","customer_id");
        // pr($current_monthsales_data,1);
        foreach ($customer_array as $key => $value) {
        	if(!array_key_exists($key,$customer_arr)){
        		$customer_arr[$key] = $value;
        	}
        }
        $total_yeaster_day_sales = 0;
        $total_current_month_sales = 0;
        $customer_report_data = [];
        foreach ($customer_arr as $key => $value) {
        	$yeaster_day_sales = isset($yesterday_sales_arr[$key]) ? $yesterday_sales_arr[$key] : 0.00;
        	$current_month_sales = isset($current_monthsales_arr[$key]) ? $current_monthsales_arr[$key] : 0.00;
        	$customer_report_data[] =[
        		"customer_name" => $value,
        		"yeaster_day_sales" => number_format($yeaster_day_sales,2),
        		"current_month_sales" => number_format($current_month_sales,2),
        	];
        	$total_yeaster_day_sales += $yeaster_day_sales;
        	$total_current_month_sales += $current_month_sales;
        }
        $data['total_current_month_sales'] = number_format($total_current_month_sales,2);
        $data['total_yeaster_day_sales'] = number_format($total_yeaster_day_sales,2);
        $data['customer_report_data'] = $customer_report_data;
       	// ini_set('display_errors', 1);
        // error_reporting(E_ALL );
        $configuration = $this->Crud->get_data_by_id_multiple_condition("global_configuration",$criteria);
        $configuration = array_column($configuration, "config_value","config_name");
        $SalesReportSenderEmail = $configuration['SalesReportSenderEmail'];
        if($SalesReportSenderEmail != "" && $SalesReportSenderEmail != null && $configuration['SMTPUserPassword'] != "" && $configuration['SMTPUserName'] != "" && $configuration['EnableSalesReportEmail'] == "Yes"){
        	$SalesReportSenderEmail =  explode(",",$SalesReportSenderEmail);
        	foreach ($SalesReportSenderEmail as $key => $value) {
		        $email = $value;
		        $this->email_sender($data,$email,$configuration);
		    }
        	
        }else{
        	echo "Email Send Disable";
        }
        exit();
        // return $count_arr;
    }

    public function email_sender($data = array(),$email = "",$configuration = []){
    	// pr($configuration);
		$data['base_url']  = $this->config->item('base_url');
		$mail = $this->phpmailer_lib->load();
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com'; 					  // 'smtp.gmail.com'; //'smtpout.secureserver.net';          // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $configuration['SMTPUserName']; 	  // SMTP username
		$mail->Password = $configuration['SMTPUserPassword']; // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587; //465; //587;                       // TCP port to connect to
		$mail->From = $configuration['SMTPUserName'];
		$mail->FromName = "Sales Report";
		$mail->addAddress($email);              			  // Name is optional
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = "Sales report details";
		$html = $this->smarty->fetch("reports/sales_report_email.tpl",$data);;
		$mail->Body    = $html;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		// if($this->config->item("email_notification") == "Yes" || $email_notification){
			if(!$mail->send()) {
				$message =  '\n Message could not be sent.';
				// echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				$message =  '\n Message has been sent';
			}
		// }else{
		//    $message =  'notification turn off';
		// }
		echo $message;	

  }
 
  

	
	
}
