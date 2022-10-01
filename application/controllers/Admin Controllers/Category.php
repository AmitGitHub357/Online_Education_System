<?php 
	/**
	 * 
	 */
	class Category extends CI_Controller
	{
		public function index()
		{
			$this->load->model("CategoryModel");
			$data["Categories"] = $this->CategoryModel->GetAllCategories();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Category/index",$data);
			$this->load->view("footer");
		}

		public function DeletedData()
		{
			$this->load->model("CategoryModel");
			$data["Categories"] = $this->CategoryModel->GetAllDeletedCategories();
			$title['title'] = $this->router->class;
			$this->load->view("header", $title);
			$this->load->view("Category/DeletedData",$data);
			$this->load->view("footer");
		}

		public function AddCategory()
		{
			$this->load->model("CategoryModel");
			if (isset($_REQUEST['AddCategory'])) {
				$data['Category_Name'] = $this->input->post("Category_Name");
				$data['Category_Entry_Date'] = date("Y-m-d h:i:s");
				$this->CategoryModel->AddCategory($data);
			}
			
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Category/AddCategory");
				$this->load->view("footer");
			
		}

		public function DeleteCategory($id)
		{
			$this->load->model("CategoryModel");
			$this->CategoryModel->DeleteCategory($id);
			redirect(base_url()."index.php/Category");
		}

		public function UpdateCategory($id)
		{
			$this->load->model("CategoryModel");

			if (isset($_REQUEST['UpdateCategory'])) {
				$data['Category_Name'] = $this->input->post("Category_Name");
				$data['Category_Update_Date'] = date("Y-m-d h:i:s");
				$this->CategoryModel->UpdateCategory($data,$id);
				redirect(base_url()."index.php/Category");
			}
			else
			{
				$data['Category'] = $this->CategoryModel->GetSingleCategory($id);
				$title['title'] = $this->router->class;
				$this->load->view("header", $title);
				$this->load->view("Category/UpdateCategory",$data);
				$this->load->view("footer");
			}
		}

		public function CategoryStatus($id,$status)
		{
			$this->load->model("CategoryModel");
			$data['Category_Status'] = $status;
			$data['Category_Update_Date'] = date("Y-m-d h:i:s");
			$this->CategoryModel->UpdateCategory($data,$id);
			if ($status=='Active') {
				redirect(base_url()."index.php/Category/DeletedData");
			}
			elseif ($status=='Deactive') {
				redirect(base_url()."index.php/Category");
			}
			
		}
	}
 ?>