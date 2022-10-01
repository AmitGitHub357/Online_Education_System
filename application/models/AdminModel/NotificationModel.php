<?php 
	/**
	 * 
	 */
	class NotificationModel extends CI_Model
	{
		public function GetAllNotifications()
		{
			$this->db->where("Notification_Status","Active");
			return $this->db->get('Notification')->result_array();
		}

		public function GetAllDeletedNotifications()
		{
			$this->db->where("Notification_Status","Deactive");
			return $this->db->get('Notification')->result_array();
		}

		public function GetSingleNotification($id)
		{
			$this->db->where("Notification_id",$id);
			return $this->db->get('Notification')->row_array();
		}

		public function NewNotification($data)
		{
			$this->db->insert("Notification",$data);
		}

		public function DeleteNotification($id)
		{
			$this->db->where("Notification_id",$id);
			$this->db->delete("Notification");
		}

		public function UpdateNotification($id, $data)
		{
			$this->db->where("Notification_id",$id);
			$this->db->update("Notification",$data);
		}
	}
 ?>