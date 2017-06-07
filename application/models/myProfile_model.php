<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyProfile_model extends CI_Model{
    
    public function select($username){
        
        //$sql = "SELECT * FROM user_information where User_id ="."'".$username."'";
        $this->load->database();      
        $result = $this->db->get_where('user_information', array('User_id' => $username),1,0);
        
        return $result->result_array();
    }
}