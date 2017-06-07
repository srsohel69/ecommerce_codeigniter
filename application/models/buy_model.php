<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buy_model extends CI_Model{
    public function updateQuantity($tablename,$id,$quantity){
                
        $data = array(
               'P_quantity' => $quantity
        );

        $this->db->where('P_id', $id);
        $this->db->update($tablename, $data);
        
    }
    
    public function get_admin_income(){
        
        $result =  $this->db->get('admin_income');
        foreach ($result->result_array() as $row){
            return $row['total_income'];
        }
    }


    public function admin_income($income){
        
        $data = array(
               'total_income' => $income
        );

        $this->db->where('username','admin');
        $this->db->update('admin_income', $data);
    }
}