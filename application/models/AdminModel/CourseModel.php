<?php 
	/**
	 * 
	 */
	class CourseModel extends CI_Model
	{
		public function GetAllCourses()
		{
			$this->db->where("Course_Status","Active");
			$this->db->join("Category","Category.Category_id = Course.Category_id");
			return $this->db->get("Course")->result_array();
		}

		public function GetAllDeletedCourses()
		{
			$this->db->where("Course_Status","Deactive");
			$this->db->join("Category","Category.Category_id = Course.Category_id");
			return $this->db->get("Course")->result_array();
		}

		public function GetSingleCourse($id)
		{
			$this->db->where("Course_id",$id);
			return $this->db->get("Course")->row_array();
		}

		public function AddCourse($data)
		{
			$this->db->insert("Course",$data);
		}

		public function DeleteCourse($id)
		{
			$this->db->where("Course_id",$id);
			$this->db->delete("Course");
		}

		public function UpdateCourse($id, $data)
		{
			$this->db->where("Course_id",$id);
			$this->db->update("Course",$data);	
		}

		public function EmptyTable()
		{
			$this->db->empty_table("course");
		}
	}
 ?>