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
	public function inserttest()
	{
		$data['query']=$this->testmodal->get_batch();
		$this->load->view('header');
		$this->load->view('testinsert', $data);
		$this->load->view('footer');		
	}

	

		
	}
