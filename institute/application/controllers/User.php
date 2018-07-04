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
	public function result_id($u_card)
	{   $data['query']=$this->usermodal->get_sturesult($u_card);
					
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
//attendance

	public function attend_id($u_id)
	{   
		
		$checkcart = $this->db->query('select * from attend 
			                            where us_id="'.$u_id.'"');
		$resultcheckcart = $checkcart->num_rows();


		if($resultcheckcart == '0' ){
		$data=array('us_id'=>$u_id,'jan'=>'0','feb'=>'0','mar'=>'0','apr'=>'0','may'=>'0','jun'=>'0','jul'=>'0','aug'=>'0','sep'=>'0','oct'=>'0','nov'=>'0','dece'=>'0');

		$this->db->insert('attend',$data);

		}

		$details=$this->usermodal->get_attend($u_id);
        	    	$data['u_id'] = $details[0]->u_id;
        			$data['u_name'] = $details[0]->u_name;
        			$data['jan'] = $details[0]->jan;
        			$data['feb'] = $details[0]->feb;
        			$data['mar'] = $details[0]->mar;
					$data['apr'] = $details[0]->apr;
					$data['may'] = $details[0]->may;
					$data['jun'] = $details[0]->jun;
					$data['jul'] = $details[0]->jul;
					$data['aug'] = $details[0]->aug;
					$data['sep'] = $details[0]->sep;
					$data['oct'] = $details[0]->oct;
					$data['nov'] = $details[0]->nov;
					$data['dece'] = $details[0]->dece;
					
     			$this->load->view('header');
				$this->load->view('attend',$data);
				$this->load->view('footer');
		
	
	}	
	public function update_attend($u_id)
	{	

			$data = array
			(
				'jan' => $this->input->post('jan'),
				'feb' => $this->input->post('feb'),
				'mar' => $this->input->post('mar'),
				'apr' => $this->input->post('apr'),
				'may' => $this->input->post('may'),
				'jun' => $this->input->post('jun'),
				'jul' => $this->input->post('jul'),
				'aug' => $this->input->post('aug'),
				'sep' => $this->input->post('sep'),
				'oct' => $this->input->post('oct'),
				'nov' => $this->input->post('nov'),
				'dece' => $this->input->post('dece'),

				
			);
			
			if ($this->usermodal->update_attend($u_id,$data))
			{
				$this->session->set_flashdata('msg','<div class="">Sucessfully Updated!!! </div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				//redirect($_SERVER['HTTP_REFERER']);
			}
		
	}
		
	}
