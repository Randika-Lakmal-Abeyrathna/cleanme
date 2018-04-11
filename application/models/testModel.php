<?php

class testModel extends CI_Model {
    
    public function Test($data) {
        
        $this->db->where(['userName'=> $data[0]]);
        $this->db->where(['password'=> $data[1]]);
        
        $q = $this->db->get('login');
        
//        print_r($q->result());
                
        
//        echo ' This is User Name :'.$data[0];
//        echo ' This is password :'.$data[1];
        
        
    }

}
