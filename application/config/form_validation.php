<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array (
    'login' => array (
        array(
                'field' => 'usernameText',
                'label' => 'Name',
                'rules' => 'required'
             ),
        array(
                'field' => 'passwordText',
                'label' => 'password',
                'rules' => 'required'
             )
        ),
    'addItem' => array (
        array(
                'field' => 'catagoryRadio',
                'label' => 'Catagory',
                'rules' => 'required'
             ),
        array(
                'field' => 'pIdText',
                'label' => 'ID',
                'rules' => 'required|min_length[5]|max_length[10]'
             ),    
        array(
                'field' => 'pCatText',
                'label' => 'Section',
                'rules' => 'required'
             ),
        array(
                'field' => 'pBrandText',
                'label' => 'Brand',
                'rules' => 'required'
             ),
        array(
                'field' => 'pPriceText',
                'label' => 'Price',
                'rules' => 'required|integer'
             ),
        array(
                'field' => 'pQuantiText',
                'label' => 'Quantity',
                'rules' => 'required|integer'
             )
	),
    'signup' => array(
        
        array(
                'field' => 'nameText',
                'label' => 'Name',
                'rules' => 'required'
             ),
        array(
                'field' => 'UserIDText',
                'label' => 'Id',
                'rules' => 'required|is_unique[user_information.User_id]'
             ),
        array(
                'field' => 'EmailText',
                'label' => 'Email',
                'rules' => 'required|valid_emails|is_unique[user_information.User_email]'
             ),
        array(
                'field' => 'PassText',
                'label' => 'Password',
                'rules' => 'required'
             ),
        array(
                'field' => 'RePassText',
                'label' => 'Re_Password',
                'rules' => 'required'
             ),
        array(
                'field' => 'MobileText',
                'label' => 'Mobile',
                'rules' => 'required|integer|exact_length[11]'
             )
        ),
    'ProductQuantity' => array (
        array(
                'field' => 'quantityText',
                'label' => 'Quantity',
                'rules' => 'required|integer|exact_length[1]'
             )
  
        ),
    'changeName' => array(
        array(
            'field' => 'ChangeNameText',
            'label' => 'Name',
            'rules' => 'required'
        )
    ),
    'changeMobile' => array(
        array(
            'field' => 'ChangeMobileText',
            'label' => 'Mobile Number',
            'rules' => 'required|integer|exact_length[11]'
        )
    ),
    'updateQuan' => array(
        array(
            'field' => 'UpdateQuanText',
            'label' => 'Quantity',
            'rules' => 'required|integer'
        )
    ),
    'updatePrice' => array(
        array(
            'field' => 'UpdatePriceText',
            'label' => 'Price',
            'rules' => 'required|integer'
        )
    )
    
   
);
