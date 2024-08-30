<?php
class SalesModel extends CI_Model {
    // public function __construct() {
        
    // }

    public function getSalesReportData($condition_arr = [],$search_params = ''){
        
    }

    public function getSalesReportViewCount(
        $condition_arr = [],
        $search_params = ""
    ) {
        $clientId = $this->Unit->getSessionClientId();
        $this->db->select(
            'COUNT(sales.sales_number) as total_record'
        );
        $this->db->select('cp.part_number, cp.part_description, c.customer_name, sales.status, sales.sales_number as salesNumber, sales.created_date AS sales_date, parts.*');
        $this->db->from('new_sales AS sales');
        $this->db->join('sales_parts AS parts', 'sales.id = parts.sales_id', 'inner');
        $this->db->join('customer AS c', 'parts.customer_id = c.id', 'inner');
        $this->db->join('customer_part AS cp', 'parts.part_id = cp.id', 'inner');
        $this->db->where('sales.clientId', $clientId);
        $this->db->where('sales.sales_number NOT LIKE', 'TEMP%');
        $this->db->where_not_in('sales.status', ['pending']);
        if (is_array($search_params) && count($search_params) > 0) {
            if ($search_params["month_number"] != "") {
                $this->db->where("sales.created_month", $search_params["month_number"]);
            }
            if ($search_params["year"] != "") {
                $this->db->where("sales.created_year",$search_params["year"]);
            }
           
        }
        if (isset($search_params["value"]) && $search_params["value"] != "") {
            $keyword = $search_params["value"];
            // Group OR conditions within a WHERE block
            $this->db->group_start();
            $fields = [
                'cp.part_number',
                'cp.part_description',
                'c.customer_name',
                'sales.status',
                'sales.sales_number',
                'sales.created_date',
                'parts.invoice_number',
                'parts.po_number',
                'parts.hsn_code',
                // Add more columns as needed
            ];
            
            foreach ($fields as $field) {
                $this->db->or_like($field, $keyword);
            }
            $this->db->group_end(); // End the group of OR conditions
        }

        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->row_array() : [];

        // pr($this->db->last_query(),1);
        return $ret_data;
    }

    public function getSalesReportViewData($condition_arr = [], $search_params = "") {
        $clientId = $this->Unit->getSessionClientId();
        $this->db->select('cp.part_number, cp.part_description, c.customer_name, sales.status, sales.sales_number as salesNumber, sales.created_date AS sales_date, parts.*');
        $this->db->from('new_sales AS sales');
        $this->db->join('sales_parts AS parts', 'sales.id = parts.sales_id', 'inner');
        $this->db->join('customer AS c', 'parts.customer_id = c.id', 'inner');
        $this->db->join('customer_part AS cp', 'parts.part_id = cp.id', 'inner');
        $this->db->where('sales.clientId', $clientId);
        $this->db->where('sales.sales_number NOT LIKE', 'TEMP%');
        $this->db->where_not_in('sales.status', ['pending']);
        
        // Apply conditions based on $condition_arr
        if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
        }
    
        // Apply additional search conditions
        if (is_array($search_params) && count($search_params) > 0) {
            if ($search_params["month_number"] != "") {
                $this->db->where("sales.created_month", $search_params["month_number"]);
            }
            if ($search_params["year"] != "") {
                $this->db->where("sales.created_year", $search_params["year"]);
            }
            
            // Apply LIKE conditions if a keyword is provided
            if (isset($search_params["value"]) && $search_params["value"] != "") {
                $keyword = $search_params["value"];
                // Group OR conditions within a WHERE block
                $this->db->group_start();
                $fields = [
                    'cp.part_number',
                    'cp.part_description',
                    'c.customer_name',
                    'sales.status',
                    'sales.sales_number',
                    'sales.created_date',
                    'parts.invoice_number',
                    'parts.po_number',
                    'parts.hsn_code',
                    // Add more columns as needed
                ];
                
                foreach ($fields as $field) {
                    $this->db->or_like($field, $keyword);
                }
                $this->db->group_end(); // End the group of OR conditions
            }
        }
    
        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        
        // Debugging: print the last executed query
        // pr($this->db->last_query(),1);
        
