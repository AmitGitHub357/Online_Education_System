<?php 
	/**
	 * 
	 */
	class TeacherModel extends CI_Model
	{
		public function GetAllTeachers()
		{
			$this->db->join("Users_Course","Users_Course.User_id=Users.User_id");
			$this->db->join("Course","Course.Course_id=Users_Course.Course_id");
			$this->db->where("User_Type","Teacher");
			$this->db->where("Users_Course.User_Course_Status","Pursuing");
			$Teachers = $this->db->get("Users")->result_array();
			// foreach ($Teachers as $Teacher) {
			// 	$this->db->join("Users_Course","Users_Course.User_id=".$Teacher['User_id']);
			// 	$this->db->where("Users_Course.User_id",$Teacher['User_id']);
			// 	$a = $this->db->get("Course")->result_array();
				// $Teacher[$a['Course_Name']] = $a;
				// print_r($Teacher);

			// 	foreach($a as $aa) {
			// 		print_r($aa);
					// echo "<BR><BR><BR>";
			// 	}
			// 	// echo "<BR><BR><BR>";
			// }

			// print_r($Teachers);

			return $Teachers;
		}
	}
 ?>