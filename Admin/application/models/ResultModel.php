<?php 
	/**
	 * 
	 */
	class ResultModel extends CI_Model
	{
		public function GetAllResults()
		{
			$this->db->join("Users","Users.User_id=Results.User_id");
			$this->db->join("Exam_Schedule","Exam_Schedule.Exam_id = Results.Exam_id");
			$this->db->join("Exam_Type","Exam_Type.Exam_Type_id = Exam_Schedule.Exam_Name");
			$this->db->join("Course","Course.Course_id = Exam_Schedule.Course_id");
			return $this->db->get("Results")->result_array();
		}
	}
 ?>