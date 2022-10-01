<?php 
	/**
	 * 
	 */
	class Notification extends CI_Controller
	{
		public function Index()
		{
			$this->load->model("NotificationModel");
			$data['Notifications'] = $this->NotificationModel->GetAllNotifications();

			$this->load->model("UsersModel");
			$data['Users'] = $this->UsersModel->GetAllUsers('Student');

			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view('Notification/index',$data);
			$this->load->view("footer");
		}

		public function DeletedData()
		{
			$this->load->model("NotificationModel");
			$data['Notifications'] = $this->NotificationModel->GetAllDeletedNotifications();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view('Notification/DeletedData',$data);
			$this->load->view("footer");
		}

		public function AddNotification()
		{
			$this->load->model("NotificationModel");
			if (isset($_REQUEST['AddNotification'])) {
				$data['Notification_Title'] = $this->input->post("Notification_Title");
				$data['Notification_Description'] = $this->input->post("Notification_Description");
				$data['Notification_Date'] = date('Y-m-d h:i:s');

				$this->NotificationModel->NewNotification($data);
			}
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Notification/NewNotification");
				$this->load->view("footer");
			
		}

		public function UpdateNotification($id)
		{
			$this->load->model("NotificationModel");
			
			if (isset($_REQUEST['UpdateNotification'])) {
				$data['Notification_Title'] = $this->input->post("Notification_Title");
				$data['Notification_Description'] = $this->input->post("Notification_Description");
				$data['Notification_Update_Date'] = date('Y-m-d h:i:s');

				$this->NotificationModel->UpdateNotification($id, $data);
				redirect(base_url()."index.php/Notification");
			}
			else
			{
				$data['Notification'] = $this->NotificationModel->GetSingleNotification($id);
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Notification/UpdateNotification", $data);
				$this->load->view("footer");
			}
		}

		public function DeleteNotification($id)
		{
			$this->load->model("NotificationModel");
			$this->NotificationModel->DeleteNotification($id);
			redirect(base_url()."index.php/Notification");
		}

		public function NotificationStatus($id, $status)
		{
			$this->load->model("NotificationModel");
			$data['Notification_Status'] = $status;
			$data['Notification_Update_Date'] = date('Y-m-d h:i:s');
			$this->NotificationModel->UpdateNotification($id, $data);
			if ($status=='Active') {
				redirect(base_url()."index.php/Notification/DeletedData");
			}
			elseif ($status=='Deactive') {
				redirect(base_url()."index.php/Notification");
			}
			
		}

		public function SendNotification()
		{
			$this->load->model("NotificationModel");
			$UsersList = $this->input->post('UsersList');
			$Notification_id =  $_COOKIE['DemoCookie'];
			$data = $this->NotificationModel->GetSingleNotification($Notification_id);
			foreach ($UsersList as $user) {
				mail($user, $data['Notification_Title'], $data['Notification_Description']);
			 }

			setcookie("DemoCookie","",'1');
			redirect(base_url()."index.php/Notification");
		}
	}
 ?>