<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends MY_Controller{

    function __construct()
    {
        parent :: __construct();

        if(!isValidAdminSession()){
            redirect('admin');
        }
        $this->load->model('AdminModel');
    }

    public function index()
    {        
        $datas ['']='';
        $datas['bikees'] =$this->AdminModel->getAllbikeList();
        $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/home',$datas, true);
        $this->getLayout();   
    }

    public function listServicecomplete()
    {
        $datas['users'] =$this->AdminModel->getAllacceptedusers();        
        $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/servicecomplete/service',$datas, true);
        $this->getLayout();   
    }

    public function addServicecomplete()
    {      
        $datas['']= [''];
        $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/servicecomplete/service',$datas, true);
        $this->getLayout();   
    }
    public function saveServicecomplete()
    {
        $inputs= $this->input->post();
        //saving form        
        $bike_id= $this->AdminModel->saveInformation('users',$inputs);
        $this->session->set_flashdata('toast_info',($bike_id!="") ? getToast("bike Saved Successfully","success") : getToast("Failed To Save bike, Please Try Again","danger"));
        redirect('admin/servicecomplete');
    }   

    public function editServicecomplete($bike_id)
    {
        
        $datas['bike']= $this->AdminModel->getUsers($bike_id);
        $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/servicecomplete/editservice',$datas, true);
        $this->getLayout();   
    }

    public function updateServicecomplete($bike_id)
    {
        $inputs= $this->input->post();
        $post['post'] =$this->AdminModel->updateInformation('users',$inputs,array('id' => $bike_id));
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
         $mail->Subject = 'Service Completed';
         $mail->Body    = $this->load->view('email/delivery' , $post, true );


         if(!$mail->send()) {
            // echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          else {            
            $this->session->set_flashdata('alert', getAlert('success', 'Your ready to delivery successfully'));
            redirect('admin/home');
          } 
            
            redirect('admin/home');                   
    }  

    public function deleteServicecomplete($bike_id)
    {        
        $update_fields = array('updated_date'=>getTimeStamp(),'active_status'=>0,'delete_status'=>1);
        $update_where = array('id'=>$bike_id);
        $this->AdminModel->updateInformation('users',$update_fields,$update_where);
        $this->session->set_flashdata('toast_info',getToast("Deleted Successfully","success"));
        redirect('admin/servicecomplete');   
    }

    public function listbike()
    {
        $datas['bikees'] =$this->AdminModel->getAllbikeList();        
        $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/bike/list_bike',$datas, true);
        $this->getLayout();   
    }

    public function addbike()
    {      
        $datas['']= [''];
        $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/bike/add_bike',$datas, true);
        $this->getLayout();   
    }
    public function savebike()
    {
        $inputs= $this->input->post();
        //saving form        
        $bike_id= $this->AdminModel->saveInformation('users',$inputs);
        $this->session->set_flashdata('toast_info',($bike_id!="") ? getToast("bike Saved Successfully","success") : getToast("Failed To Save bike, Please Try Again","danger"));
        redirect('admin/bike');
    }   

    public function editbike($bike_id)
    {
        
        $datas['bike']= $this->AdminModel->getUsers($bike_id);
        $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/bike/edit_bike',$datas, true);
        $this->getLayout();   
    }

    public function updatebike($bike_id)
    {
        $inputs= $this->input->post();
        //upload image
        //saving form        
        $this->AdminModel->updateInformation('users',$inputs,array('id' => $bike_id));
        $this->session->set_flashdata('toast_info', getToast("bike Updated Successfully","success"));
        redirect('admin/bike');                   
    }  

    public function deletebike($bike_id)
    {        
        $update_fields = array('updated_date'=>getTimeStamp(),'active_status'=>0,'delete_status'=>1);
        $update_where = array('id'=>$bike_id);
        $this->AdminModel->updateInformation('users',$update_fields,$update_where);
        $this->session->set_flashdata('toast_info',getToast("Deleted Successfully","success"));
        redirect('admin/bike');   
    }

     public function listService()
    {
        $datas['service'] =$this->AdminModel->getAllService();        
        $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/service/listservice',$datas, true);
        $this->getLayout();   
    }

    public function addService()
    {   
       $datas['']= [''];  
       $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/service/addservice',$datas, true);
        $this->getLayout();
    }
    public function saveService()
    {
        $inputs= $this->input->post();
        $bus_id= $this->AdminModel->saveInformation('service',$inputs);
        redirect('admin/service');
    }   

    public function editService($bus_id)
    {
        
        $datas['service']= $this->AdminModel->getService($bus_id);
        $this->template['middle'] = $this->load->view ($this->middle = 'pages/admin/service/editservice',$datas, true);
        $this->getLayout();
    }

    public function updateService($bus_id)
    {
        $inputs= $this->input->post();
        //saving form        
        $this->AdminModel->updateInformation('service',$inputs,array('id' => $bus_id));
        redirect('admin/service');                   
    }  

    public function deleteService($bus_id)
    {        
        $update_fields = array('active_status'=>0,'delete_status'=>1);
        $update_where = array('id'=>$bus_id);
        $this->AdminModel->updateInformation('service',$update_fields,$update_where);
        redirect('admin/service');   
    }

    
}
?>