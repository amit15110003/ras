<?php
class profile extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url', 'html','text','typography','date'));
		$this->load->library(array('session', 'form_validation','pagination'));
		$this->load->database();
		$this->load->model('user');
		if(!$this->session->userdata('u_id')){
                redirect('ras', 'refresh');
         }

	}
	
	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		
		if ($this->form_validation->run() == FALSE)
        {
        	$details = $this->user->get_user_by_id($this->session->userdata('u_id'));
        	$data['u_contact'] = $details[0]->u_contact;
        	$data['u_add'] = $details[0]->u_add;
        	$data['u_class'] = $details[0]->u_class;
        	$data['u_batch'] = $details[0]->u_batch;
        	$data['u_pcontact'] = $details[0]->u_pcontact;
        	$data['u_name'] = $details[0]->u_name;
        	$data['u_mail'] = $details[0]->u_mail;
        	$data['profileimg'] = $details[0]->profileimg;
                        $this->load->view('header');
			$this->load->view('student',$data);
			$this->load->view('footer');

        }
		else
		{
			$id=$this->session->userdata('u_id');
		    $fname=$_POST['u_name'];
		    $contact=$_POST['u_contact'];
			$result=$this->user->update($id, $fname, $contact);

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

	public function profileimg()
	{
			$id=$this->session->userdata('u_id');
		    $profileimg=$_POST['img'];
			$result=$this->user->update_img($id,$profileimg);

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

	public function password()
	{	
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		if ($this->form_validation->run() == FALSE)
        {
        	$details = $this->user->get_user_by_id($this->session->userdata('u_id'));
        	$data['ucontact'] = $details[0]->contact;
        	$data['fname'] = $details[0]->fname;
        	$data['email'] = $details[0]->email;
        	$data['lname'] = $details[0]->lname;
        	$data['profileimg'] = $details[0]->profileimg;
                        $this->load->view('header');
			$this->load->view('profile',$data);
        }
		else
		{
			$id=$this->session->userdata('u_id');
		    $password=$_POST['password'];
			$result=$this->user->updatepass($id, $password);

		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile');
			}
		}
	}

	
	  public function asked()
	{

		 $config = array();
        $config["base_url"] = base_url() . "index.php/profile/asked";
        $config["total_rows"] = $this->user->countqbyid($this->session->userdata('u_id'));
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$details['query']=$this->user->showquestionbyid($config["per_page"], $page,$this->session->userdata('u_id'));
        $details["links"] = $this->pagination->create_links(); 
                $this->load->view('header');
				$this->load->view('asked',$details);
				$this->load->view('footer');
       
	}

	 public function deletepost()
    {
    	$uid=$this->session->userdata('u_id');
    	$id=$this->input->post('postid');
		$this->db->delete('question', array('id'=>$id,
                                          'u_id'=>$u_id));
		$this->db->delete('rply', array('qid'=>$id));
    }
	
    // result
	public function sturesult()
	{	$u_card=$this->session->userdata('u_card');
		$data['query']=$this->user->get_sturesult($u_card);
                $this->load->view('header');
				$this->load->view('sturesult',$data);
				$this->load->view('footer');
       
	}

	// attendance
	public function attend()
	{	$u_id=$this->session->userdata('u_id');
		$details=$this->user->get_attend($u_id);
		if (!empty($details)) {
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
					$data['dece'] = $details[0]->dece;}
					else{
						$data['jan'] = 0;
        			$data['feb'] = 0;
        			$data['mar'] = 0;
					$data['apr'] = 0;
					$data['may'] = 0;
					$data['jun'] = 0;
					$data['jul'] = 0;
					$data['aug'] = 0;
					$data['sep'] = 0;
					$data['oct'] = 0;
					$data['nov'] = 0;
					$data['dece'] = 0;
					}
                $this->load->view('header');
				$this->load->view('attend',$data);
				$this->load->view('footer');
       
	}

		
}