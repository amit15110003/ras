<?php
class orders extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user');
		if(!$this->session->userdata('u_id')){
                redirect('login', 'refresh');
         }

	}
	
	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
        	$details = $this->user->get_user_by_id($this->session->userdata('uid'));
        	$data['contact'] = $details[0]->contact;
        	$data['fname'] = $details[0]->fname;
        	$data['email'] = $details[0]->email;
        	$data['lname'] = $details[0]->lname;
        	$data['address'] = $details[0]->address;
        	$details['category']=$this->user->showcategory();
			$this->load->view('header',$details);
			$this->load->view('profile',$data);
        }
		else
		{
			$id=$this->session->userdata('uid');
		    $fname=$_POST['fname'];
		    $lname=$_POST['lname'];
		    $contact=$_POST['contact'];
			$result=$this->user->update($id, $fname, $lname, $contact);

		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile/index');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile/index');
			}
		}
	}
		
}