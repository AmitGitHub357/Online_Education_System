<?php 
	/**
	 * 
	 */
	class Exam extends CI_Controller
	{
		public function index()
		{
			$data['Exam_Status'] = 'Taken';
			$date = date('Y-m-d H:i:s',strtotime('-3 hours',strtotime(date('Y-m-d H:i:s'))));
			$this->db->where("Exam_Date <'$date'");
			$this->db->update("Exam_Schedule",$data);

			$User = $_SESSION['Student'];
			$this->load->model("ExamModel");
			$data['Exams'] = $this->ExamModel->GetAllExams($User['User_id']);
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Exams",$data);
			$this->load->view("footer");
		}

		public function GiveExam($id)
		{
			$User = $_SESSION['Student'];
			$this->load->model("ExamModel");
			$ExamByUser = $this->ExamModel->GetExamDetailsForUser($id,$User['User_id']);
			if (count($ExamByUser)>0) {
				echo "<script>";
				echo "alert('You have already given exam. You can not give this exam again');";
				echo "window.location.href = '".base_url()."index.php/Exam/'";
				echo "</script>";

				//redirect(base_url().'index.php/Exam/');
			}
			$Questions = $this->ExamModel->GetAllQuestions($id);
			if (isset($_REQUEST['SubmitAnswers'])) {
					$Marks = 0;
					foreach ($Questions as $Question) {
						$Question_id = $Question['Question_id'];
						$ans = $this->input->post($Question_id."_Option");
						$answer = $this->ExamModel->CheckAnswer($Question_id);
						if ($answer['Answer']==$ans) {
							$Marks++;
						}
					}

					$data['Exam_id'] = $id;
					$data['User_id'] = $User['User_id'];
					$data['Marks'] = $Marks;
					$data['Result_Entry_Date'] = date('Y-m-d h:i:s');

					$this->ExamModel->SaveResult($data);
					echo "<script>";
					echo "alert('$Marks')";
					echo "window.location.href = '".base_url()."index.php/Exam/'";
					echo "</script>";

			}
			else
			{
				if (count($Questions)==0) {
					echo "<script>";
					echo "alert('Your Exam is canceled');";
					echo "window.location.href = '".base_url()."index.php/Exam/'";
					echo "</script>";
				}
				$data['Questions'] = $Questions;
				$title['title'] = $this->router->class;
				$this->load->view("header",$title);
				$this->load->view("QuestionPaper",$data);
				$this->load->view("footer");
			}
		}
	}
	?>