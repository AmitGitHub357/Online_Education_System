<?php 
	/**
	 * 
	 */
	class Contact_UsModel extends CI_Model
	{
		public function GetAllData()
		{
			return $this->db->get("Contact_Us")->result_array();
		}
	}
 ?>