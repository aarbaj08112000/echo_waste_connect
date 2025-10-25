<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Citizen extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Citizen_model');
    }
	public function index() {
		$data['base_url'] = base_url();
		$this->smarty->loadView('register_citizen.tpl',$data,'No','No');
	}
	/* add update user module */

	public function citizen_list()
	{
		checkGroupAccess("citizen","list","Yes");
		$data['citizen'] = $this->Citizen_model->getUserData();
		$data['no_data_message'] = NoDataFoundMessage("user");
		// pr($data,1);
		$this->smarty->loadView('citizen_list.tpl', $data,'Yes','Yes');
	}
	public function addUsersData()
	{
		$ret_arr = [];
		$msg ='';
		$success = 1;
        $client_arr  = $this->input->post("client");
        $groups  = $this->input->post("groups");
        
        if(is_valid_array($client_arr) && is_valid_array($groups)){
    		$data = array(
    			'user_name' => $this->input->post('user_name'),
    			'user_email' => $this->input->post('user_email'),
    			'user_password' => $this->input->post('user_password'),
    			'user_role' => $this->input->post('user_role'),
    			'added_date' => date("Y-m-d H:i:s"),
    			'added_by' => $this->session->userdata('user_id'),
                'unit_ids' => implode(",", $client_arr),
                "deleted"=>0,
                'groups' => implode(",", $groups),
    		);

    		$inser_query = $this->User_model->insertUser($data);
    		if ($inser_query) {
    			if ($inser_query) {
    				// echo "<script>alert('User  Added Successfully');document.location='erp_users'</script>";
    				$msg = 'User Added Successfully.';
    			} else {
    				// echo "<script>alert('Error IN User  Adding ,try again');document.location='erp_users'</script>";
    				$msg = 'Error IN User Adding ,try again.';
    				$success = 0;
    			}
    		} else {
    			
    			$msg = 'Error occer while inserting data.';
    			$success = 0;
    		}
        }else if(!is_valid_array($client_arr)){
            $msg = 'Please select unit.';
            $success = 0;
        }else if(!is_valid_array($groups)){
            $msg = 'Please select groups.';
            $success = 0;
        }
		$ret_arr['msg'] = $msg;
		$ret_arr['success'] = $success;
		echo json_encode($ret_arr);
	}
	public function updateCitizenStatus()
    {
		
        $ret_arr = [];
        $msg ='';
        $success = 0;
        $citizen_id  = $this->input->post("citizen_id");
        $approve_status = $this->input->post('approve_status');
        $data = array(
			'status' => $approve_status,
			'updated_date' => date("Y-m-d H:i:s"),
    		'updated_by' => $this->session->userdata('user_id'),
		);
		$result = $this->Citizen_model->updateCitizenData($data, $citizen_id);
		if ($result) {
			if ($result) {
				$success = 1;
				// echo "<script>alert('User  Added Successfully');document.location='erp_users'</script>";
				$msg = 'Citizen status updated successfully.';
			} else {
				// echo "<script>alert('Error IN User  Adding ,try again');document.location='erp_users'</script>";
				$msg = 'Error IN citizen status updating ,try again.';
				$success = 0;
			}
		} else {
			$msg = 'Error occer while updating data.';
			$success = 0;
		}
        $ret_arr['messages'] = $msg;
        $ret_arr['success'] = $success;
        echo json_encode($ret_arr);
    }

	public function signin()
	{
		
		$this->form_validation->set_rules('email', ' Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', ' Password', 'trim|required|min_length[3]');

		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$password = $this->input->post('password');
		$result = $this->Citizen_model->get_citizen_details($email);	
		
		$redirect_url = "";
		$messages = "Something went wrong.";
		$success = 0;
		if (empty($result)) {
			$profileImageData = $_FILES["user_img"]["name"] != "" ? $_FILES["user_img"] : [];
            $config["upload_path"] = "public/uploads/citizen/";
			if (!is_dir(FCPATH .$config["upload_path"])) {
				mkdir(FCPATH . $config["upload_path"], 0755, TRUE);
			}
            $config["allowed_types"] = "jpg|jpeg|png"; 
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            $upload_error_msg = [];
            $citizen_image = "";
            if (!empty($profileImageData)) {
                if (!$this->upload->do_upload("user_img")) {
                    $upload_error_msg = $error = [
                        "error" => $this->upload->display_errors(),
                    ];
                    $upload_error = 1;
                } else {
                    $upload_data = $this->upload->data();
                    $citizen_image = "public/uploads/citizen/".$upload_data['file_name'];
                }
            }
			$inser_data = [
				"name" => $name,
				"email" => $email,
				"password" => $password,
				"image" => $citizen_image,
				"status" => 'Pending'
			];
			$insert_id = $this->Citizen_model->insertCitizen($inser_data);
			if($insert_id > 0){
				$messages = "Citizen added successfully.";
				$success = 1;
			}			
		} else {
			$success = 0;
			$messages = "Citizen already register with this email.";
			
		}
		$return_arr['redirect_url']= $redirect_url;
		$return_arr['success']=$success;
		$return_arr['messages']=$messages;
		echo json_encode($return_arr);
		exit;
	}

	public function garbagePickupRequest(){
		$data['groups'] = $this->Citizen_model->getGroupData();
		$this->smarty->loadView('garbage_pickup_request.tpl', $data,"Yes","Yes");
	}
	public function addGarbagePickupRequest(){
		checkGroupAccess("garbage_pickup_request","add","Yes");
		$data = [];
		$this->smarty->loadView('add_garbage_pickup_request.tpl', $data,"Yes","Yes");
	}
	public function addUpdateGarbagePickupRequest(){
		$post_data = $this->input->post();
		$session_data = $this->session->userdata();
        $user_type = $session_data['role'] == "citizen" ? "Citizen" : "Staff";
		$profileImageData = $_FILES["image"]["name"] != "" ? $_FILES["image"] : [];
		$config["upload_path"] = "public/uploads/garbage_pickup_request/";
		if (!is_dir(FCPATH .$config["upload_path"])) {
			mkdir(FCPATH . $config["upload_path"], 0755, TRUE);
		}
		$config["allowed_types"] = "jpg|jpeg|png"; 
		$this->load->library("upload", $config);
		$this->upload->initialize($config);
		$upload_error_msg = [];
		$garbage_image = "";
		if (!empty($profileImageData)) {
			if (!$this->upload->do_upload("image")) {
				$upload_error_msg = $error = [
					"error" => $this->upload->display_errors(),
				];
				$upload_error = 1;
			} else {
				$upload_data = $this->upload->data();
				$garbage_image = "public/uploads/garbage_pickup_request/".$upload_data['file_name'];
			}
		}
		$inser_data = [
			"type_of_waste" => $post_data['type_of_waste'],
			"qty_vol" => $post_data['qty_vol'],
			"image" => $garbage_image,
			"pickup_date" => $post_data['pickup_date'],
			"time_slot" => $post_data['time_slot'].":00",
			"location" => $post_data['location'],
			"waste_description" => $post_data['waste_description'],
			"special_instruction" => $post_data['special_instruction'],
			"added_by" => $session_data['user_id'],
			'added_date' => date("Y-m-d H:i:s"),
    		'added_by_type' => $user_type,
		];
		$msg ='Something went wrong';
		$success = 1;
		$inser_id = $this->Citizen_model->insertGarbagePickupRequest($inser_data);
		if ($inser_id > 0) {
			$msg = 'Garbage pickup request added successfully.';
			$success = 1;
		}
		$ret_arr['messages'] = $msg;
		$ret_arr['success'] = $success;
		echo json_encode($ret_arr);
	}
	public function garbagePickupRequestListing()
    {   
        $current_route = $this->uri->segment(1);
        checkGroupAccess("garbage_pickup_request","list","Yes");
		$column[] = [
            "data" => "image",
            "title" => "Image",
            "width" => "2%",
            "className" => "dt-left",
        ];
		$column[] = [
            "data" => "request_code",
            "title" => "Request Code",
            "width" => "2%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "type_of_waste",
            "title" => "Type Of Waste",
            "width" => "2%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "qty_vol",
            "title" => "Quantity / Volume",
            "width" => "2%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "pickup_date",
            "title" => "Pickup Date",
            "width" => "2%",
            "className" => "dt-center", 
        ];
        
        $column[] = [
            "data" => "time_slot",
            "title" => "Time Slot",
            "width" => "2%",
            "className" => "dt-center",
        ];
        $column[] = [
            "data" => "location",
            "title" => "Pickup Location",
            "width" => "10%",
            "className" => "dt-left",
        ];
		
		$column[] = [
            "data" => "status",
            "title" => "Status",
            "width" => "5%",
            "className" => "dt-center"
        ];
        
        $column[] = [
            "data" => "action",
            "title" => "Action",
            "width" => "5%",
            "className" => "dt-center",
        ];
        
        // $column[] = [
        //     "data" => "total_record",
        //     "title" => "Total Data Collection",
        //     "width" => "5%",
        //     "className" => "dt-center",
        // ];
        // $column[] = [
        //     "data" => "status",
        //     "title" => "Status",
        //     "width" => "5%",
        //     "className" => "status dt-center",
        // ];
        // $column[] = [
        //     "data" => "action",
        //     "title" => "Action",
        //     "width" => "7%",
        //     "className" => "dt-center",
        // ];
        // $column[] = [
        //     "data" => "url",
        //     "title" => "Url",
        //     "width" => "10%",
        //     "className" => "dt-left",
        //     "visible" => false
        // ];
        // $column[] = [
        //     "data" => "form_type",
        //     "title" => "Type",
        //     "width" => "10%",
        //     "className" => "dt-left",
        //     "visible" => false
        // ];
        // $column[] = [
        //     "data" => "designation",
        //     "title" => "Designation",
        //     "width" => "10%",
        //     "className" => "dt-left",
        //     "visible" => false
        // ];
        // $column[] = [
        //     "data" => "course",
        //     "title" => "Course",
        //     "width" => "10%",
        //     "className" => "dt-left",
        //     "visible" => false
        // ];
        // $column[] = [
        //     "data" => "section",
        //     "title" => "Section",
        //     "width" => "10%",
        //     "className" => "dt-left",
        //     "visible" => false
        // ];
        // $column[] = [
        //     "data" => "house",
        //     "title" => "<H></H>ouse",
        //     "width" => "10%",
        //     "className" => "dt-left",
        //     "visible" => false
        // ];

        // $column[] = [
        //     "data" => "course",
        //     "title" => "Course",
        //     "width" => "10%",
        //     "className" => "dt-left",
        //     "visible" => false
        // ];
        // $column[] = [
        //     "data" => "course",
        //     "title" => "Course",
        //     "width" => "10%",
        //     "className" => "dt-left",
        //     "visible" => false
        // ];
        
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
        $data["sorting_column"] = json_encode([]); //
        $data["page_length_arr"] = [[10,100,500,1000,2000,2500,3000,-1], [10,100,500,1000,2000,2500,3000,'All']];
        $data["admin_url"] = base_url();
        $data["base_url"] = base_url();
		$data["staff_user"] = $this->Citizen_model->getStaffData($data, $citizen_id);
        $this->smarty->loadView('garbage_pickup_request.tpl', $data,'Yes','Yes');
    }

    public function garbagePickupRequestListingData(){
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
        $is_deleted = $post_data['data']['is_deleted'];
        $data = $this->Citizen_model->getGarbagePickupRequestData($condition_arr,$post_data["search"],$is_deleted);
        foreach ($data as $key => $val) {
            $data[$key]['image'] = "<img src='".base_url($val['image'])."' alt='' width='75' height='75' title='College Logo'>";
			$timestamp = strtotime($val['added_date']);
			$year_short = date('y',$timestamp);
			$data[$key]['pickup_date'] = defaultDateFormat($val['pickup_date']);
			$request_code = generateRequestCode("garbage_pickup_request",$val['garbage_pickup_request_id'],$year_short);
			$data[$key]['request_code'] = '<a href="'.base_url("garbage_pickup_request_details/".$val['garbage_pickup_request_id']).'" target="blanck" title="'.$request_code.'">'.$request_code.'</a>';
			$data[$key]['status'] = getStatusClass($val['status']);
			$data[$key]['action'] = '<a href="https://www.google.com/maps/place/'.$val['location'].'" target="blanck" title="Google Map"><i class="ti ti-map-2"></i></a>';
			if($val['status'] != "Completed" && $val['status'] != "Cancelled"){
				if($val['status'] == "UnderReview"){
					$data[$key]['action'] .= '<a type="button" title="Assign Staff" class="ms-2 assign-staff" data-id="'.$val['garbage_pickup_request_id'].'" ><i class="ti ti-user-plus"></i></a>';
				}
				if($this->session->userdata("role") != "citizen"){
					$data[$key]['action'] .= '<a type="button" title="Change Status" class="ms-2 change-status" data-id="'.$val['garbage_pickup_request_id'].'" data-status="'.$val['status'].'"><i class="ti ti-refresh"></i></a>';
				}
			}
			
        }
        
        $data["data"] = $data;
        // pr($data,1);
        $total_record = $this->Citizen_model->getGarbagePickupRequestDataCount([], $post_data["search"],$is_deleted);
        $data["recordsTotal"] = $total_record['total_record'];
        $data["recordsFiltered"] = $total_record['total_record'];
        echo json_encode($data);
        exit();
    }

	public function garbagePickupRequestDetails(){
		checkGroupAccess("garbage_pickup_request","list","Yes");
		$id = $this->uri->segment(2);
		$data = $this->Citizen_model->garbagePickupRequestDetails($id);
		$status_log = $this->Citizen_model->getGarbagePickupRequestStatusLog($id);
		$status_log_data = [];
		$process_images = [];
		foreach ($status_log as $key => $value) {
			$status_log_data[$value['status']] = $value;
			if($value['images'] != "" && $value['images'] != null){
				$images = json_decode($value['images']);
				$process_images = array_merge($process_images,$images);
			}
		}
		$data['process_images'] = $process_images;
		$data['status_log_data'] = $status_log_data;
		
		$timestamp = strtotime($data['added_date']);
		$year_short = date('y',$timestamp);
		$data['pickup_date'] = defaultDateFormat($data['pickup_date']);
		$data['request_code'] = generateRequestCode("garbage_pickup_request",$id,$year_short);
		$this->smarty->loadView('garbage_pickup_request_details.tpl', $data,'Yes','Yes');
	}
	public function updateGarbagePickupRequest(){
		$post_data = $this->input->post();
		$garbage_pickup_request_id = $post_data['request_id'];
		$data = array(
			'status' => $post_data['status'],
			'updated_date' => date("Y-m-d H:i:s"),
    		'updated_by' => $this->session->userdata('user_id'),
		);
		$result = $this->Citizen_model->updateGarbagePickupRequest($data, $garbage_pickup_request_id);
		if ($result) {
			if ($result) {
				$profileImageData = $_FILES["process_images"]["name"] != "" ? $_FILES["process_images"] : [];
				$config["upload_path"] = "public/uploads/garbage_pickup_request_process/";
				if (!is_dir(FCPATH .$config["upload_path"])) {
					mkdir(FCPATH . $config["upload_path"], 0755, TRUE);
				}
				$config["allowed_types"] = "jpg|jpeg|png"; 
				$this->load->library("upload", $config);
				$this->upload->initialize($config);
				$process_image = [];
				$upload_error = 0;
				$upload_error_msg = [];

				if (!empty($_FILES['process_images']['name'][0])) {
					$filesCount = count($_FILES['process_images']['name']);
					
					for ($i = 0; $i < $filesCount; $i++) {
						$_FILES['file']['name']     = $_FILES['process_images']['name'][$i];
						$_FILES['file']['type']     = $_FILES['process_images']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['process_images']['tmp_name'][$i];
						$_FILES['file']['error']    = $_FILES['process_images']['error'][$i];
						$_FILES['file']['size']     = $_FILES['process_images']['size'][$i];

						$config['upload_path']   = './public/uploads/garbage_pickup_request/';
						$config['allowed_types'] = 'jpg|jpeg|png';
						$config['max_size']      = 2048; // optional: 2MB limit
						$config['encrypt_name']  = TRUE; // optional: rename file for uniqueness

						$this->upload->initialize($config);

						if (!$this->upload->do_upload('file')) {
							$upload_error = 1;
							$upload_error_msg[] = $this->upload->display_errors('', '');
						} else {
							$upload_data = $this->upload->data();
							$process_image[] = "public/uploads/garbage_pickup_request/" . $upload_data['file_name'];
						}
					}
				}
				$inser_data = array(
					'status' => $post_data['status'],
					'added_date' => date("Y-m-d H:i:s"),
					'added_by' => $this->session->userdata('user_id'),
					'garbage_pickup_request_id' => $garbage_pickup_request_id,
					'images' => json_encode($process_image)
				);
				$this->Citizen_model->insertGarbagePickupRequestStatusLog($inser_data);
				$success = 1;
				$msg = 'Garbage pickup request status has been changed to '.getStatusClass($post_data['status']).'.';
			} else {
				$msg = 'Error in garbage pickup request status updating ,try again.';
				$success = 0;
			}
		} else {
			$msg = 'Error occer while updating data.';
			$success = 0;
		}
        $ret_arr['messages'] = $msg;
        $ret_arr['success'] = $success;
        echo json_encode($ret_arr);
	}
	public function assignStaffGarbagePickupRequest(){
		$post_data = $this->input->post();
		$garbage_pickup_request_id = $post_data['request_id'];
		$data = array(
			'staff_id' => $post_data['staff_id'],
			'status' => "Assigned",
			'updated_date' => date("Y-m-d H:i:s"),
    		'updated_by' => $this->session->userdata('user_id'),
		);
		$result = $this->Citizen_model->updateGarbagePickupRequest($data, $garbage_pickup_request_id);
		if ($result) {
			if ($result) {
				$inser_data = array(
					'status' => "Assigned",
					'added_date' => date("Y-m-d H:i:s"),
					'added_by' => $this->session->userdata('user_id'),
					'garbage_pickup_request_id' => $garbage_pickup_request_id
				);
				$this->Citizen_model->insertGarbagePickupRequestStatusLog($inser_data);
				$success = 1;
				$msg = 'Staff assigned successfully for the garbage pickup request.';
			} else {
				$msg = 'Error in staff assigned ,try again.';
				$success = 0;
			}
		} else {
			$msg = 'Error occer while updating data.';
			$success = 0;
		}
        $ret_arr['messages'] = $msg;
        $ret_arr['success'] = $success;
        echo json_encode($ret_arr);
	}
	
}

