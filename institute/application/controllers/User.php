<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('usermodal');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}
	public function index()
	{   $data['query']=$this->usermodal->get_user();
		$this->load->view('header');
		$this->load->view('viewuser',$data);
		$this->load->view('footer');
	}
	public function insertuser()
	{   $data['query']=$this->usermodal->get_batch();
		$this->load->view('header');
		$this->load->view('user',$data);
		$this->load->view('footer');
	}
	public function add_user()
	{   
		//$this->form_validation->set_rules('u_mail', 'Email ID', 'trim|required|valid_email|is_unique[user.u_mail]');
		$this->form_validation->set_rules('u_contact', 'contact', 'trim|required');
		$this->form_validation->set_rules('u_card', 'card', 'trim|required');
		
		// submit
		if ($this->form_validation->run() == FALSE)
        {	
        	$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				//redirect($_SERVER['HTTP_REFERER']);
        }
		else
		{
			$data = array
			(
				'u_name' => $this->input->post('u_name'),
				'u_add' => $this->input->post('u_add'),
				'u_contact' => $this->input->post('u_contact'),
				'u_pcontact' => $this->input->post('u_contact'),
				'u_card' => $this->input->post('u_card'),
				'u_mail' => $this->input->post('u_mail'),
				'u_class' => $this->input->post('u_class'),
				//'u_batch' => $this->input->post('u_batch'),
				'u_status' => $this->input->post('u_status')
			);
			
			if ($this->usermodal->add_user($data))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
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
		public function user_id($u_id)
	{   $data['query']=$this->usermodal->get_batch();
		$details=$this->usermodal->userbyid($u_id);
        	    	$data['u_id'] = $details[0]->u_id;
        			$data['u_name'] = $details[0]->u_name;
        			$data['u_contact'] = $details[0]->u_contact;
        			$data['u_pcontact'] = $details[0]->u_pcontact;
        			$data['u_add'] = $details[0]->u_add;
					$data['u_mail'] = $details[0]->u_mail;
					
     			$this->load->view('header');
				$this->load->view('userbyid',$data);
				$this->load->view('footer');
	}	
	public function result_id($u_id)
	{   $data['query']=$this->usermodal->get_sturesult($u_id);
					
     			$this->load->view('header');
				$this->load->view('resultbyid',$data);
				$this->load->view('footer');
	}
	public function update_user($u_id)
	{	

			$data = array
			(
				'u_name' => $this->input->post('u_name'),
				'u_contact' => $this->input->post('u_contact'),
				'u_add' => $this->input->post('u_add'),
				'u_batch' => $this->input->post('u_batch'),
				'u_class' => $this->input->post('u_class'),
				'u_mail' => $this->input->post('u_mail')
				
			);
			
			if ($this->usermodal->update_user($u_id,$data))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				//redirect($_SERVER['HTTP_REFERER']);
			}
		
	}
	


	public function toggle_user($w_id,$w_status)
	{        
	        $w_status1=1-$w_status;
			if ($this->admin->toggle_user($w_id,$w_status1))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
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
