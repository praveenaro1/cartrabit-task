<?php 
defined ('BASEPATH') or exit('No direct script access allowed');

class FrontController extends MY_Controller{

    function __construct(){
        parent::__construct();

        $this->load->model('FrontModel');       
    }

    function checksession(){
        if($this->session->userdata('USER')==''){
            redirect('login');
        }
    }
    public function index(){
        $this->load->view ('pages/front/login', true);
    }
    public function home(){
        $this->checksession();
        $this->load->view ('pages/front/home', true);
        
    }
    public function saveRegister()
    {
        $inputs= $this->input->post();
        $post['post'] =$this->FrontModel->saveInformation('users',$inputs);
        require APPPATH.'third_party/PHPMailer/PHPMailerAutoload.php';
         require APPPATH.'third_party/PHPMailer/class.smtp.php';
         $mail = new PHPMailer;

         // $mail->SMTPDebug = 3;                                             // Enable verbose debug output
         $mail->isSMTP();                                                 // Set mailer to use SMTP
         $mail->Host = 'mail.cartrabit.org';                                 // Specify main and backup SMTP servers
         $mail->SMTPAuth = true;                                        // Enable SMTP authentication
         $mail->Username = 'info@cartrabit.org';               // SMTP username
         $mail->Password = 'cartrabit@2023';                              // SMTP password
         $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
         $mail->Port = 465;                                         // TCP port to connect to

         $mail->From = 'info@cartrabit.org';
         $mail->FromName = 'Booking Register';
         $mail->addAddress('info@cartrabit.org');                         // Add a recipient
         // $mail->addAddress('ellen@example.com');                              // Name is optional
         // $mail->addReplyTo('info@example.com', 'Information');
         // $mail->addCC('cc@example.com');
         // $mail->addBCC('bcc@example.com');
         $mail->WordWrap = 50;                                                // Set word wrap to 50 characters
         // $mail->addAttachment('/var/tmp/file.tar.gz');                    // Add attachments
         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');              // Optional name
         $mail->isHTML(true);                                              // Set email format to HTML
         $mail->Subject = 'New Service Booking';
         $mail->Body    = $this->load->view('email/bookingregister' , $post, true );


         if(!$mail->send()) {
            // echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          else {            
            $this->session->set_flashdata('alert', getAlert('success', 'Your registered submited successfully'));
            redirect('home');
          } 
            
            redirect('home');
    }

    
    public function isValidUser()
    {
            $inputs = $this->input->post();                                    
            // print_r($inputs);exit;
            if ((isset($inputs['name']) && $inputs['name'] != "") && (isset($inputs['password']) && $inputs['password'] != "")) {                
                $user = $this->FrontModel->isValidFrontUser($inputs);
                if (!empty($user)) {
                    // print_r($user);exit;
                    $this->createUserSession($user);            
                    $name=strtoupper($user->username);
                    redirect('home');                                       
                }
            }else{
                redirect('login');
            }            
        
    }

    public function createUserSession($user){

        $userSession = array(
            'id'=>$user->id,
            'name'=>strtoupper($user->name),
            'email'=>$user->email,
            'phone'=>$user->phone,            
        );
        $this->session->set_userdata('USER',$userSession);
    }

    public function destroyUser(){
        $this->session->unset_userdata('USER');
    }

    public function makeUserLogout(){
        $this->destroyUser();        
        redirect('login');
    }


    
}