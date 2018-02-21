<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

  // public function __construct()
  //   {
  //        parent::__construct();
  //        $prs_id  = $this->session->userdata('dp_web_led_id');
  //         if(empty($prs_id))
  //         {
  //           redirect(site_url('login'));
  //           exit;
  //         }
  //   }

  function contact_email()
  {
    $customer_name=$this->input->post('author');
    $customer_email=$this->input->post('email');
    $cutomer_comment=$this->input->post('comment');

    $admin_email=EMAIL_ADMIN;

    if ($customer_name != '') 
    {
       
       $subject_customer = SUBJECT_CUSTOMER;
       $subject_admin = SUBJECT_ADMIN;

       $message_customer=$this->generic_email->send_richmail();
       $message_admin= MESSAGE_ADMIN. 'Name: ' .$customer_name. '<br>Email: '. $customer_email. '<br>Message: '.$cutomer_comment;

  


       $this->home_model->sendemail($customer_email,$subject_customer,$message_customer);         // send to customer
       $this->home_model->sendemail($admin_email,$subject_admin,$message_admin);        //send to comapny
      echo json_encode(array('success'=>true,'message'=>'Email sent Succesfully'));  
    }else
    {
      echo json_encode(array('success'=>false,'message'=>'Some Error Occured,Email Not Sent'));
    }
  }
}
