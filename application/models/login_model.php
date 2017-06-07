<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    
    public function loginCheck($user,$pass){
        
        $this->load->database();
       // echo"now in model";
        $myusername = $user;
        $mypassword = $pass;        
        $condition = "User_Name =" . "'" . $myusername . "' AND " . "Password =" . "'" . $mypassword . "'";
        
        $this->db->select('*');
        $this->db->from('log_in');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
              
    }
}