<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminPanel extends CI_Controller{
    
    public function __construct(){
	parent::__construct();
	$this->load->database(); 
        $this->load->library('session');
        $this->load->helper(array('form'));
        $this->load->library('parser');
	$this->load->model('item_model');
    }
    
    public function index(){
        
        $this->load->view('view_adminPanel');
    }
    
    public function showItem(){
        
        $this->load->view('view_ItemChoosingList');
    }

    public function addItem(){
        
        $this->load->helper(array('form'));       
        
         if($this->input->post('add')){
             
             if(!$this->form_validation->run('addItem'))
                    {
			$data['message'] = validation_errors();
                        $this->parser->parse('view_addItem', $data);
                    }
            else{
                //echo "added";
                 $catagory = $this->input->post('catagoryRadio');
                 $code = $this->input->post('pIdText');
                 $section = $this->input->post('pCatText');
                 $brand = $this->input->post('pBrandText');
                 $price = $this->input->post('pPriceText');
                 $quantity = $this->input->post('pQuantiText');
                 $picture = $this->input->post('pPictureText');
                
                $this->load->model('item_model');                
                $data['$message']=$this->item_model->insert($catagory,$code,$section,$brand,$price,$quantity,$picture);
                
                //echo $data['$message'];
                $this->load->view('view_insert',$data);
            }
         }
         else{
            $data['message']="";
            $this->parser->parse('view_addItem',$data);
         }
    }
    
    public function deleteItem(){
       // echo "delete";
        $this->load->view('view_ItemChoosingDelete');
    }
    
    public function updateItem(){
        //echo "update";       
         $this->load->view('view_itemChoosingUpdate');
    }
    
    public function sellingProducts(){
        $this->load->model('sell_model');
        $data['info']=$this->sell_model->getInfo();
        $this->parser->parse('view_showSell',$data);
    }


    public function showReport(){
        
        $this->load->model('buy_model');
        $totalIncome= $this->buy_model->get_admin_income();
        
        $this->load->model('sell_model');
        $highestSell = $this->sell_model->maxQuantity();

        $data['proInfo']= $this->sell_model->getProduct($highestSell);        
        $data['tIncome']=$totalIncome;
        $data['highSell'] = $highestSell;

        $this->parser->parse('view_income',$data);
    }
    
    public function deleteUser(){
        $this->load->model('showUser_model');
        $data['UserInfo']=$this->showUser_model->getUser();
        
        $this->parser->parse('view_users',$data);
    }
    
    public function userDeleteConfirmation($uId){
        $this->load->library('session');                    
        $newdata = array(
           'deleteUserId'  => $uId
        );
        $this->session->set_userdata($newdata);
        
        if($this->input->post('buttonSubmit')){
            
            $DeUserId = $this->session->userdata('deleteUserId');
            $this->load->model('showUser_model');
            $this->showUser_model->deleteUser($DeUserId);
            redirect('http://localhost/atp3project/adminPanel','refresh');
        }
        else{
            $this->load->view('view_deleteUserConfirmation');
        }
        
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('http://localhost/atp3project/Login_signUp/logOut');
    }
        
}