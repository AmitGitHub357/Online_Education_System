<?php 
	/**
	 * 
	 */
	class Contact_UsModel extends CI_Model
	{
		public function GetAllData()
		{
			$this->db->where("Contact_Status","Active");
			return $this->db->get("Contact_Us")->result_array();
		}

		public function GetAllDeletedData()
		{
			$this->db->where("Contact_Status","Deactive");
			return $this->db->get("Contact_Us")->result_array();
		}
	}
 ?>