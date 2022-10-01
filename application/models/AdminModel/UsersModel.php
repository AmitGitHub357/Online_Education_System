<?php 
	/**
	 * 
	 */
	class UsersModel extends CI_Model
	{
		public function GetAllUsers($User_Type)
		{
			$this->db->where("User_Status","Active");
			$this->db->where("User_Type",$User_Type);
			$this->db->join("City","City.City_id=Users.City_id");
			return $this->db->get("users")->result_array();
		}

		public function GetAllDeletedUsers($User_Type)
		{
			$this->db->where("User_Status","Deactive");
			$this->db->where("User_Type",$User_Type);
			$this->db->join("City","City.City_id=Users.City_id");
			return $this->db->get("users")->result_array();
		}
		
		public function AddUser($data,$Courses)
		{
			$this->db->insert("Users",$data);
			$id = $this->db->insert_id();
			foreach ($Courses as $Course) {
				$User_Course['Course_id'] = $Course;
				$User_Course['User_id'] = $id;
				$User_Course['User_Course_Entry_Date'] = $data['User_Entry_Date'];
				$this->db->insert("Users_Course",$User_Course);
			}
			
		}

		public function UpdateUsers($id,$data)
		{
			$this->db->where("User_id",$id);
			$this->db->update("Users",$data);
		}
	}
 ?>