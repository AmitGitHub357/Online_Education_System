<?php 
	/**
	 * 
	 */
	class SyllabusModel extends CI_Model
	{
		public function GetAllSyllabus($User_id)
		{
			$this->db->join("Users_Course","Users_Course.User_id=".$User_id);
			$this->db->join("Course","Course.Course_id = Syllabus.Course_id");
			$this->db->where("Course.Course_Status","Active");
			$this->db->where("Syllabus.Syllabus_Status","Active");

			// $this->db->where("Course.User_id",$User_id);
			return $this->db->get("Syllabus")->result_array();
		}
	}
 ?>