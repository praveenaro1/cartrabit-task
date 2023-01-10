<?php

function getLoggedUser()
{
  $ci = & get_instance();
   $ci->load->database();

   $ci->db->select('*');
   $ci->db->from('users');                            
   $ci->db->where('id',$ci->session->userdata('USER')['id']);
   $ci->db->where('delete_status',0);
   $row = $ci->db->get()->row();
   return $row;
}
function getAllService()
{
  $ci = & get_instance();
   $ci->load->database();

   $ci->db->select('*');
   $ci->db->from('service'); 
   $ci->db->where('delete_status',0);
   $result = $ci->db->get()->result();
   return $result;
}

function getAllusers()
{
  $ci = & get_instance();
   $ci->load->database();

   $ci->db->select('*');
   $ci->db->from('users');    
   $ci->db->order_by('id','DESC');
   $result = $ci->db->get()->result();
   return $result;
}
function getusers($id)
{
  $ci = & get_instance();
   $ci->load->database();

   $ci->db->select('*');
   $ci->db->from('users'); 
   $ci->db->where('id',$id);   
   $ci->db->order_by('id','DESC');
   $result = $ci->db->get()->result();
   return $result;
}
function getAllacceptedusers()
{
  $ci = & get_instance();
   $ci->load->database();

   $ci->db->select('*');
   $ci->db->from('users');
   $ci->db->where('active_status',1);
   $ci->db->group_start();
   $ci->db->or_where('complete_status',1);
   $ci->db->or_where('complete_status',0);
   $ci->db->group_end();
   $ci->db->order_by('id','DESC');
   $result = $ci->db->get()->result();
   return $result;
}
function getAcceptedusers($bike_id)
{
  $ci = & get_instance();
   $ci->load->database();

   $ci->db->select('*');
   $ci->db->from('users');
   $ci->db->where('id',$bike_id);
   $result = $ci->db->get()->row()();
   return $result;
}

//admin
function getSettings()
{
  $ci = & get_instance();
  $ci->load->database();

  $ci->db->select('*');
  $ci->db->from('settings');                            
  $settings = $ci->db->get()->row();
  return $settings;
}
function isValidRequest($needed_type, $method_type)
{
    return ($needed_type == $method_type) ? true : false;
}
function getToast($msg,$purpose)
{
  return '<div id="toast-div">
      <input type="hidden" value="'.$msg.'" id="toast_message" />
      <input type="hidden" value="'.$purpose.'" id="toast_type" />      
  </div>';
}
function isValidAdminSession(){
  $ci = & get_instance();
  if(!$ci->session->userdata('SHOPPING_ADMIN_SESSION') && (!$ci->session->userdata('user_id') && $ci->session->userdata('user_id')=="")){
    return false;
  }else{
    return true;
  }
}
function displyFlashMessage($message_name){
  $ci = & get_instance();
  echo $ci->session->flashdata($message_name);
  // $ci->session->unset_flashdata($message_name);
}
function getAdminProfile($id)
{   
    $ci = & get_instance();
    $ci->db->select('*');
    $ci->db->from('admin');        
    $ci->db->where('id',$id);
    $ci->db->where('delete_status',0);
    // $this->db->where('delete_status',0);
    $user = $ci->db->get()->row();
    return $user;
}
function getLoggerID(){
  $ci = & get_instance();
  return $ci->session->userdata('SHOPPING_ADMIN_SESSION')['user_id'];
}