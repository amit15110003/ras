<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('testmodal');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}
	public function index()
	{
		$data['query']=$this->testmodal->get_test();
		$this->load->view('header');
		$this->load->view('test', $data);
		$this->load->view('footer');		
	}
	public function addtest()
	{
		$data['query']=$this->testmodal->get_batch();
		$this->load->view('header');
		$this->load->view('testinsert', $data);
		$this->load->view('footer');		
	}
	public function inserttest()
	{
		$data = array
			(
				't_name' => $this->input->post('t_name'),
				't_fmarks' => $this->input->post('t_fmarks'),
				't_date' => $this->input->post('t_date'),
				't_class' => $this->input->post('t_class'),
				't_sub' => $this->input->post('t_sub'),
				't_batch' => $this->input->post('t_batch')
			);
			
			if ($this->testmodal->add_test($data))
			{
				$this->session->set_flashdata('msg','<div class="">Updated Successfully</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}	
	}
	public function result($id)
	{ $data['id']=$id;
		$this->load->view('header');
		$this->load->view('sturesultinsert',$data);
		$this->load->view('footer');		
	}
	public function resultadd()
	{
		$data = array
			(
				'stu_tid' => $this->input->post('stu_tid'),
				'stu_scored' => $this->input->post('stu_scored'),
				'stu_uid' => $this->input->post('stu_uid'),
				'stu_remark' => $this->input->post('stu_remark')
			);
			
			if ($this->testmodal->sturesultinsert($data))
			{
				$this->session->set_flashdata('msg','<div class="">Updated Successfully</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}	
	}
	

		
	}
