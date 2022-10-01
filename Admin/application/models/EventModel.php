<?php 
	/**
	 * 
	 */
	class EventModel extends CI_Model
	{
		public function GetAllEvents()
		{
			// $this->db->where("Event_Status","Active");
			return $this->db->get("Events")->result_array();
		}

		public function GetAllDeletedEvents()
		{
			// $this->db->where("Event_Status","Deactive");
			return $this->db->get("Events")->result_array();
		}

		public function GetSingleEvent($id)
		{
			$this->db->where("Event_id",$id);
			return $this->db->get("Events")->row_array();
		}

		public function AddEvent($data)
		{
			$this->db->insert("Events",$data);
		}

		public function UpdateEvent($id, $data)
		{
			$this->db->where("Event_id",$id);
			$this->db->update("Events",$data);
		}

		public function UpdateEventStatus()
		{
			$data['Event_Status'] = 'Done';
			$this->db->where('Event_Date <=',date('Y-m-d h:i:s'));
			$this->db->update("Events",$data);
		}

		public function DeleteEvent($id)
		{
			$this->db->where("Event_id",$id);
			$this->db->delete("Events");
		}
	}
 ?>