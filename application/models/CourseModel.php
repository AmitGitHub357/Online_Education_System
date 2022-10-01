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

		public function GetSingleCourse($id)
		{
			
			$this->db->join("Category","Category.Category_id = Course.Category_id");
			$this->db->where("Course.Course_id",$id);
			return $this->db->get("Course")->row_array();
		}

		public function GetAllStudentsOfCourse($id)
		{
			$this->db->join("Users_Course","Users_Course.Course_id = Course.Course_id");
			$this->db->join("Users","Users.User_id=Users_Course.User_id");
			$this->db->where("Course.Course_id",$id);
			$this->db->where("Users.User_Type","Student");
			$Courses = $this->db->get("Course")->result_array();

			return count($Courses);
		}

		public function GetMaterialByCourse($id)
		{
			$User = $_SESSION['Student'];
			$this->db->join("Course","Course.Course_id=Material.Course_id");
			$this->db->join("Users_Course","Course.Course_id = Users_Course.Course_id");
			$this->db->where("Material.Course_id",$id);
			$this->db->where("Users_Course.User_id",$User['User_id']);
			return $this->db->get("Material")->result_array();
		}

		/*
		* select * from Material inner join Course on Course.Course_id = Material.Course_id inner join Users_Course on Course.Course_id = Users_Course.Course_id where Material.Course_id = 39 and Users_Course.User_id = 6
		*/

		public function GetCourseCategories()
		{
			return $this->db->get("Category")->result_array();
		}

		public function GetCoursesByCategory($id)
		{
			$this->db->where("Course_Status","Active");
			$this->db->join("Category","Category.Category_id = Course.Category_id");
			$this->db->where("Course.Category_id",$id);
			
			return $this->db->get("Course")->result_array();
		}
	}
 ?>