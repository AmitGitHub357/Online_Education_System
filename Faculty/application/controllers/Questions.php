<?php 
	/**
	 * 
	 */
	class Questions extends CI_Controller
	{
		public function index()
		{
			$this->load->model("QuestionsModel");
			$data['Questions'] = $this->QuestionsModel->GetAllQuestions();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Questions/index",$data);
			$this->load->view("footer");
		}

		public function DeletedData()
		{
			$this->load->model("QuestionsModel");
			$data['Questions'] = $this->QuestionsModel->GetAllDeletedQuestions();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Questions/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddQuestion()
		{
			$User = $_SESSION['Teacher'];
			$this->load->model('QuestionsModel');
			if (isset($_REQUEST['AddQuestion'])) {
				$data['Exam_id'] = $this->input->post("Exam");
				// $data['Course_id'] = $this->input->post("Course_id");
				$data['Question'] = $this->input->post('Question');
				$data['Option_A'] = $this->input->post('Option_A');
				$data['Option_B'] = $this->input->post('Option_B');
				$data['Option_C'] = $this->input->post('Option_C');
				$data['Option_D'] = $this->input->post('Option_D');
				$data['Answer'] = $this->input->post('Answer');
				$data['Question_Entry_Date'] = date("Y-m-d h:i:s");

				$this->QuestionsModel->AddQuestion($data);
			}
				$this->load->model("CourseModel");
				// $this->load->model("ExamScheduleModel");
				$data['Courses'] = $this->CourseModel->GetAllCoursesByUser($User);
				// $data['Exams'] = $this->ExamScheduleModel->GetAllExams();
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Questions/AddQuestion",$data);
				$this->load->view("footer");
			
		}

		public function DeleteQuestion($id)
		{
			$this->load->model("QuestionsModel");
			$this->QuestionsModel->DeleteQuestion($id);
			redirect(base_url().'index.php/Questions/DeletedData');
		}

		public function QuestionStatus($id, $status)
		{
			$this->load->model("QuestionsModel");
			$data['Question_Status'] = $status;
			$this->QuestionsModel->UpdateQuestion($id, $data);
			if ($status=='Active') {
				redirect(base_url().'index.php/Questions/DeletedData');
			}
			else if ($status['Deactive']) {
				redirect(base_url().'index.php/Questions/');
			}
		}
	}
 ?>