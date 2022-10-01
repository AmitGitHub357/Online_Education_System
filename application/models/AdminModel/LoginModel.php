<?php 
	/**
	 * 
	 */
	class LoginModel extends CI_Model
	{
		public function GetUserCredentials($Username, $Password)
		{
			$this->db->where("Admin_Email",$Username);
			$this->db->where("Admin_Password",$Password);
			return $login = $this->db->get("Admin")->row_array();
		}
	}
 ?>