<?php 
	/**
	 * 
	 */
	class MaterialModel extends CI_Model
	{
		public function GetAllMaterials($teacher)
		{
			$this->db->where("Material_Status","Active");
			$this->db->join("Users","Users.User_id=Material.User_id");
			$this->db->join("Course","Course.Course_id=Material.Course_id");
			$this->db->where("Material.User_id",$teacher);
			return $this->db->get("Material")->result_array();
		}

		public function GetAllDeletedMaterials($teacher)
		{
			$this->db->where("Material_Status","Deactive");
			$this->db->join("Users","Users.User_id=Material.User_id");
			$this->db->join("Course","Course.Course_id=Material.Course_id");
			$this->db->where("Material.User_id",$teacher);
			return $this->db->get("Material")->result_array();
		}

		public function GetSingleMaterials($id)
		{
			$this->db->where("Material_id",$id);
			$this->db->join("Users","Users.User_id=Material.User_id");
			$this->db->join("Course","Course.Course_id=Material.Course_id");
			return $this->db->get("Material")->row_array();
		}

		public function AddMaterial($data)
		{
			$this->db->insert("Material",$data);
		}

		public function DeleteMaterial($id)
		{
			$this->db->where("Material_id",$id);
			$this->db->delete("Material");	
		}

		public function UpdateMaterial($id, $data)
		{
			$this->db->where("Material_id",$id);
			$this->db->update("Material",$data);
		}
	}
 ?>