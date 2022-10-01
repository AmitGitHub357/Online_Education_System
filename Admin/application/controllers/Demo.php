<?php 
	/**
	 * 
	 */
	class Demo extends CI_Controller
	{
		public function index()
		{
			$this->load->view("Demo/form");
		}

		public function SendMail()
		{
			$this->load->library("email");
			$this->email->from('rockys4948@gmail.com', 'Tushar Sonar');
			$this->email->to('tushara4948@gmail.com');
			 
			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');

			if ($this->email->send()) {
				echo "<script>";
				echo "alert('Email Sent Successfully')";
				echo "</script>";
			}
			else {
				echo "<script>";
				echo "alert('Email Sending Failed')";
				echo "</script>";
			}
		}
	}
 ?>