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
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view('Notification/index',$data);
			$this->load->view("footer");
		}
	}
 ?>