        return $ret_data;
    }
    

    public function getReceivableReportView($condition_arr = [],$search_params = ""){
        $this->db->select('s.*, SUM(s.gst_amount) as gst, SUM(s.total_rate) as ttlrt, SUM(s.gst_amount) as gstamnt, 
                  SUM(s.tcs_amount) as tcsamnt, cus.customer_name, cus.payment_terms, rrp.payment_receipt_date,
                  rrp.amount_received, rrp.transaction_details, ns.created_date');
        $this->db->from('sales_parts s');
        $this->db->join('new_sales n', 's.sales_id = n.id AND n.clientId = '.$this->Unit->getSessionClientId());
        $this->db->join('customer cus', 's.customer_id = cus.id', 'left');
        $this->db->join('receivable_report rrp', 's.sales_number = rrp.sales_number', 'left');
        $this->db->join('new_sales ns', 's.sales_id = ns.id', 'left');
        if(is_valid_array($search_params) && $search_params['customer_part_id'] > 0){
            $this->db->where('s.customer_id', $search_params['customer_part_id']);
        }
        $this->db->group_by('s.sales_number');
        // pr($condition_arr,1);
        if($condition_arr["order_by"] == ''){    
            $this->db->order_by('s.id', 'DESC');
        }
        
        if (count($condition_arr) > 0) {
            $this->db->limit($condition_arr["length"], $condition_arr["start"]);
            if ($condition_arr["order_by"] != "") {
                $this->db->order_by($condition_arr["order_by"]);
            }
        }

        if (is_valid_array($search_params) && isset($search_params["value"]) && $search_params["value"] != "") {
            $keyword = $search_params["value"];
            
            // Group OR conditions within a WHERE block
            $this->db->group_start();
            $fields = [
                's.sales_number',
                'cus.customer_name',
                'rrp.transaction_details',
                'ns.created_date',
                'rrp.payment_receipt_date',
                's.created_date'
                // Add other fields to search as needed
            ];
            
            foreach ($fields as $field) {
                $this->db->or_like($field, $keyword);
            }
            $this->db->group_end(); // End the group of OR conditions
        }

       

        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];
        // pr($this->db->last_query(),1);
        return $ret_data;
    }

    public function getReceivableReportCount( $condition_arr = [],$search_params = ""){
        $this->db->select('count(s.id) as total_record');
        $this->db->from('sales_parts s');
        $this->db->join('new_sales n', 's.sales_id = n.id AND n.clientId = '.$this->Unit->getSessionClientId());
        $this->db->join('customer cus', 's.customer_id = cus.id', 'left');
        $this->db->join('receivable_report rrp', 's.sales_number = rrp.sales_number', 'left');
        $this->db->join('new_sales ns', 's.sales_id = ns.id', 'left');
        if(is_valid_array($search_params) && $search_params['customer_part_id'] > 0){
            $this->db->where('s.customer_id', $search_params['customer_part_id']);
        }
        $this->db->group_by('s.sales_number');
        // $this->db->order_by('s.id', 'DESC');

        if (is_valid_array($search_params) && isset($search_params["value"]) && $search_params["value"] != "") {
            $keyword = $search_params["value"];
            
            // Group OR conditions within a WHERE block
            $this->db->group_start();
            $fields = [
                's.sales_number',
                'cus.customer_name',
                'rrp.transaction_details',
                'ns.created_date',
                'rrp.payment_receipt_date',
                's.created_date'
                // Add other fields to search as needed
            ];
            
            foreach ($fields as $field) {
                $this->db->or_like($field, $keyword);
            }
            $this->db->group_end(); // End the group of OR conditions
        }

        $result_obj = $this->db->get();
        $ret_data = is_object($result_obj) ? $result_obj->result_array() : [];

        
        return $ret_data;
    }
}