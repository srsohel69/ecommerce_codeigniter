<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->database(); 
        $this->load->library('session');
        $this->load->helper(array('form'));
        $this->load->library('parser');
        session_start();
    }
    
    public function callingCart(){
        $data['message']='';
        
        $catagory = $this->session->userdata('catagory');
        $pId = $this->session->userdata('productID');       
        
        $this->load->model('itemDetail_model');
        $data['details']= $this->itemDetail_model->getDetails($catagory,$pId);
        $this->parser->parse('view_addingCart',$data);

    }
    

    
    public function measuring_Quantity(){
               
        if($this->input->post('Proc')){
           //echo 'ok';
            if(!$this->form_validation->run('ProductQuantity')){
                $data['message'] = validation_errors();
                $catagory = $this->session->userdata('catagory');
                $pId = $this->session->userdata('productID');       

                $this->load->model('itemDetail_model');
                $data['details']= $this->itemDetail_model->getDetails($catagory,$pId);
                $this->load->view('view_addingCart',$data);
            }
            else {
                $this->load->library('session');
                $checkLogin = $this->session->userdata('logged_in');

                if($checkLogin==TRUE){
                    $quantity = $this->input->post('quantityText');
                    $data['quantity'] = $quantity;
                    $newdata = array(
                       'quan'  => $quantity
                    );
                    $this->session->set_userdata($newdata);

                    $pId = $this->session->userdata('productID');  
                    $catagory = $this->session->userdata('catagory'); 
                    $pSection = '';
                    $pBrand = '';
                    $pPicture ='';
                    $pPrice = 0;

                    $totalprice = 0;
                    $this->load->model('itemDetail_model');
                    $da['adding_cart']=$this->itemDetail_model->getDetails($catagory,$pId);

                    foreach($da as $d=> $adding){
                        foreach ($adding as $prod) {                   
                            $pSection = $prod['P_catagory'];
                            $pBrand = $prod['P_brand'];
                            $pPicture = $prod['P_picture'];
                            $pPrice = $prod['P_price'];                           
                        }
                    }
                    
                    $totalprice = $pPrice*$quantity;
                    $oldQuantity =0;
                    $newQuantity =0;

                    $this->load->model('cart_model');
                    $userid = $this->session->userdata('userId');
                    $check = $this->cart_model->checkItem($userid,$pId,$catagory);
                                            
                    $this->cart_model->insertCart($userid,$catagory,$pId,$pSection,$pBrand,$pPicture,$pPrice,$quantity,$totalprice);
                    $data['cart']=$this->cart_model->showCart($userid);
                    $data['final_price']=$this->cart_model->totalCost($userid);

                    $this->parser->parse('view_showCart',$data);
                    
                    
                }
                else{                   
                    $this->load->view('view_loginERROR');
                }
            }
        }
    }
    
    public function showCart(){
        $this->load->library('session');
            $checkLogin = $this->session->userdata('logged_in');

            if($checkLogin==TRUE){
                $userid = $this->session->userdata('userId');
                $this->load->model('cart_model');
                $data['cart']=$this->cart_model->showCart($userid);
                $data['final_price']=$this->cart_model->totalCost($userid);
                $this->parser->parse('view_showCart',$data);
            }
            else{
                $this->load->view('view_loginERROR');
            }
    }
    
    public function confirmation(){
        $this->load->library('session');
        $checkLogin = $this->session->userdata('logged_in');
        
        if($checkLogin==TRUE){
            
            if($this->input->post('buttonSubmit')){
                $userid = $this->session->userdata('userId');
                $this->load->model('cart_model');
                $data['cart']=$this->cart_model->showCart($userid);
                
                foreach ($data as $d => $cart) {
                    foreach ($cart as $c) {   
                        $proCat = $c['Item_Section'];
                        $proSec = $c['Item_Catagory'];
                        $proID =$c['Item_ID'];
                        $proBrand = $c['Item_Brand'];
                        $proPic = $c['Item_Picture'];
                        $proPiePri = $c['Quantity'];
                        $proQuan =$c['Quantity'];
                        $proTprice =$c['total_price'];
                        
                        $date = date("Y/m/d").'::'.date("l");
                        
                        $this->load->model('userShopingInfo_model');
                        $this->userShopingInfo_model->insertBuyingItem($userid,$proCat,$proID,$proSec,$proBrand,$proPic,
                                                                        $proQuan,$proTprice,$date);
                        
                        //from here
                        $this->load->model('sell_model');
                        $checkID=$this->sell_model->checkColomn($proID,$proCat);
                        if($checkID===TRUE){
                            $this->sell_model->inserSelling_list($proID,$proCat,$proQuan);
                        }
                        else{
                            $getQuan=$this->sell_model->getQuantity($proID);
                           // echo $getQuan;
                            $newQuan=$getQuan+$proQuan;
                            $this->sell_model->updateQuantity($proID,$newQuan);  
                        }
                        //$this->sell_model->insertCart($proID,$proCat,$proQuan);
                        
                        $quan =0;
                        
                        $this->load->model('itemDetail_model');
                        $get['details']= $this->itemDetail_model->getDetails($proCat,$proID);
                        
                        foreach ($get as $g => $details) {
                            foreach ($details as $catas) {                   
                                $quan =$catas['P_quantity'];
                                $picture = $catas['P_picture'];
                            }
                        }
                        $quan = $quan-$proQuan;
                        
                        $this->load->model('buy_model');
                        $this->buy_model->updateQuantity($proCat,$proID,$quan);
                        
                        $totalIncome = $this->buy_model->get_admin_income();
                        
                        $this->load->model('cart_model');
                        $gets['final_price']=$this->cart_model->totalCost($userid);
                        
                        foreach ($gets as $g => $final_price) {
                            foreach ($final_price as $f) {                   
                                $total_INCOME =$f['Total_PRICE'];
                            }
                        }
                        $totalIncome = $totalIncome + $total_INCOME;
                        
                        $this->load->model('buy_model');
                        $this->buy_model->admin_income($totalIncome);
                        
                        
                    }
                }
                $this->load->model('cart_model');
                $this->cart_model->emptyTable($userid); 
                
                $this->load->view('view_final');  
            }
        }
        else{
            $this->load->view('view_loginERROR');
        }
        
    }
    
    public function buyingHistory(){
       
        $this->load->library('session');
        $checkLogin = $this->session->userdata('logged_in');
        
        if($checkLogin==TRUE){
            $userid = $this->session->userdata('userId');
            
            $this->load->model('userShopingInfo_model');
            $data['all_product']=$this->userShopingInfo_model->getInfo($userid);
            
            $total_price =0;
            
            foreach ($data as $d => $all_product){
                foreach ($all_product as $pro) {                   
                    $total_price =$total_price+$pro['total_price'];
                }
            }
            $data['final_price'] = $total_price;
            
            $this->parser->parse('view_showHistory',$data);
        }
    }
    
    public function deleteCartItem($pId){
        $userid = $this->session->userdata('userId');
        
        $this->load->model('cart_model');
        $this->cart_model->deleteCartItem($userid,$pId);
        $this->showCart();
    }
}