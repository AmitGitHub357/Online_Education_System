<?php 
	/**
	 * 
	 */
	class MaterialModel extends CI_Model
	{
		public function GetAllMaterials()
		{
			$this->db->where("Material_Status","Active");
			$this->db->join("Users","Users.User_id=Material.User_id");
			$this->db->join("Course","Course.Course_id=Material.Course_id");
			$this->db->join("Users_Course","Users_Course.User_id=Users.User_id");
			$this->db->where("User_Course_Status","Pursuing");
			return $this->db->get("Material")->result_array();

		}


	}
 ?>