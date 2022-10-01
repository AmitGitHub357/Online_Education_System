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

		public function GetAllDeletedExams()
		{
			$this->db->where("Exam_Status","Taken");
			$this->db->join("Course","Course.Course_id = Exam_Schedule.Course_id");
			$this->db->join("Exam_Type","Exam_Type.Exam_Type_id = Exam_Schedule.Exam_Name");
			return $this->db->get("Exam_Schedule")->result_array();
		}

		public function GetSingleExam($id)
		{
			$this->db->where("Exam_id",$id);
			return $this->db->get("Exam_Schedule")->row_array();	
		}

		public function AddExam($data)
		{
			$this->db->insert("Exam_Schedule",$data);
		}

		public function DeleteExam($id)
		{
			$this->db->where("Exam_id",$id);
			$this->db->delete("Exam_Schedule");
		}

		public function UpdateExam($id, $data)
		{
			$this->db->where("Exam_id",$id);
			$this->db->update("Exam_Schedule",$data);
		}	
	}
 ?>