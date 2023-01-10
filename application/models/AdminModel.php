<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    
    public function getAllbikeList()
    {
        $this->db->select('*');
        $this->db->from('users');        
        $this->db->where('delete_status',0);
        $this->db->order_by('id','DESC');
        $bike = $this->db->get()->result();
        return $bike;
    }
    public function getAllacceptedusers()
    {
        $this->db->select('*');
        $this->db->from('users');        
        $this->db->where('active_status',0);
        $this->db->order_by('id','DESC');
        $bike = $this->db->get()->result();
        return $bike;
    }
    public function getUsers($bike_id)
    {
        $this->db->select('*');
        $this->db->from('users');                
        $this->db->where('id',$bike_id);          
        $bike = $this->db->get()->row();        
        return $bike;
    }    

    public function saveInformation($table_name,$data)
    {
        $this->db->insert($table_name,$data);
        return $this->db->insert_id();
    }     

    public function updateInformation($table_name,$update_fields,$update_where)
    {
        foreach ($update_where as $key => $value) {
            $this->db->where($key,$value);    
        }
        $this->db->update($table_name,$update_fields); 
    }


    public function getAllService()
    {
        $this->db->select('*');
        $this->db->from('service');        
        $this->db->where('delete_status',0);
        $this->db->order_by('id','DESC');
        $bus = $this->db->get()->result();
        return $bus;
    }
    public function getService($bus_id)
    {
        $this->db->select('*');
        $this->db->from('service');                
        $this->db->where('id',$bus_id);          
        $bus = $this->db->get()->row();        
        return $bus;
    }
    
}