<?php 
/**
 * 
 */
class WelcomeModel extends CI_Model
{
	public function GetOverviewDetails()
	{
		$this->db->join("Users_Course","Users_Course.User_id = Users.User_id");
		$data['Pass_Student'] = $this->db->where("User_Type","Student")->where("User_Course_Status","Completed")->get("Users")->result_array();
		
		$this->db->join("Users_Course","Users_Course.User_id = Users.User_id");
		$data['Teacher'] = $this->db->where("User_Type","Teacher")->where("User_Course_Status","Pursuing")->get("Users")->result_array();
		
		$this->db->join("Users_Course","Users_Course.User_id = Users.User_id");
		$data['Student'] = $this->db->where("User_Type","Student")->where("User_Course_Status","Pursuing")->get("Users")->result_array();

		$data['Course'] = $this->db->get("Course")->result_array();

		$data['Courses'] = $this->db->where("Course_Entry_Date between Course_Entry_Date and 'NOW() - 15'")->get("Course")->result_array();

		return $data;
	}
}
 ?>