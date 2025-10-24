<?php

class User_login extends REST_Controller{

  public function __construct(){

    parent::__construct();
    //load database
    $this->load->model('User_login_model');
    $this->load->library(array("form_validation"));
    $this->load->helper("security");

  }

  // POST Method:
  public function index_post(){

    // form validation for inputs
    $config = array(

      array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|valid_email',
        'errors' => array(
          'required' => 'You must provide an %s.',
          'valid_email' => 'Please provide a valid %s.'
        )
      ),
      array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'trim|required|min_length[5]',
        'errors' => array(
          'required' => 'You must provide a %s.',
          'min_length' => 'The %s must be at least 5 characters long.'
        )
      ),


    );

    $this->form_validation->set_rules($config);
    // checking form submittion have any error or not
    if($this->form_validation->run() === FALSE){
      $errors = $this->form_validation->error_array();
      $response = array(
        'success' => '0',
        'message' => 'Validation failed.',
        'errors' => $errors
      );
      $this->response($response, REST_Controller::HTTP_OK);
    }else{
      // collecting form data inputs
      $email = $this->security->xss_clean($this->input->post("email"));
      $password = $this->security->xss_clean($this->input->post("password"));

      if(!empty($email) && !empty($password)){
        $user = array(
          "email" => $email,
          "password" => $password,
        );
        $this->start($user);

      }else{
        $this->response(array(
          "status" => 0,
          "message" => "All fields are needed."
        ), REST_Controller::HTTP_NOT_FOUND);
      }
    }

  }

  // GET Method:
  public function index_get() {
    // collecting form data inputs
    $email = $this->security->xss_clean($this->input->get("email"));
    $password = $this->security->xss_clean($this->input->get("password"));

    // Validate parameter
    $errors = [];

    if (empty($email)){
      $errors["email"] = "You must provide a Email.";
    }else{
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Please provide a valid Email.";
      }
    }
    if (empty($password)){
      $errors["password"]= "You must provide a Password.";
    }else{
      $length = 5;
      if (!(strlen($password) >= $length)) {
        $errors["password"] = "The Password must be at least $length characters long.";
      }
    }

    if(count($errors) > 0){
      $return_arr = array(
        "success" => 0,
        "message" => "Validation failed.",
        "errors" => $errors
      );
      $this->response($return_arr, REST_Controller::HTTP_OK);
      return;
    }else{
      $user = array(
        "email" => $email,
        "password" => $password,
      );
      $this->start($user);
    }

  }

  public function start($data = []){
    $user_id = $this->User_login_model->check_user_login($data);
    $return_arr = [];
    $server_error = [];
    if($user_id > 0){
      $return_arr = array(
        "success" => 1,
        "message" => "user Login Successfully.",
        "data"=> ["user_id"=>$user_id]
      );
      $server_error = REST_Controller::HTTP_OK;
    }else if($user_id == -1){
      $return_arr = array(
        "success" => 0,
        "message" => "User does not exist.",
        "data" => []
      );
      $server_error = REST_Controller::HTTP_OK;
    }else{

      $server_error = REST_Controller::HTTP_INTERNAL_SERVER_ERROR;
    }
    $this->response($return_arr, $server_error);
    return;
  }

}

?>
