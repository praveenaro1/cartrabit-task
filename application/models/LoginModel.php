<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function isValidUser($data){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username',$data['username']);
        $this->db->where('password',base64_encode($data['password']));
        $this->db->where('delete_status',0);
        $this->db->where('active_status',1);
        $user = $this->db->get()->row();
        return $user;
    }

    public function setLoginStatus($user_id,$process){
        $this->db->where('id',$user_id);
        $this->db->update('users',array('login_status'=>$process==true ? 1 : 0));
    }

    public function isValidCustomer($data)
    {
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);
        $this->db->where('delete_status',0);
        $this->db->where('active_status',1);
        $user = $this->db->get()->row();
        return $user;
    }
}