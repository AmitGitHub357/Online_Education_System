<?php 
	/**
	 * 
	 */
	class CourseModel extends CI_Model
	{
		public function GetAllCourses()
		{
			$this->db->join("Category","Category.Category_id = Course.Category_id");
			return $this->db->get("Course")->result_array();
		}

		public function GetAllCoursesByUser($User)
		{
			$id = $User['User_id'];
			$this->db->join("Users_Course","Users_Course.Course_id = Course.Course_id");
			$this->db->join("Category","Category.Category_id = Course.Category_id");
			$this->db->where("Users_Course.User_id",$id);
			return $this->db->get("Course")->result_array();
		}

		public function GetSingleCourse($id)
		{
			$this->db->where("Course_id",$id);
			$this->db->join("Category","Category.Category_id = Course.Category_id");
			return $this->db->get("Course")->row_array();
		}
	}
 ?>