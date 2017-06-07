<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ItemDetail_model extends CI_Model{
    
    public function getDetails($catagory,$pid){
        
        $this->load->database();        
        //$result = $this->db->get_where($catagory, array('P_id' => $pid),2,0);
        $condition = "P_id ="."'". $pid ."'";
        
        $this->db->select('*');
        $this->db->from($catagory);
        $this->db->where($condition);
        $this->db->limit(5);
        $result = $this->db->get();
        
        return $result->result_array();   
    }
}