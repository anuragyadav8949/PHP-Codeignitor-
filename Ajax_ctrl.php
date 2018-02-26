<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soc_ctrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Soc_mdl');
		$this->load->model('Home_mdl');
	}

	public function view_forgot_password()
	{
		$this->load->view('forgot_password');
	}

			/*  Checking User in forget password AJAX */
	public function CheckUserEmail()
  {
    $user_email = $this->input->post('user_email');//Getting data form AJAX
    $user_count = $this->Soc_mdl->check_email($user_email);

		$count = count($user_count);

		if (empty($count)) {
			//echo $count;
			return true;
		}else {
			echo "false";
			return false;
		}
  }
		/*  END Checking User in forget password  */

	public function user_logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
}
