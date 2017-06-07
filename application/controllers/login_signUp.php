<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_signUp extends CI_Controller {
    
    public function __construct(){
            parent::__construct();
            $this->load->database();    
            $this->load->dbforge();
            $this->load->library('parser');
    }

    public function index(){          
    }
    public function logIn()
    {
        $this->load->library('session');
        $checkLogin = $this->session->userdata('logged_in');
        
        if($checkLogin==TRUE){
            echo "you already logged in";
        }
        else{                  
            $data['message']=""; 
            //$this->load->view('view_login',$data);    
            $this->parser->parse('view_login',$data);    
        }        
    }
    public function check(){
            
        if($this->input->post('submit')){
           // echo"pressed";
            if(!$this->form_validation->run('login'))
                 {                     
                    $data['message'] = validation_errors();
                    $this->parser->parse('view_login',$data); 
                 }
             else{
                 $username = $this->input->post('usernameText');
                 $pass = $this->input->post('passwordText');

                 $this->load->model('login_model');
                 $check = $this->login_model->loginCheck($username,$pass);
                 if($check == true){
                     //echo "Login Successfully";
                     $cart = array();
                     $this->load->library('session');                    
                     $newdata = array(
                        'userId'  => $username,
                        'cartCount'  => 0,
                        'logged_in' => TRUE
                     );
                    $this->session->set_userdata($newdata);
                    
                    if($username==="admin"){
                        redirect('http://localhost/atp3project/adminPanel/index','refresh');
                    }
                    else{
                        $this->load->model('cart_model');
                        $this->cart_model->createCart($username);
                        redirect('http://localhost/atp3project/home','refresh');
                    }                
                 }
                 else {

                     $data['message'] ="Login Failed";
                    $this->parser->parse('view_login',$data);
                 }
            }    
         } 
    }
    
    public function signUp()
    {   
        $this->load->library('session');
        $checkLogin = $this->session->userdata('logged_in');
        
        if($checkLogin==TRUE){
            $this->load->view('view_loginERROR');
        }
        else{
            $data['message']="";
            $this->parser->parse('view_signUP',$data);
        }

    }
    
    public function CheckSign(){
         if($this->input->post('submit')){
             
            if(!$this->form_validation->run('signup')){
                
                $data['message'] = validation_errors();               
                $this->parser->parse('view_signUP',$data);
            }
            else{
                
                $name = $this->input->post('nameText');
                $id = $this->input->post('UserIDText');
                $email = $this->input->post('EmailText');
                $pass = $this->input->post('PassText');
                $repass = $this->input->post('RePassText');
                $mobile = $this->input->post('MobileText');
                $gen = $this->input->post('gender');
                $gender='';
                //echo $gender;
                if($gen=='m'){$gender = 'Male';}
                else if($gen=='f'){$gender = 'Female';}
                else {$gender = "Others";}
                
                if($pass===$repass){
                    $this->load->model('userShopingInfo_model');
                    $this->userShopingInfo_model->createUsershoppingTable($id);
                    
                    $this->load->model('signUP_model');
                    $check =$this->signUP_model->insert($name,$id,$email,$pass,$mobile,$gender);
                                       
                    if($check==true){
                        redirect('http://localhost/atp3project/Login_signUp/logIn','refresh');
                    }
                    else{
                        $data['message'] = "Registration is failed";
                        $this->load->view('view_signUP',$data);
                    }
                }
                else{
                    $data['message'] = "Password is not matched ";
                    $this->parser->parse('view_signUP',$data);
                }
            }
             
         }
    }
      
    
    public function logOut(){
        
        $this->load->library('session');
        $userid = $this->session->userdata('userId');
        $checkLogin = $this->session->userdata('logged_in');
        
        if($checkLogin==TRUE){
            $this->session->sess_destroy();
            $this->load->model('cart_model');
            $this->cart_model->dropCartTable($userid);
            redirect('http://localhost/atp3project/Login_signUp/logIn','refresh');
        }
        else {
           $this->load->view('view_loginERROR');
        }
        
    }
    
    public function myProfile(){
        
        $this->load->library('session');
        $checkLogin = $this->session->userdata('logged_in');

        if($checkLogin==TRUE){
            $userid = $this->session->userdata('userId');
        
            $this->load->model('myProfile_model');
            $data['info']= $this->myProfile_model->select($userid);
            $this->parser->parse('view_Myprofile',$data);
        }
        else {
            $this->load->view('view_loginERROR');
        }
    }
    
    public function editProfile(){
        $this->load->library('session');
        $checkLogin = $this->session->userdata('logged_in');

        if($checkLogin==TRUE){
            $place = $this->input->get('place');
            if($place=='User_Name'){
                $userid = $this->session->userdata('userId');
                
                if($this->input->post('ChangeName')){
                    
                     if(!$this->form_validation->run('changeName')){
                         
                        $data['error']= validation_errors(); 
                        $this->parser->parse('view_changeName',$data);                       
                     }
                     else{
                         $newname = $this->input->post('ChangeNameText');
                         
                         $this->load->model('updateUserInfo_model');
                         $this->updateUserInfo_model->updateInfo('User_Name',$newname,$userid);
                         redirect('http://localhost/atp3project/home','refresh');
                     }
                }
                else{
                    $data['error']='';
                    $this->parser->parse('view_changeName',$data);
                }               
            }
            else if($place=='User_Mobile'){
                //ChangeMobileText
                $userid = $this->session->userdata('userId');
                
                if($this->input->post('Change')){
                    
                     if(!$this->form_validation->run('changeMobile')){
                         
                        $data['error']= validation_errors(); 
                        $this->parser->parse('view_changeMobile',$data);                       
                     }
                     else{
                         $new = $this->input->post('ChangeMobileText');
                         
                         $this->load->model('updateUserInfo_model');
                         $this->updateUserInfo_model->updateInfo('User_Mobile',$new,$userid);
                         redirect('http://localhost/atp3project/home','refresh');
                     }
                }
                else{
                    $data['error']='';
                    $this->parser->parse('view_changeMobile',$data);
                }  
            }

        }
        else{
            $this->load->view('view_loginERROR');
        }
    }
    
}