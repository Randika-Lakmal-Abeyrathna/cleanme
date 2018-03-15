<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends CI_Controller {

    public function index() {

        $this->load->view('inc/header_view');
//        Edit This View to Test
        echo site_url();
        $this->load->view('user_registration_view');
        $this->load->view('inc/footer_view');
    }

    public function registration() {
        $this->load->view('inc/header_view');
        $this->load->view('user_registration_view');
        $this->load->view('inc/footer_view');
    }

}
