<?php 
	/**
	 * 
	 */
	class ExamScheduleModel extends CI_Model
	{
		public function GetAllExams()
		{
			$this->db->where("Exam_Status","Pending");
			$this->db->join("Course","Course.Course_id = Exam_Schedule.Course_id");
			$this->db->join("Exam_Type","Exam_Type.Exam_Type_id = Exam_Schedule.Exam_Name");
			return $this->db->get("Exam_Schedule")->result_array();
		}

		public function GetSingleExam($id)
		{
			$this->db->where("Exam_id",$id);
			return $this->db->get("Exam_Schedule")->row_array();	
		}

		public function GetScheduleByCourse($course_id)
		{
			$this->db->where("Exam_Schedule.Course_id",$course_id);
			$this->db->where("Exam_Status","Pending");
			$this->db->join("Course","Course.Course_id = Exam_Schedule.Course_id");
			$this->db->join("Exam_Type","Exam_Type.Exam_Type_id = Exam_Schedule.Exam_Name");
			
			return $this->db->get("Exam_Schedule")->result_array();
			
			/*
			* select * from Exam_Schedule inner join Exam_Type on Exam_Type.Exam_Type_id = Exam_Schedule.Exam_Name inner join Course on Course.Course_id = Exam_Schedule.Course_id where Exam_Schedule.Course_id = 40 and Exam_Status='Pending'
			*/
		}
	}
 ?>