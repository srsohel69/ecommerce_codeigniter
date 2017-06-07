<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ItemPic_model extends CI_Model{
    
    public function getPic($tableName){
        
        $this->load->database();       
        $this->db->select('*');
        $this->db->from($tableName);
        $this->db->order_by("P_id", "desc");
        $this->db->limit(1);
        $result = $this->db->get();

        return $result->result_array();
    }
    
    public function getAllPic($tableName){
        
        $this->load->database();
        $result =$this->db->get($tableName);
        
        return $result->result_array();
    }
    
}