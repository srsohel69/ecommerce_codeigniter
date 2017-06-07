<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowItem extends CI_Controller{
    
     public function __construct(){
	parent::__construct();
	$this->load->database(); 
        $this->load->library('session');
        $this->load->helper(array('form'));
        $this->load->library('parser');
	$this->load->model('item_model');
    }
    
    public function catagoryShow(){
        $catagory = $this->input->get('cata');
        //echo $catagory." selected ";
        $this->load->model('item_model');
        $data['cats']= $this->item_model->get($catagory);
        $this->parser->parse('view_showItem',$data);
        
    }
    
    public function catagoryDelete($pID ="0" ){
        
        $this->load->library('session');       
        $catagory="";
        
        if($pID=="0"){
            
            $catagory = $this->input->get('cata');
            $newdata = array(
                   'tableName' => $catagory
               );

            $this->session->set_userdata($newdata);
            
            $this->load->model('item_model');
            $data['cats']= $this->item_model->get($catagory);
            $this->parser->parse('view_deleteItem',$data);
        }
        else {
            
            if(!$this->input->post('buttonSubmit')){

                $this->load->view('view_deleteConfirmation');
            }
            else{
                
                $this->load->model('item_model');
                $this->item_model->delete($this->session->userdata('tableName'),$pID);
                redirect('http://localhost/atp3project/adminPanel/deleteItem');
            }            
        }

    }
    
    public function catagoryUpdate($pID="0"){
        $this->load->library('session');       
        $catagory="";
        
        if($pID=="0"){
            
            $catagory = $this->input->get('cata');
            $newdata = array(
                   'tableName' => $catagory
               );

            $this->session->set_userdata($newdata);
            
            $this->load->model('item_model');
            $data['cats']= $this->item_model->get($catagory);
            $this->parser->parse('view_updateItemSelect',$data);
        }
        else{
            if(!$this->input->post('buttonSubmit')){
                $data['message']='';
                $this->parser->parse('view_updatePrice',$data);
            }
            else{   
                if(!$this->form_validation->run('updatePrice'))
                 {                     
                    $data['message'] = validation_errors();
                    $this->parser->parse('view_updatePrice',$data); 
                 }
                 else{
                    $price = $this->input->post('UpdatePriceText');
                    $this->load->model('item_model');
                    $this->item_model->update($this->session->userdata('tableName'),$pID,$price);
                    redirect('http://localhost/atp3project/adminPanel/showItem');
                 }
            }
        }
    }
    
    public function catagoryQuantiUpdate($pId){
        if(!$this->input->post('buttonSubmit')){

                $data['message'] = '';
                $this->parser->parse('view_updateQuantity',$data); 
            }
            else{   
                if(!$this->form_validation->run('updateQuan'))
                 {                     
                    $data['message'] = validation_errors();
                    $this->parser->parse('view_updateQuantity',$data); 
                 }
                 else{
                    $quan = $this->input->post('UpdateQuanText');
                    $this->load->model('item_model');
                    $this->item_model->updateQuan($this->session->userdata('tableName'),$pId,$quan);
                    redirect('http://localhost/atp3project/adminPanel/showItem');
                 }
            }
    }
}