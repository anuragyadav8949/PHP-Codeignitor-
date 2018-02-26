<?php

Class Soc_mdl extends CI_Model
{

	public function check_email($user_email)
	{
		$this->db->select('*');
		$this->db->from('soc_user_details');
		$this->db->where('email_id',$user_email);
		$query = $this->db->get();
		return $query->result_array();
	}
}
