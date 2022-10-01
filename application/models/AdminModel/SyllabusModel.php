<?php 
	/**
	 * 
	 */
	class SyllabusModel extends CI_Model
	{
		public function GetAllSyllabus()
		{
			$this->db->join("Course","Course.Course_id = Syllabus.Course_id");
			$this->db->where("Course.Course_Status","Active");
			$this->db->where("Syllabus.Syllabus_Status","Active");
			return $this->db->get("Syllabus")->result_array();
		}

		public function GetAllDeletedSyllabus()
		{
			$this->db->join("Course","Course.Course_id = Syllabus.Course_id");
			$this->db->where("Course.Course_Status","Active");
			$this->db->where("Syllabus.Syllabus_Status","Deactive");
			return $this->db->get("Syllabus")->result_array();
		}

		public function GetSingleSyllabus($id)
		{
			$this->db->join("Course","Course.Course_id = Syllabus.Course_id");
			$this->db->where("Course.Course_Status","Active");
			$this->db->where("Syllabus.Syllabus_Status","Active");
			$this->db->where("Syllabus_id",$id);
			return $this->db->get("Syllabus")->row_array();
		}

		public function AddSyllabus($data)
		{
			$this->db->insert("Syllabus",$data);
		}

		public function DeleteSyllabus($id)
		{
			$this->db->where("Syllabus_id",$id);
			$this->db->delete("Syllabus");
		}

		public function UpdateSyllabus($id,$data)
		{
			$this->db->where("Syllabus_id",$id);
			$this->db->update("Syllabus", $data);
		}
	}
 ?>