<?php 
	/**
	 * 
	 */
	class LoginModel extends CI_Model
	{
		public function GetUserCredentials($Username, $Password)
		{
			$this->db->where("Username",$Username);
			$this->db->where("Password",$Password);
			return $login = $this->db->get("Users")->row_array();
		}

	}
 ?>