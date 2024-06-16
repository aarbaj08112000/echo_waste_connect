<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once('CommonController.php');

class Dashboard extends CommonController
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');

	}
	public function dashboard(){
		$this->loadView("dashboard/dashboard.php");
	}
	 public function get_dashboard_widget_data()
    {
        $post_data = $this->input->post(); 
       	$widget_name = $post_data['widget_name'];
        $tab_name = $post_data['tab_name'];
        $widgets = $this->dashboard_model->get_widgets($tab_name,$widget_name);
        $widget_data_arr = [];
        foreach ($widgets as $key => $value) {
        	$function_name = $value['widget_funtion'];
        	$widget_data = $this->$function_name();
        	$return_arr['widget_name'] = $value['widget_name'];
        	$return_arr['widget_type'] = $value['widget_type'];
        	$return_arr['widget_data'] = $widget_data;
        	array_push($widget_data_arr, $return_arr);
        }
        // pr("ok1",1);
        echo json_encode($widget_data_arr);
        exit();
    }
    public function get_today_sales(){
    	$count_arr['count'] = 12345;
    	return $count_arr;
    }
    public function get_yesterdays_sales(){
    	$count_arr['count'] = 15345;
    	return $count_arr;
    }
    public function get_current_month_sales(){
    	$count_arr['count'] = 18345;
    	return $count_arr;
    }
    public function get_current_month_sale(){
    	$count_arr['count'] = 19345;
    	return $count_arr;
    }
    /* pie chart */
    public function get_customer_sales(){
        $count_arr = [
            "series_data"=>[
                ['name'=> 'Brian Bower','y'=> 61.04,'drilldown'=> 'Brian Bower'],
                ['name'=> 'Devon Rice','y'=> 9.47,'drilldown'=> 'Devon Rice'],
                ['name'=> 'Mary Bydlon','y'=> 9.32,'drilldown'=> 'Mary Bydlon'],
                ['name'=> 'Rhonda Stewart','y'=> 8.15,'drilldown'=> 'Rhonda Stewart'],
                ['name'=> 'Rock Bhona','y'=> 11.02,'drilldown'=> "Rock Bhona"]
            ]
        ];
        return $count_arr;
    }
    /* single bar chart chart */
    public function get_month_wise_sales(){
    	$return_arr = [
    		"delemeter" => "Lacs",
    		"xAxisLabel"=>"Month(s)",
    		"yAxisLabel"=>"Sales(Lacs)",
    		"series_data"=>[
    			[ 'name'=> 'Jan',  'y'=> 20,  'drilldown'=> 'Jan'],
    			[  'name'=> 'Feb',  'y'=> 19.84,  'drilldown'=> 'Feb'], 
    			[  'name'=> 'March',  'y'=> 4.18,  'drilldown'=> 'March'], 
    			[ 'name'=> 'April',  'y'=> 4.12,  'drilldown'=> 'April'], 
    			[  'name'=> 'May',  'y'=>2.33,  'drilldown'=> 'May'], 
    			[ 'name'=> 'June',  'y'=> 0.45,  'drilldown'=> 'June'], 
    			[ 'name'=> 'July',  'y'=> 1.582,  'drilldown'=> 'July']
    		]
    	];
    	return $return_arr;
    }
    /* semi circle chart */
    public function get_production_product(){
    	$return_arr = [
    		'data' =>[['Chrome', 73.86],['Edge', 11.97]],
    		'label_data' => [["label"=>"del_qty","val"=>"5,191,780"],["label"=>"pend_qty","val"=>"2,016,833"]],
    		"color_lengend" =>['#e4ad16', '#3F4957']
    	];
    	return $return_arr;
    }
    /* single colum bar chart */
    public function get_production_stock(){
    	$return_arr = [
    		'series_data' =>[['name'=> "Completed",'data'=> [12000],'color'=> '#e4ad16'],['name'=> "Pending",'data'=> [2000],'color'=> '#3F4957']],
    		'label_data' => [["label"=>"del_qty","val"=>"12,000"],["label"=>"pend_qty","val"=>"2,000"]]
    	];
    	return $return_arr;
    }

    /* account tab */
    public function get_total_payable_due(){
    	$count_arr['count'] = 1478286;
    	return $count_arr;
    }
    public function get_total_payable_paid(){
    	$count_arr['count'] = 1478286;
    	return $count_arr;
    }
    public function get_total_receivable_due(){
    	$count_arr['count'] = 18286;
    	return $count_arr;
    }
    public function get_total_receivable_paid(){
    	$count_arr['count'] = 17886;
    	return $count_arr;
    }
    public function get_customer_receiver_due(){
    	$count_arr = [
        		"series_data"=>[
        			['name'=> 'Brian Bower','y'=> 31.02,'drilldown'=> 'Brian Bower'],
        			['name'=> 'Josh Foster','y'=> 10.47,'drilldown'=> 'Josh Foster'],
        			['name'=> 'Ian Kennedy','y'=> 10.32,'drilldown'=> 'Ian Kennedy'],
        			['name'=> 'Devon Rice','y'=> 8.15,'drilldown'=> 'Devon Rice'],
        			['name'=> 'Mary Bydlon','y'=> 11.02,'drilldown'=> "Mary Bydlon"],
        			['name'=> 'Rhonda Stewart','y'=> 11.02,'drilldown'=> "Rhonda Stewart"]
        		]
        	];
    	return $count_arr;
    }
    public function get_sales_plane_amount_gst(){
        $return_arr = [
            "delemeter" => "Lacs",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Amount(Lacs)",
            "catergories" => ['Jan', 'Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'],
            "series_data" => [
                ['name'=> 'Plan','data'=> [38, 51, 34,38, 51, 34,38, 51, 34,38, 51, 34]], 
                ['name'=> 'Sale','data'=> [31, 26, 27,31, 26, 27,31, 26, 27,31, 26, 27]]
            ]
        ];
        return $return_arr;
    }

    /* double bar chart chart */
    public function get_paln_sales_data(){
        $return_arr = [
            "delemeter" => "Lacs",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Amount(Lacs)",
            "catergories" => ['Jan', 'Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'],
            "series_data" => [
                ['name'=> 'Plan','data'=> [38, 51, 34,38, 51, 34,38, 51, 34,38, 51, 34]], 
                ['name'=> 'Sale','data'=> [31, 26, 27,31, 26, 27,31, 26, 27,31, 26, 27]]
            ]
        ];
        return $return_arr;
    }
    /* table   */
    public function get_cutomer_receiver_due_list(){

        $return_arr = [
            ["Mary Bydlon",'403.98K'],
            ["Rhonda Stewart","21.72K"],
            ["Rock Bhona","98.29K"],
            ["Brian Bower","2.41L"],
            ["Devon Rice","350.54K"],
            ["Ian Kennedy","1.65L"],
            ["Rocky Ben","47.38K"],
            ["Broma konch","7.56L"],
            ["Abdul Kama","400K"],
            ["Roka Rzo","480K"]
        ];
        // $return_arr = [];
        return $return_arr;
    }

    /* Purchase GRN Tab */

    public function get_caterory_purchse_amount(){
        $count_arr = [
            "series_data"=>[
                ['name'=> 'Direct','y'=> 20.50,'drilldown'=> 'Brian Bower'],
                ['name'=> 'Consumables','y'=> 40.50,'drilldown'=> 'Consumables'],
                ['name'=> 'Capital','y'=> 39,'drilldown'=> 'Capital']
            ]
        ];
        return $count_arr;
    }
    public function get_cash_purchase_amount(){
        $return_arr = [
            "delemeter" => "Lacs",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Amount(Lacs)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 12,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 15.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 14.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 8.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>14.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 1.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 1.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }
    /* Image Block */
    public function get_purchase_grn(){
        $return_arr = [
            "total_qty" => "9,455 Unit(s)",
            "total_amount" => "₹ 82,000,000" 
        ];
        return $return_arr;

    }
    public function get_purchase_grn_amount(){
        $return_arr = [
            "delemeter" => "Lacs",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Amount(Lacs)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 5,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 8.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 11.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 15.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>9.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 6.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 11.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }

    /* store tab */
    public function get_purchase_stock_amount(){
        $count_arr['count'] = 12345;
        return $count_arr;
    }
    public function get_in_house_parts_stock(){
        $count_arr['count'] = 23234;
        return $count_arr;
    }
    public function get_fg_stock(){
        $count_arr['count'] = 32424;
        return $count_arr;
    }
    public function get_sales_stock(){
        $count_arr['count'] = 32424;
        return $count_arr;  
    }
    public function get_purchase_stock_amount_bar(){
        $return_arr = [
            "delemeter" => "Lacs",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Amount(Lacs)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 16,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 12.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 8.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 12.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>8.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 5.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 11.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }

    /* Production Tab */
    public function get_yesterdays_production(){
        $count_arr['count'] = 5264;
        return $count_arr;
    }
    public function get_yesterdays_rejection(){
        $count_arr['count'] = 2264;
        return $count_arr;
    }
    public function get_yesterday_oee(){
        $count_arr['count'] = 1264;
        return $count_arr;
    }
    public function get_yesterdays_ppm(){
        $count_arr['count'] = 264;
        return $count_arr;
    }
    public function get_production_data(){
        $return_arr = [
            "catergories"=>["Production", "Rejection","OEE","PPM"],
            "series_data"=>[
                [ 'name'=> "1st Shift", 'data'=> [5, 2,6,5] ],
                ['name'=> "2nd Shift",'data'=> [4,6,8,3]],
                ['name'=> "3rd Shift",'data'=> [6,3,10,8]]
            ]
        ];
        return $return_arr;
    }
    public function get_production_scrap(){
        $return_arr = [
            "delemeter" => "",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Scrap(Amount)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 20,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 19.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 4.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 4.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>2.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 0.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 1.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }
    public function get_production_oee(){
        $return_arr = [
            "delemeter" => "",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Scrap(Amount)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 20,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 19.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 4.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 4.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>2.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 0.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 1.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }

    /* Business Analytics */
    public function get_receivable_due_data(){
        $count_arr['count'] = 5864;
        return $count_arr;
    }
    public function get_payable_due_data(){
        $count_arr['count'] = 2264;
        return $count_arr;
    }
    /* double bar chart chart */
    public function get_sales_purchase_grn(){
        $return_arr = [
            "delemeter" => "Lacs",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Amount(Lacs)",
            "catergories" => ['Jan', 'Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'],
            "series_data" => [
                ['name'=> 'Purchase','data'=> [38, 51, 34,38, 51, 34,38, 51, 34,38, 51, 34]], 
                ['name'=> 'Sale','data'=> [31, 26, 27,31, 26, 27,31, 26, 27,31, 26, 27]]
            ]
        ];
        return $return_arr;
    }

    public function get_rmsp(){
        $return_arr = [
            "delemeter" => "",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"RMSP(Amount)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 20,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 19.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 4.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 4.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>2.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 0.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 1.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }


    /* Quality Tab */
    public function get_in_house_ppm(){
        $return_arr = [
            "delemeter" => "",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"PPM(Amount)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 10,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 12.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 14.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 8.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>12.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 10.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 1.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }
    public function get_in_house_rejection(){
        $return_arr = [
            "delemeter" => "",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Rejection(Amount)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 15,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 12.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 4.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 4.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>2.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 0.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 1.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }
    public function get_inward_ppm(){
        $return_arr = [
            "delemeter" => "",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"Rejection(Amount)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 5,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 9.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 5.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 12.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>8.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 0.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 0.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }
    public function get_customer_ppm(){
        $return_arr = [
            "delemeter" => "",
            "xAxisLabel"=>"Month(s)",
            "yAxisLabel"=>"PPM(Amount)",
            "series_data"=>[
                [ 'name'=> 'Jan',  'y'=> 8,  'drilldown'=> 'Jan'],
                [  'name'=> 'Feb',  'y'=> 11.84,  'drilldown'=> 'Feb'], 
                [  'name'=> 'March',  'y'=> 7.18,  'drilldown'=> 'March'], 
                [ 'name'=> 'April',  'y'=> 10.12,  'drilldown'=> 'April'], 
                [  'name'=> 'May',  'y'=>12.33,  'drilldown'=> 'May'], 
                [ 'name'=> 'June',  'y'=> 5.45,  'drilldown'=> 'June'], 
                [ 'name'=> 'July',  'y'=> 9.582,  'drilldown'=> 'July']
            ]
        ];
        return $return_arr;
    }
    public function get_customer_complaint(){
        $return_arr = [
            'data' =>[['Chrome', 73.86],['Edge', 11.97]],
            'label_data' => [["label"=>"del_qty","val"=>"5,191,780"],["label"=>"pend_qty","val"=>"2,016,833"]],
            "color_lengend" =>['#e4ad16', '#3F4957']
        ];
        return $return_arr;
    }

    /* Subcon Tab */
    public function get_subcon_stocks(){
        $count_arr = [
            "series_data"=>[
                ['name'=> 'Brian Bower','y'=> 61.04,'drilldown'=> 'Brian Bower'],
                ['name'=> 'Devon Rice','y'=> 9.47,'drilldown'=> 'Devon Rice'],
                ['name'=> 'Mary Bydlon','y'=> 9.32,'drilldown'=> 'Mary Bydlon'],
                ['name'=> 'Rhonda Stewart','y'=> 8.15,'drilldown'=> 'Rhonda Stewart'],
                ['name'=> 'Rock Bhona','y'=> 11.02,'drilldown'=> "Rock Bhona"]
            ]
        ];
        return $count_arr;
    }

}