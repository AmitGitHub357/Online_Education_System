<?php 
	/**
	 * 
	 */
	class ExamModel extends CI_Model
	{
		public function GetAllExams($id)
		{
			$this->db->join("Exam_Type","Exam_Type.Exam_Type_id = Exam_Schedule.Exam_Name");
			$this->db->join("Course","Course.Course_id = Exam_Schedule.Course_id");
			$this->db->join("Users_Course","Course.Course_id = Users_Course.Course_id");
			$this->db->join("Users","Users.User_id = Users_Course.User_id");
			$this->db->where("Users.User_id",$id);
			$this->db->where("Exam_Status","Pending");
			return $this->db->get("Exam_Schedule")->result_array();
		}

		public function GetExamDetailsForUser($Exam_id,$User_id)
		{
			$this->db->where("Exam_id",$Exam_id);
			$this->db->where("User_id",$User_id);
			return $this->db->get("Results")->result_array();
		}
		
		public function GetAllQuestions($id)
		{
			$this->db->where("Exam_id",$id);
			return $this->db->get("Questions")->result_array();
		}

		public function CheckAnswer($id)
		{
			$this->db->where("Question_id",$id);
			return $this->db->get("Questions")->row_array();
		}

		public function SaveResult($data)
		{
			$this->db->insert("Results",$data);
		}
	}
 ?>