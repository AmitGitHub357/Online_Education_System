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
		
	}
 ?>