<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function autocomplete()
    {
        $search_data = $this->input->post('search_data');
        $query = $this->Search_model->get_autocomplete($search_data);

        foreach ($query->result() as $row):
            echo "<li><a href='" . base_url('home/'.$row->P_id) . "'></a></li>";
        endforeach;
    }
    
    public function doSearch(){
               
        $s = $this->input->post('search');
        
        $this->load->model('search_model');
        $data['searchMen']=$this->search_model->get_autocomplete($s);
        
         /*foreach($data as $d=> $searchMen){
            foreach ($searchMen as $s) {                   
                $sc = $s['P_catagory'];
                $sb = $s['P_brand'];
                $sp = $s['P_price'];
                echo $sc;
            }
        }*/
        /*$this->load->library('parser');
        $this->parser->parse('view_search',$data);*/
    }
}