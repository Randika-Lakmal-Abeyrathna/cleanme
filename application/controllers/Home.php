<?php

class Home extends CI_Controller{
    
    public function index() {
        $this->load->view('inc/header_view');
//        Edit This View to Test
        $this->load->view('home_view');
        $this->load->view('inc/footer_view');
    }
    
    public function companyRegistration() {
         $this->load->view('inc/header_view');
//        Edit This View to Test
        $this->load->view('company_registration_view');
        $this->load->view('inc/footer_view');
    }
    
}