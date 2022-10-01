<?php 
	/**
	 * 
	 */
	class StateModel extends CI_Model
	{
		public function GetAllState()
		{
			return $this->db->get("State")->result_array();
		}

		public function GetSingleState($id)
		{
			$this->db->where("State_id",$id);
			return $this->db->get("State")->row_array();
		}

		public function AddState($data)
		{
			$this->db->insert("State",$data);
		}

		public function DeleteState($id)
		{
			$this->db->where("State_id",$id);
			$this->db->delete("State");
		}

		public function UpdateState($data, $id)
		{
			$this->db->where("State_id",$id);
			$this->db->update("State",$data);
		}
	}
 ?>