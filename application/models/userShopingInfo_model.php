<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserShopingInfo_model extends CI_Model{
    
    public function createUsershoppingTable($tableName){
        
        $this->load->dbforge();
        $fields = array( 
            'Item_Section' => array(
                'type' => 'VARCHAR',
                'constraint' => 15, 
                'auto_increment' => FALSE
                ),
            'Item_ID' => array(
                'type' => 'VARCHAR',
                'constraint' => 15, 
                'auto_increment' => FALSE
                ),
            'Item_Category' => array(
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
            'Quantity' => array(
                'type' => 'INT',
                'constraint' => '2'
                ),
            'total_price' => array(
                'type' => 'INT',
                'constraint' => '10'
            ),
            'Date' => array(
                'type' => 'VARCHAR',
                'constraint' => '30'
            )
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table($tableName, TRUE);
    }
    
    public function insertBuyingItem($tablename,$sec,$id,$cat,$brand,$pic,$quan,$tprice,$date){
            $this->load->database();

            $data = array(
                'Item_Section' =>$sec,
                'Item_ID' => $id ,
                'Item_Category'=>$cat,
                'Item_Brand'=>$brand,
                'Item_Picture'=>$pic,
                'Quantity' => $quan ,
                'total_price' => $tprice ,
                'Date'=>$date
            );

            $this->db->insert($tablename, $data);
    }
    
    public function getInfo($tablename){
        $result = $this->db->get($tablename);
        return $result->result_array();
    }
           
}
