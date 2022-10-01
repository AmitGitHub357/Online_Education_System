<?php 
	/**
	 * 
	 */
	class CategoryModel extends CI_Model
	{
		public function GetAllCategories()
		{
			$this->db->where("Category_Status","Active");
			return $this->db->get("Category")->result_array();
		}

		public function GetAllDeletedCategories()
		{
			$this->db->where("Category_Status","Deactive");
			return $this->db->get("Category")->result_array();
		}

		public function GetSingleCategory($id)
		{
			$this->db->where("Category_id",$id);
			return $this->db->get("Category")->row_array();
		}

		public function AddCategory($data)
		{
			$this->db->insert("Category",$data);
		}

		public function DeleteCategory($id)
		{
			$this->db->where("Category_id",$id);
			$this->db->delete("Category");
		}

		public function UpdateCategory($data,$id)
		{
			$this->db->where("Category_id",$id);
			$this->db->update("Category",$data);
		}
	}
 ?>