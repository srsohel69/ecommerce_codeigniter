
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UpdateUserInfo_model extends CI_Model{
    public function updateInfo($column,$value,$id){
        $data = array(
            $column => $value
        );
        $this->db->where('User_id',$id);
        $this->db->update('user_information', $data);
    }
}