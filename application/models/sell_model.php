<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sell_model extends CI_Model{
    public function inserSelling_list($id,$cat,$sQuan){
        
        $this->load->database();       
        $data = array(
            'P_id' =>$id,
            'P_category' => $cat ,
            'P_selling_quantity	' => $sQuan 
        );

        $this->db->insert('selling_product', $data);
    }
    
    public function checkColomn($id,$cat){
        
        $this->load->database(); 
        $condition = "P_id ="."'" . $id . "' AND " . "P_category =" . "'" . $cat . "'";
        $this->db->select('*');
        $this->db->from('selling_product');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() === 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getQuantity($id){
        
        $this->load->database(); 
        $condition = "P_id ="."'" . $id ."'";    
        $this->db->select('*');
        $this->db->from('selling_product');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        foreach ($query->result_array() as $row){
               return $row['P_selling_quantity'];              
        }
        
        //return $query->result_array();
    }
    
    public function maxQuantity(){
        $this->load->database(); 
        $this->db->select_max('P_selling_quantity', 'Highest');
        $query = $this->db->get('selling_product');
        foreach ($query->result_array() as $row){
               return $row['Highest'];              
        }
    }
    
    public function getProduct($quan){
        $this->load->database(); 
        $condition = "P_selling_quantity ="."'" .$quan."'";    
        $this->db->select('*');
        $this->db->from('selling_product');
        $this->db->where($condition);
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function updateQuantity($id,$newQuan){
        $this->load->database();
        $data = array(
               'P_selling_quantity' => $newQuan
        );
        $this->db->where('P_id', $id);
        $this->db->update('selling_product', $data); 
    }
    
    public function getInfo(){
        $this->load->database();       
        $query = $this->db->get('selling_product');
        return $query->result_array();
    }
}