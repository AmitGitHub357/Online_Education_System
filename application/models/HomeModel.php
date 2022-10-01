<?php 
	/**
	 * 
	 */
	class HomeModel extends CI_Model
	{
		public function AddContact($data)
		{
			$this->db->insert("Contact_Us",$data);
		}

		public function GetSingleUser($id)
		{
			$this->db->join("City","City.City_id = Users.City_id");
			$this->db->where("User_id",$id);
			return $this->db->get("Users")->row_array();
		}

		public function CourseByStudent($id)
		{
			$this->db->join("Users","Users.User_id = Users_Course.User_id");
			$this->db->join("Course","Course.Course_id = Users_Course.Course_id");
			$this->db->where("Users_Course.User_id",$id);
			return $this->db->get("Users_Course")->result_array();
		}

		public function UpdateProfile($id,$data)
		{
			$this->db->where("User_id",$id);
			$this->db->update("Users",$data);
		}
	}
 ?>