<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation','cart'));
		$this->load->database();
		$this->load->model('user');
	}
    public function index()
    {
		// get form input
		$u_card = $this->input->post("u_card");
        $u_pass = $this->input->post("u_pass");

		// form validation
		$this->form_validation->set_rules("u_card", "Card", "trim|required");
		$this->form_validation->set_rules("u_pass", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
			
			redirect('login/index');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user->get_user($u_card, $u_pass);
			if (count($uresult) > 0)
			{	
				$sess_data = array('login' => TRUE, 'u_name' => $uresult[0]->u_name,'u_lname' => $uresult[0]->u_lname,'u_id' => $uresult[0]->u_id,'u_class' => $uresult[0]->u_class,'u_batch' => $uresult[0]->u_batch,'u_status' => $uresult[0]->u_status,'u_card' => $uresult[0]->u_card,'u_mail'=> $uresult[0]->u_mail,'u_contact'=> $uresult[0]->u_contact,'profileimg'=> $uresult[0]->profileimg);

				$this->session->set_userdata($sess_data);
				
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert text-center">Wrong Email-ID or Password!</div>');
				redirect('login/index');
			}
		}
    }
}