<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_autocomplete($search_data)
    {
        $this->db->select('P_id');
        $query=$this->db->like('P_id', $search_data,'both')->get();
        
        foreach ($query->result() as $row)
            {
               echo $row->title;
               echo $row->name;
               echo $row->body;
            }
        //return $this->db->get('men');
    }
}
