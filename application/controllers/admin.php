<?php
class Admin extends MY_Controller
{
	public function dashboard()
	{
		$this->load->model('articlesmodel');

		$articles = $this->articlesmodel->articles_list();


		$this->load->view('admin/dashboard',['articles'=>$articles]);
	}
	public function add_article()
	{
		$this->load->helper('form');
		$this->load->view('admin/add_article');
	}

	public function store_article()
	{
		$this->load->library('form_validation');
		if( $this->form_validation->run('add_article_rules') )
		{
			$post = $this->input->post();
			unset($post['submit']);
			$this->load->model('articlesmodel');
			if($this->articlesmodel->add_article($post))
			{
					$this->session->set_flashdata('feedback','Articles add successfully');
					$this->session->set_flashdata('feedback_class','alert-success');
			}
			else
			{
					$this->session->set_flashdata('feedback','failes to add ,please try again');
					$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('admin/dashboard');
		}else
		{
			$this->load->view('admin/add_article');
		}
	}

	public function edit_article($article_id)
	{
		$this->load->helper('form');
		$this->load->model('articlesmodel');
		$article =	$this->articlesmodel->find_article($article_id);
		$this->load->view('admin/edit_article',['article' => $article]);
	}
	public function update_article($article_id)
	{
		$this->load->library('form_validation');
		if( $this->form_validation->run('add_article_rules') )
		{
			$post = $this->input->post();
			unset($post['submit']);
			$this->load->model('articlesmodel');
			if($this->articlesmodel->update_article($article_id,$post))
			{
					$this->session->set_flashdata('feedback','Articles Updated successfully');
					$this->session->set_flashdata('feedback_class','alert-success');
			}
			else
			{
					$this->session->set_flashdata('feedback','failes to update ,please try again');
					$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('admin/dashboard');
		}else
		{
			$this->load->view('admin/edit_article');
		}
	}

	public function delete_article()
	{

	}
	public function __construct()
	{

		parent::__construct();
		if(! $this->session->userdata('user_id'))
		return redirect('login');
	}
}


?> 