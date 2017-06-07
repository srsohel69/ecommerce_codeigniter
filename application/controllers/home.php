<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
            $this->load->library('session');
            $this->load->library('parser');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                $this->load->model('itemPic_model');
                $data['Men_picture']= $this->itemPic_model->getPic('men');
                $data['Women_picture']= $this->itemPic_model->getPic('women');
                $data['kid_picture']= $this->itemPic_model->getPic('kids');
                $data['Com_picture']= $this->itemPic_model->getPic('computer');
                $data['CAcc_picture']= $this->itemPic_model->getPic('computer_accessory');
                $data['Mobile_picture']= $this->itemPic_model->getPic('mobile');
                $data['Elec_picture']= $this->itemPic_model->getPic('electronics');
                $data['Other_picture']= $this->itemPic_model->getPic('others');               
                
                $this->parser->parse('view_LogInhome',$data); 
            }
            else{
                $this->load->model('itemPic_model');
                $data['Men_picture']= $this->itemPic_model->getPic('men');
                $data['Women_picture']= $this->itemPic_model->getPic('women');
                $data['kid_picture']= $this->itemPic_model->getPic('kids');
                $data['Com_picture']= $this->itemPic_model->getPic('computer');
                $data['CAcc_picture']= $this->itemPic_model->getPic('computer_accessory');
                $data['Mobile_picture']= $this->itemPic_model->getPic('mobile');
                $data['Elec_picture']= $this->itemPic_model->getPic('electronics');
                $data['Other_picture']= $this->itemPic_model->getPic('others');
                $this->parser->parse('view_LogOuthome',$data);   
            }
                  
	}
        
        public function men(){
            $this->load->library('session');
            $this->load->library('parser');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('men');
                //$this->load->view('view_menLogIn',$data); 
                $this->parser->parse('view_menLogIn',$data);
            }
            else{
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('men');
                //$this->load->view('view_menLogOut',$data); 
                $this->parser->parse('view_menLogOut',$data);
            }
        }
        
        public function women(){
            $this->load->library('session');
            $this->load->library('parser');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                            
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('women');
                //$this->load->view('view_womenLogIn',$data);
                $this->parser->parse('view_womenLogIn',$data);
            }
            else{
                //view_womenLogOut
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('women');
               //$this->load->view('view_womenLogOut',$data);
                $this->parser->parse('view_womenLogOut',$data);
            }

        }
        
        public function kids(){
            
            $this->load->library('session');
            $this->load->library('parser');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('kids');
                $this->parser->parse('view_kids',$data);    
            }
            else{
                //view_kidsLogOut
                 $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('kids');
                $this->parser->parse('view_kidsLogOut',$data);   
            }
        }
        
        public function computer(){
            $this->load->library('session');
            $this->load->library('parser');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('computer');
                $this->parser->parse('view_computer',$data);
            }
            else{
                 $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('computer');
                $this->parser->parse('view_computerLogOut',$data);
            }
            
        }
        
        public function cAccess(){
            $this->load->library('session');
            $this->load->library('parser');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('computer_accessory');
                $this->parser->parse('view_cAccess',$data);
            }
            else{
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('computer_accessory');
                $this->parser->parse('view_cAccessLogOut',$data);
            }
        }
        
        public function mobile(){
            $this->load->library('session');
            $this->load->library('parser');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('mobile');
                $this->parser->parse('view_mobile',$data);
            }
            else{
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('mobile');
                $this->parser->parse('view_mobileLogOut',$data);
            }
        }
        
        public function electronics(){
            $this->load->library('session');
            $this->load->library('parser');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('electronics');
                 $this->parser->parse('view_electro',$data);
            }
            else{
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('electronics');
                 $this->parser->parse('view_electroLogOut',$data);
            }
            
        }
        
        public function others(){
            $this->load->library('session');
            $this->load->library('parser');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('others');
                $this->parser->parse('view_others',$data);
            }
            else{
                $this->load->model('itemPic_model');
                $data['Items_pictureS']= $this->itemPic_model->getAllPic('others');
                $this->parser->parse('view_othersLogOut',$data);
            }
        }
}