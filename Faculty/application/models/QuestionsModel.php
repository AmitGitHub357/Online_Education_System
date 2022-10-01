<?php 
	/**
	 * 
	 */
	class QuestionsModel extends CI_Model
	{
		public function GetAllQuestions()
		{
			$this->db->where("Question_Status","Active");
			$this->db->join("Exam_Schedule","Exam_Schedule.Exam_id = Questions.Exam_id");
			$this->db->join("Exam_Type", "Exam_Type.Exam_Type_id= Exam_Schedule.Exam_Name");
			$this->db->join("Course","Course.Course_id=Exam_Schedule.Course_id");
			return $this->db->get("Questions")->result_array();
		}

		public function GetAllDeletedQuestions()
		{
			$this->db->where("Question_Status","Deactive");
			$this->db->join("Exam_Schedule","Exam_Schedule.Exam_id = Questions.Exam_id");
			$this->db->join("Exam_Type", "Exam_Type.Exam_Type_id= Exam_Schedule.Exam_Name");
			$this->db->join("Course","Course.Course_id=Exam_Schedule.Course_id");
			return $this->db->get("Questions")->result_array();
		}

		public function AddQuestion($data)
		{
			$this->db->insert("Questions",$data);
		}

		public function DeleteQuestion($id)
		{
			$this->db->where("Question_id",$id);
			$this->db->delete("Questions");
		}

		public function UpdateQuestion($id, $data)
		{
			$this->db->where("Question_id",$id);
			$this->db->update("Questions",$data);
		}
	}
 ?>