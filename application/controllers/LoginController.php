<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index()
    {
        $this->load->view('pages/admin/login');
    }

    public function showAdminLogin()
    {
        $this->load->view('pages/admin/login');
    }

    public function isValidAdminUser()
    {
        $isValidRequest = isValidRequest('POST', $_SERVER['REQUEST_METHOD'], true);//check request type
        if ($isValidRequest) {
            $inputs = $this->input->post();                                    
            
            if ((isset($inputs['username']) && $inputs['username'] != "") && (isset($inputs['password']) && $inputs['password'] != "")) {                
                $user = $this->LoginModel->isValidUser($inputs);
                if (!empty($user)) {
                    //valid user
                    $this->createAdminUserSession($user);                    
                    $this->session->set_flashdata('toast_info',getToast("Login Successfully","success"));
                    redirect('admin/home');                                       
                } else {
                    //invalid user
                    $this->session->set_flashdata('login_msg', getAlert('danger', 'Invalid Credentials'));
                    redirect('admin');
                }
            }else{
                $this->session->set_flashdata('login_msg', getAlert('danger', 'Invalid Credentials'));
                redirect('admin');
            }
        } else {            
            $this->session->set_flashdata('login_msg', getAlert('danger', 'Invalid Request'));
            redirect('admin');
        }
    }

    private function createAdminUserSession($user){

        $shoppingAdminSession = array(
            'user_id'=>$user->id,
            'name'=>strtoupper($user->name),
            'email'=>$user->email,
            'mobile'=>$user->mobile,            
        );
        $this->session->set_userdata('SHOPPING_ADMIN_SESSION',$shoppingAdminSession);
    }

    private function destroyAdminUserSession(){
        $this->session->unset_userdata('SHOPPING_ADMIN_SESSION');
    }

    public function makeAdminLogout(){
        $this->destroyAdminUserSession();        
        redirect('admin');
    }

    public function forgotPassword(){
        $this->load->view('pages/forgot_password');
    }

    public function isValidCustomer()
    {
        $inputs = $this->input->post();
        $isValidCustomer = $this->LoginModel->isValidCustomer($inputs);
        
        if(!empty($isValidCustomer))
        {
            $this->createCustomerUserSession($isValidCustomer);
            echo '<script>';
                echo 'alert("Login Successfully");';
                echo 'window.location.href="'.base_url('').'"';
            echo '</script>';     
        }else{
             echo '<script>';
                echo 'alert("Failed to Login, Please Try Again");';
                echo 'window.location.href="'.base_url('login').'"';
            echo '</script>';   
        }
    }

    private function createCustomerUserSession($customer){
        $shoppingCustomerSession = array(
            'user_id'=>$customer->id,
            'name'=>strtoupper($customer->name),
            'email'=>$customer->email,
            'mobile'=>$customer->mobile,            
        );
        $this->session->set_userdata('SHOPPING_CUS_SESSION',$shoppingCustomerSession);

        //check for cart, if exists then add to the session
        $this->load->model('FrontHomeModel');
        $cart = $this->FrontHomeModel->getActiveCart($customer->id);

        if(!empty($cart)){
            $product_ids=$this->FrontHomeModel->getCartProductIds($cart->id);            
            
            if(!empty($product_ids)){
                $this->session->set_userdata('SHOPPING_CART_SESSION',implode(',', $product_ids));
            }else{
                $this->session->set_userdata('SHOPPING_CART_SESSION','');
            }            

        }else{
            $this->session->set_userdata('SHOPPING_CART_SESSION','');    
        }        
    }

    public function makeCustomerLogout()
    {
        $this->session->unset_userdata('SHOPPING_CUS_SESSION');
        $this->session->unset_userdata('SHOPPING_CART_SESSION');   
        echo '<script>';
            echo 'alert("Logged Out Successfully");';
            echo 'window.location.href="'.base_url('').'"';
        echo '</script>';        
    }
}
