<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('person_model');		
	}


	public function loginView()
	{


		if(isset($_SERVER['HTTP_REFERER']))
		{
			$data['ref']= $_SERVER['HTTP_REFERER'];	
		}
		else
		{
			$data['ref']= base_url().'dashboard';
		}
		if(isset($_COOKIE['hnv_prs_username']) && isset($_COOKIE['hnv_prs_password']))
		{
			
			$pos = strrpos($data['ref'], '/');
			$last = $pos === false ? $data['ref'] : substr($data['ref'], $pos + 1);
			if($last==base_url() || $last=='logout')
			{
				$data['ref']=base_url().'dashboard';

			}

			$person_data = $this->person_model->getUserdataForLogin($_COOKIE['hnv_prs_username'],$_COOKIE['hnv_prs_password']);
			if(!empty($person_data))
			{
				$newdata = array(
                                        'hnv_prs_id' => $person_data->prs_id,
					'hnv_prs_slug' => $person_data->prs_slug,
					'hnv_prs_name'  => $person_data->prs_name,
					'hnv_prs_email'  => $person_data->prs_email,
					'hnv_prs_mob'  => $person_data->prs_mob,
					'hnv_prs_img'  => $person_data->prs_img,
					'hnv_prs_dpt_id' => $person_data->prs_dpt_id,
					'is_logged_in' => TRUE
				);
				$this->session->set_userdata($newdata);

				redirect($data['ref']);
			}
			else
			{
				$this->load->view('login',$data);
			}
		}
		else
		{
			$this->load->view('login',$data);
		}


		
	}
	public function loginUser()
	{

		$ref=$this->input->post('ref');
		$pos = strrpos($ref, '/');
		$last = $pos === false ? $ref : substr($ref, $pos + 1);
		if($last==base_url() || $last=='logout')
		{
			$ref=base_url().'dashboard';

		}

		$person_data = $this->person_model->getUserdataForLogin($this->input->post('prs_username'),openssl_encrypt(trim($this->input->post('prs_password')),CIPHER,KEY));
		if(!empty($person_data))
		{
			$newdata = array(

				'hnv_prs_id' => $person_data->prs_id,
				'hnv_prs_slug' => $person_data->prs_slug,
				'hnv_prs_name'  => $person_data->prs_name,
				'hnv_prs_email'  => $person_data->prs_email,
				'hnv_prs_mob'  => $person_data->prs_mob,
				'hnv_prs_dpt_id' => $person_data->prs_dpt_id,
				'is_logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);

			if($this->input->post('rememberme')==1)
			{
			setcookie('hnv_prs_username', $this->input->post('prs_username'), time() + (3600*24*30*12*10), '/'); //  3600 days
			setcookie('hnv_prs_password', openssl_encrypt(trim($this->input->post('prs_password')),CIPHER,KEY), time() + (3600*24*30*12*10), '/'); //  3600 days
		}
		
		echo json_encode(array("success"=>true,'linkn'=>$ref));
	}
	else
	{
		echo json_encode(array("success"=>false));
	}


}

public function logout()
{
	
$newdata = array(
		'hnv_prs_id'=>'',
		'hnv_prs_slug' => '',
		'hnv_prs_name'=> '',
		'hnv_prs_email'=> '',
		'hnv_prs_mob'=> '',
		'hnv_prs_dpt_id'=>'',
		'is_logged_in' => False
	);

	$this->session->unset_userdata($newdata);
	$this->session->sess_destroy();
	if(isset($_COOKIE['hnv_prs_username']) && isset($_COOKIE['hnv_prs_password']))
	{
		delete_cookie('hnv_prs_username');
			delete_cookie('hnv_prs_password');  
		}


	 redirect('', 'refresh');
}

public function mail_pw()
	{

			$sql="select prs_email,prs_password from person where prs_email='".$this->input->post('CLI_email')."'";
				$query =$this->db->query($sql);
				$row =$query->row();

				if(!empty($row)){

					$email=$this->input->post('CLI_email');
    				$emailsend =$email;
               
           
        $subject="Forgot Password - H & V Organic";
   
  $style='color:black';
  $style1='font-weight:bold;color:black;size:18px';
  $style2='font-weight:bold;color:black;size:13px';
  
  $msg1 = "<TABLE border='1' cellpadding='2' cellspacing='1' valign='top' style='font-family: Arial, Helvetica, sans-serif;font-size: 13px;padding-top: 5px;padding-left: 3px;padding-bottom: 5px;border-bottom: 1px solid #000000;border-left: 1px solid #000000;border-right: 1px solid #000000;border-top: 1px solid #000000; border-collapse:collapse' width='400'>";

  $msg1 .="<TR><TD style='padding: 8px'>Email ID :</TD><TD>".$email."</TD></TR>";
  $msg1 .="<TR><TD style='padding: 8px'>Password :</TD><TD>".openssl_decrypt($row->prs_password,CIPHER,KEY)	."</TD></TR>";
  $msg1 .="</TABLE>"; 

  $body ="
  <table border='0' width='100%' align='center' cellpadding='2' cellspacing='1' style='font-family: Arial, Helvetica, sans-serif;font-size: 13px;padding-top: 5px;padding-left: 3px;'><tr><td><p style=".$style2.">To, </p><p style=".$style2.">Respected Sir/ Mam,</p><p>Kindly find your login credentials below :</p></td></tr>
  <tr><td align='left'>".$msg1."</td></tr>
 
  <tr><td style='font-family:times new roman, serif;'><BR><BR>Thanks & Regards,<BR><u style=".$style2.">Support</u><BR></td></tr></table>";

    $message= $body;
  

 	
         


        $config = Array(
              'protocol' =>  EMAIL_PROTOCOL,
              'smtp_host' => EMAIL_HOST,
              'smtp_port' => 587,
              'smtp_user' => EMAIL_USERNAME,
              'smtp_pass' => EMAIL_PASSWORD,
              'mailtype'  => EMAIL_TYPE, 
              'charset'   => EMAIL_CHARSET,
              'wordwrap' =>  EMAIL_WORDWRAP,
              '_smtp_auth'=> true
          );

          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from(''.EMAIL_USERNAME.'', 'H & V Organic');
          $this->email->subject($subject);
          $this->email->to($emailsend);
          $this->email->message($message);
        
             if($this->email->send())
             {
             	//print_r($this->email->print_debugger());
            		
             }
             else
            {
             log_message('debug','error occured in people insert communication_model/send_mail'.$this->email->print_debugger());
             show_error($this->email->print_debugger());
            }

        				 $str ='';
   
   

    $str.='<h style="color:#98ce44;margin-top: 3px;width: 170px;"">
    <span class="glyphicon glyphicon-ok"></span> Please check your email.We sent you your password.</h>';
		echo json_encode(array("success"=>true,'message'=>$str));
				}
				else{
				 $str ='';
   
                 $str .='<form  method="POST">';

    $str.='<h style="color:red;

    margin-top: 3px;

    width: 170px;"><span class="glyphicon glyphiconn-remove-circle"></span>Please enter valid email-ID.</h>';

    
     echo json_encode(array("success"=>false,"message"=>$str));
				}
	}

}
