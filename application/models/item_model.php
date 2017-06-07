<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item_model extends CI_Model{
    
    public function get($tableName)
	{
            $this->load->database();
            $result =$this->db->get($tableName);
            return $result->result_array();
	}
    
    public function insert($cat,$code,$sec,$brand,$price,$quan,$pic){

        $data = array(
            'P_id' => $code ,
            'P_catagory' => $sec ,
            'P_brand' => $brand ,
            'P_price' => $price ,
            'P_quantity' => $quan,
            'P_picture' => $pic
         );

         if(!$this->db->insert($cat, $data)){
             return "Item is Not inserted. Something went wrong !!!!";
         } 
         else {
             return " Item is Successfully inserted !!";
         } 
    } 
    
    public function delete($table,$id){

	$this->load->database();
        $this->db->delete($table, array('P_id' => $id)); 

    }
    
    public function update($table,$id,$price){
        $this->load->database();
        $data = array(
               'P_price' => $price
        );
        $this->db->where('P_id', $id);
        $this->db->update($table, $data); 
    }
    public function updateQuan($table,$id,$quantity){
        $this->load->database();
        $data = array(
               'P_quantity' => $quantity
        );
        $this->db->where('P_id', $id);
        $this->db->update($table, $data); 
    }
}