<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_detail extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->database(); 
        $this->load->library('session');
        $this->load->helper(array('form'));
        $this->load->library('parser');
    }
    
    public function GetshowDetails(){
        
        $checkLogin = $this->session->userdata('logged_in');
        if($checkLogin==TRUE){                   
            $pID = $this->input->get('id');
            $catagory = $this->input->get('catagory');

            $this->load->model('itemDetail_model');
            $data['details']= $this->itemDetail_model->getDetails($catagory,$pID);

            $newdata = array(
                'catagory'  => $catagory,
                'productID'  => $pID
            );
            $this->session->set_userdata($newdata);

            $this->parser->parse('view_productDetail',$data);
        }
        else{                   
            $pID = $this->input->get('id');
            $catagory = $this->input->get('catagory');

            $this->load->model('itemDetail_model');
            $data['details']= $this->itemDetail_model->getDetails($catagory,$pID);

            $newdata = array(
                'catagory'  => $catagory,
                'productID'  => $pID
            );
            $this->session->set_userdata($newdata);

            $this->parser->parse('view_productDetailLogOut',$data);
        }

    }
    
    public function showDetails(){
        $checkLogin = $this->session->userdata('logged_in');
        if($checkLogin==TRUE){
                 if($this->input->post('show1')){
                    $this->load->model('itemPic_model');
                    $data['details']= $this->itemPic_model->getPic('men');
                    /*foreach ($data as $d){
                        echo $d['details']['P_id'];
                    }*/
                   foreach ($data as $d => $catagory) {
                       foreach ($catagory as $cata) {                          
                           $newdata = array(
                               'catagory'  => 'men',
                               'productID'  => $cata['P_id']
                           );
                           $this->session->set_userdata($newdata);   
                       }
                   }           

                   $this->parser->parse('view_productDetail',$data);
                }
                else if($this->input->post('show2')){
                    $this->load->model('itemPic_model');
                    $data['details']= $this->itemPic_model->getPic('women');
                    foreach ($data as $d => $catagory) {
                       foreach ($catagory as $cata) {                   
                           //echo " person located {$cata['P_id']}<br />";        
                           $newdata = array(
                               'catagory'  => 'women',
                               'productID'  => $cata['P_id']
                           );
                           $this->session->set_userdata($newdata);   
                       }
                   }           
                   $this->parser->parse('view_productDetail',$data);
                }
                else if($this->input->post('show3')){
                    $this->load->model('itemPic_model');
                    $data['details']= $this->itemPic_model->getPic('kids');
                    foreach ($data as $d => $catagory) {
                       foreach ($catagory as $cata) {                   
                           //echo " person located {$cata['P_id']}<br />";        
                           $newdata = array(
                               'catagory'  => 'kids',
                               'productID'  => $cata['P_id']
                           );
                           $this->session->set_userdata($newdata);   
                       }
                   }
                    $this->parser->parse('view_productDetail',$data);
                }
                else if($this->input->post('show4')){
                    $this->load->model('itemPic_model');
                    $data['details']= $this->itemPic_model->getPic('computer');
                    foreach ($data as $d => $catagory) {
                       foreach ($catagory as $cata) {                   
                           //echo " person located {$cata['P_id']}<br />";        
                           $newdata = array(
                               'catagory'  => 'computer',
                               'productID'  => $cata['P_id']
                           );
                           $this->session->set_userdata($newdata);   
                       }
                   }
                    $this->parser->parse('view_productDetail',$data);
                }
                else if($this->input->post('show5')){
                    $this->load->model('itemPic_model');
                    $data['details']= $this->itemPic_model->getPic('computer_accessory');
                    foreach ($data as $d => $catagory) {
                       foreach ($catagory as $cata) {                   
                           //echo " person located {$cata['P_id']}<br />";        
                           $newdata = array(
                               'catagory'  => 'computer_accessory',
                               'productID'  => $cata['P_id']
                           );
                           $this->session->set_userdata($newdata);   
                       }
                   }
                    $this->parser->parse('view_productDetail',$data);
                }
                else if($this->input->post('show6')){
                    $this->load->model('itemPic_model');
                    $data['details']= $this->itemPic_model->getPic('mobile');
                    foreach ($data as $d => $catagory) {
                       foreach ($catagory as $cata) {                   
                           //echo " person located {$cata['P_id']}<br />";        
                           $newdata = array(
                               'catagory'  => 'mobile',
                               'productID'  => $cata['P_id']
                           );
                           $this->session->set_userdata($newdata);   
                       }
                   }
                    $this->parser->parse('view_productDetail',$data);
                }
                else if($this->input->post('show7')){
                    $this->load->model('itemPic_model');
                    $data['details']= $this->itemPic_model->getPic('electronics');
                    foreach ($data as $d => $catagory) {
                       foreach ($catagory as $cata) {                   
                           //echo " person located {$cata['P_id']}<br />";        
                           $newdata = array(
                               'catagory'  => 'electronics',
                               'productID'  => $cata['P_id']
                           );
                           $this->session->set_userdata($newdata);   
                       }
                   }
                    $this->parser->parse('view_productDetail',$data);
                }
                else if($this->input->post('show8')){
                    $this->load->model('itemPic_model');
                    $data['details']= $this->itemPic_model->getPic('others');
                    foreach ($data as $d => $catagory) {
                       foreach ($catagory as $cata) {                   
                           //echo " person located {$cata['P_id']}<br />";        
                           $newdata = array(
                               'catagory'  => 'others',
                               'productID'  => $cata['P_id']
                           );
                           $this->session->set_userdata($newdata);   
                       }
                   }
                    $this->parser->parse('view_productDetail',$data);
                }
        }
        else{
                 if($this->input->post('show1')){
             $this->load->model('itemPic_model');
             $data['details']= $this->itemPic_model->getPic('men');
             /*foreach ($data as $d){
                 echo $d['details']['P_id'];
             }*/
            foreach ($data as $d => $catagory) {
                foreach ($catagory as $cata) {                          
                    $newdata = array(
                        'catagory'  => 'men',
                        'productID'  => $cata['P_id']
                    );
                    $this->session->set_userdata($newdata);   
                }
            }           
            
            $this->parser->parse('view_productDetailLogOut',$data);
         }
         else if($this->input->post('show2')){
             $this->load->model('itemPic_model');
             $data['details']= $this->itemPic_model->getPic('women');
             foreach ($data as $d => $catagory) {
                foreach ($catagory as $cata) {                   
                    //echo " person located {$cata['P_id']}<br />";        
                    $newdata = array(
                        'catagory'  => 'women',
                        'productID'  => $cata['P_id']
                    );
                    $this->session->set_userdata($newdata);   
                }
            }           
            $this->parser->parse('view_productDetailLogOut',$data);
         }
         else if($this->input->post('show3')){
             $this->load->model('itemPic_model');
             $data['details']= $this->itemPic_model->getPic('kids');
             foreach ($data as $d => $catagory) {
                foreach ($catagory as $cata) {                   
                    //echo " person located {$cata['P_id']}<br />";        
                    $newdata = array(
                        'catagory'  => 'kids',
                        'productID'  => $cata['P_id']
                    );
                    $this->session->set_userdata($newdata);   
                }
            }
             $this->parser->parse('view_productDetailLogOut',$data);
         }
         else if($this->input->post('show4')){
             $this->load->model('itemPic_model');
             $data['details']= $this->itemPic_model->getPic('computer');
             foreach ($data as $d => $catagory) {
                foreach ($catagory as $cata) {                   
                    //echo " person located {$cata['P_id']}<br />";        
                    $newdata = array(
                        'catagory'  => 'computer',
                        'productID'  => $cata['P_id']
                    );
                    $this->session->set_userdata($newdata);   
                }
            }
             $this->parser->parse('view_productDetailLogOut',$data);
         }
         else if($this->input->post('show5')){
             $this->load->model('itemPic_model');
             $data['details']= $this->itemPic_model->getPic('computer_accessory');
             foreach ($data as $d => $catagory) {
                foreach ($catagory as $cata) {                   
                    //echo " person located {$cata['P_id']}<br />";        
                    $newdata = array(
                        'catagory'  => 'computer_accessory',
                        'productID'  => $cata['P_id']
                    );
                    $this->session->set_userdata($newdata);   
                }
            }
            $this->parser->parse('view_productDetailLogOut',$data);
         }
         else if($this->input->post('show6')){
             $this->load->model('itemPic_model');
             $data['details']= $this->itemPic_model->getPic('mobile');
             foreach ($data as $d => $catagory) {
                foreach ($catagory as $cata) {                   
                    //echo " person located {$cata['P_id']}<br />";        
                    $newdata = array(
                        'catagory'  => 'mobile',
                        'productID'  => $cata['P_id']
                    );
                    $this->session->set_userdata($newdata);   
                }
            }
            $this->parser->parse('view_productDetailLogOut',$data);
         }
         else if($this->input->post('show7')){
             $this->load->model('itemPic_model');
             $data['details']= $this->itemPic_model->getPic('electronics');
             foreach ($data as $d => $catagory) {
                foreach ($catagory as $cata) {                   
                    //echo " person located {$cata['P_id']}<br />";        
                    $newdata = array(
                        'catagory'  => 'electronics',
                        'productID'  => $cata['P_id']
                    );
                    $this->session->set_userdata($newdata);   
                }
            }
            $this->parser->parse('view_productDetailLogOut',$data);
         }
         else if($this->input->post('show8')){
             $this->load->model('itemPic_model');
             $data['details']= $this->itemPic_model->getPic('others');
             foreach ($data as $d => $catagory) {
                foreach ($catagory as $cata) {                   
                    //echo " person located {$cata['P_id']}<br />";        
                    $newdata = array(
                        'catagory'  => 'others',
                        'productID'  => $cata['P_id']
                    );
                    $this->session->set_userdata($newdata);   
                }
            }
            $this->parser->parse('view_productDetailLogOut',$data);
         }
        }
        
    }
}