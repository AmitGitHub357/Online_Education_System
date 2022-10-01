<?php 
	/**
	 * 
	 */
	class AdminModel extends CI_Model
	{
		public function GetAllAdmins()
		{
			return $this->db->get("Admin")->result_array();
		}

		public function AddAdmin($data)
		{
			$this->db->insert("Admin",$data);
		}

		public function DeleteAdmin($id)
		{
			$this->db->where("Admin_id",$id);
			$this->db->delete("Admin");
		}

		public function AdminStatus($id, $status)
		{
			$this->db->where("Admin_id",$id);
			$this->db->update("Admin",$status);
		}
	}
 ?>