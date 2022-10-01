<?php 
	/**
	 * 
	 */
	class CityModel extends CI_Model
	{
		public function GetAllCities()
		{
			$this->db->where("City_Status","Active");
			$this->db->join("State","State.State_id = City.State_id");
			return $this->db->get("City")->result_array();
		}

		public function GetAllDeletedCities()
		{
			$this->db->where("City_Status","Deactive");
			$this->db->join("State","State.State_id = City.State_id");
			return $this->db->get("City")->result_array();
		}

		public function GetSingleCity($id)
		{
			$this->db->where("City_id",$id);
			$this->db->join("State","State.State_id = City.State_id");
			return $this->db->get("City")->row_array();	
		}

		public function AddCity($data)
		{
			$this->db->insert("City",$data);
		}

		public function DeleteCity($id)
		{
			$this->db->where("City_id",$id);
			$this->db->delete("City");
		}

		public function UpdateCity($id, $data)
		{
			$this->db->where("City_id",$id);
			$this->db->update("City",$data);
		}
	}
 ?>