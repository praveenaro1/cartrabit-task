<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontModel extends CI_Model
{   
    public function saveInformation($table_name,$data)
    {
        $this->db->insert($table_name,$data);
        return $this->db->insert_id();
    }
    public function isValidFrontUser($data){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$data['name']);
        $this->db->where('password',$data['password']);
        $this->db->where('delete_status',0);
        $this->db->where('active_status',1);
        $user = $this->db->get()->row();
        // echo $this->db->last_query();exit;
        return $user;
    }



    public function getAllproduct()
    {
        $this->db->select('*');
        $this->db->from('product');        
        $this->db->where('delete_status',0);          
        $this->db->order_by('id','DESC');
        $product = $this->db->get()->result();
        return $product;
    }
    public function getPost($id)
    {
        $this->db->select('*');
        $this->db->from('product');        
        $this->db->where('id',$id);
        $product = $this->db->get()->row();
        return $product;
    }
    public function updateInformation($table_name,$datas,$update_where)
    {
        foreach ($update_where as $key => $value) {
            $this->db->where($key,$value);    
        }
        $this->db->update($table_name,$datas);
        // echo $this->db->last_query(); 
    }

    public function getAcceptedusers($id)
    {
        $this->db->select('*');
        $this->db->from('users');        
        $this->db->where('id',$id);
        $product = $this->db->get()->row();
        return $product;
    }
}  