<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowUser_model extends CI_Model{
    
    public function getUser(){
        $this->load->database(); 
        $query = $this->db->get('user_information');
        return $query->result_array();
    }
    public function deleteUser($id){
        $this->load->database(); 
        
        $this->db->delete('user_information', array('User_id' => $id)); 
        $this->db->delete('log_in', array('User_Name' => $id));
        
        $this->load->dbforge();
        $this->dbforge->drop_table($id);
    }
}