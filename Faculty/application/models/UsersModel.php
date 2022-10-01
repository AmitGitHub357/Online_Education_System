<?php 
	/**
	 * 
	 */
	class UsersModel extends CI_Model
	{
		public function GetAllUsers()
		{
			$this->db->join("City","City.City_id=Users.City_id");
			return $this->db->get("users")->result_array();
		}

		public function GetSingleUserData($id)
		{
			$this->db->where("User_id",$id);
			return $this->db->get("Users")->row_array();
		}

		public function UpdateUsers($id,$data)
		{
			$this->db->where("User_id",$id);
			$this->db->update("Users",$data);
		}
	}
 ?>