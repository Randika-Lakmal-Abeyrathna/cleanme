<?php

class Home extends CI_Controller{
    
    public function index() {
        $this->load->view('admin/inc/dashbord_header');
        $this->load->view('admin/admindashbord');
        $this->load->view('admin/inc/dashbord_footer');
//        Edit This View to Test
//        $this->load->view('user_login_view');
//        $this->load->view('admin/dashbord');
//        $this->load->view('inc/footer_view');
    }
    
    public function companyRegistration() {
         $this->load->view('inc/header_view');
//        Edit This View to Test
        $this->load->view('company_registration_view');
        $this->load->view('inc/footer_view');
    }
    
   
    
}