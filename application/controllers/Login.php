<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

//    public function __construct() {
//        parent::__construct();
//        
//        $this->load->model('login_model');
//        
//    }

    public function index() {
        $this->load->view('user_login_view');
    }

    public function Test() {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        echo $email;
        $data = [$email,$password];
        $this->load->model('testModel');
        $results = $this->testModel->Test($data);
        
        
    }

}
