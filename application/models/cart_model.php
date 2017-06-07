<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model{
    public function createCart($tableid){
        
        $this->load->dbforge();
        $fields = array(    
            'Item_Section' => array(
                'type' => 'VARCHAR',
                'constraint' => 30, 
                'auto_increment' => FALSE
                ),
            'Item_ID' => array(
                'type' => 'VARCHAR',
                'constraint' => 15, 
                'auto_increment' => FALSE
                ),
            'Item_Catagory' => array(
                'type' => 'VARCHAR',
                'constraint' => 30, 
                'auto_increment' => FALSE
                ),
            'Item_Brand' => array(
                'type' => 'VARCHAR',
                'constraint' => 15, 
                'auto_increment' => FALSE
                ),
            'Item_Picture' => array(
                'type' => 'VARCHAR',
                'constraint' => 50, 
                'auto_increment' => FALSE
                ),
            'Item_Price' => array(
                'type' => 'INT',
                'constraint' => 8, 
                'auto_increment' => FALSE
                ),
            'Quantity' => array(
                'type' => 'INT',
                'constraint' => '2'
                ),
            'total_price' => array(
                'type' => 'INT',
                'constraint' => '10'
            )
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('Cart'.$tableid, TRUE);
    }
    
    public function checkItem($tableName,$id,$category){
        $this->load->database(); 
        $condition = "Item_ID ="."'" . $id . "' AND " . "Item_Section =" . "'" . $category . "'";
        $this->db->select('*');
        $this->db->from('Cart'.$tableName);
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() === 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertCart($tableid,$sec,$id,$cat,$bran,$pic,$pri,$quan,$tpri){
        $this->load->database();
         
        $data = array(
            'Item_Section' =>$sec,
            'Item_ID' => $id ,
            'Item_Catagory' => $cat ,
            'Item_Brand' => $bran ,
            'Item_Picture' => $pic ,
            'Item_Price' => $pri ,
            'Quantity' => $quan ,
            'total_price' => $tpri 
        );

        $this->db->insert('Cart'.$tableid, $data);
    }


    public function showCart($tableid){
        $result = $this->db->get('Cart'.$tableid);
        return $result->result_array();
    }
    
    public function dropCartTable($tableid){
        $this->load->dbforge();
        $this->dbforge->drop_table('Cart'.$tableid);
    }
    
    public function totalCost($tableid){
        
        $this->load->database();
        /*$sql = 'SELECT SUM(total_price)AS Total_PRICE FROM Cart;';
        $result = $this->db->query($sql);*/
        $this->db->select_sum('total_price','Total_PRICE');
        $result = $this->db->get('Cart'.$tableid);
        return $result->result_array();      
    }
    
    public function deleteCartItem($table,$pid){
        $this->db->delete('Cart'.$table, array('Item_ID' => $pid)); 
    }

        public function emptyTable($tableid){
        $this->db->empty_table('Cart'.$tableid); 
    }
}