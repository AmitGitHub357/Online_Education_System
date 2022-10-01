<?php 
	/**
	 * 
	 */
	class ExamTypeModel extends CI_Model
	{
		public function ShowAllExamTypes()
		{
			$this->db->where("Exam_Type_Status","Active");
			return $this->db->get("Exam_Type")->result_array();
		}

		public function ShowAllDeletedExamTypes()
		{
			$this->db->where("Exam_Type_Status","Deactive");
			return $this->db->get("Exam_Type")->result_array();
		}

		public function ShowSingleExamType($id)
		{
			$this->db->where("Exam_Type_id",$id);
			return $this->db->get("Exam_Type")->row_array();
		}

		public function AddExamType($data)
		{
			$this->db->insert("Exam_Type",$data);
		}

		public function DeleteExamType($id)
		{
			$this->db->where("Exam_Type_id",$id);
			$this->db->delete("Exam_Type");
		}

		public function UpdateExamType($id, $data)
		{
			$this->db->where("Exam_Type_id",$id);
			$this->db->update("Exam_Type",$data);
		}
	}
 ?>