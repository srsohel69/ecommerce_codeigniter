<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SignUP_model extends CI_Controller {
    
    public function insert($name,$id,$email,$pass,$mobile,$gender){
        
        $this->load->database();
         
        $data = array(
            'User_Name' => $name ,
            'User_id' => $id ,
            'User_email' => $email ,
            'User_Password' => $pass ,
            'User_Mobile' => $mobile ,
            'User_Gender' => $gender 
        );

        if($this->db->insert('user_information', $data)){
           $data = array(
            'User_Name' => $id ,
            'Password' => $pass 
            );
           if($this->db->insert('log_in', $data)){
               return true;
           }
           else{
               return false;
           }
        }
        else{
               return false;
           }
    }
}