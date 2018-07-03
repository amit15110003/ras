<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url', 'html','text','typography','date'));
		$this->load->library(array('session', 'form_validation','pagination'));
		$this->load->database();
		$this->load->model('user');
	}

	public function index()
	{	
		 $config = array();
        $config["base_url"] = base_url() . "index.php/questions/ask";
        $config["total_rows"] = $this->user->countq();
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $details['query']=$this->user->showquestion($config["per_page"], $page);
        $details["links"] = $this->pagination->create_links(); 
                $this->load->view('header');
		$this->load->view('questions',$details);
	}

	public function ask()
	{	
		 $config = array();
        $config["base_url"] = base_url() . "index.php/questions/ask";
        $config["total_rows"] = $this->user->countq();
        $config["per_page"] =10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $details['query']=$this->user->showquestion($config["per_page"], $page);
        $details["links"] = $this->pagination->create_links();

        //$this->load->view("example1", $data);

		//$detail1=$this->user->countq();
		//$content_per_page = 5; 
                
                $this->load->view('header');
		$this->load->view('index',$details);
	}
        
        
        public function question()
	{
          
                
        $this->form_validation->set_rules('quest','quest','required');  
		if ($this->form_validation->run() == FALSE)
        {
			redirect('questions');
		}
		else
		{
		if ($this->session->userdata('u_id')) {
                
                if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|JPG|doc|docx';
                $config['file_name'] = time()."quest";
                $config['max_size']= 10000000;
                $config['max_width'] = 6048;
                $config['max_height']= 6048;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../uploads');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' => 600,
                          'height' => 480
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
                
		$data = array(

				'quest' => ascii_to_entities($this->input->post('quest')),
				'sub' => $this->input->post('sub'),
				'u_id' => $this->session->userdata('u_id'),
				'picture' => $picture
			);
		//$data = $this->security->xss_clean($data);
		if($this->user->insert_question($data))
		{
			$this->session->set_flashdata('msg','<div > Successfully Updated</div>');
				redirect('questions');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div >Oops! Error.  Something Went Wrong</div>');
				redirect('questions');
			}
		}
		
		else{
			$this->session->set_flashdata('msg','<div >Login First!!</div>');
			redirect('questions');
		}

		}
	
	}

	public function answer($qid)
	{	
		
     	$this->form_validation->set_rules('qid', 'qid', 'required');
		$this->form_validation->set_rules('rply', 'rply', 'required');   
		if ($this->form_validation->run() == FALSE)
        {
			$details=$this->user->showquestion1($qid);
			$data['query']=$this->user->showrply($qid);
     	if (!empty($details)){
        	$data['id'] = $details[0]->id;
        	$data['u_id'] = $details[0]->u_id;
        	$data['quest'] = $details[0]->quest;
        	$data['picture'] = $details[0]->picture;
        	$data['view'] = $details[0]->view;
        	$data['posted'] = $details[0]->posted;
        	$data['sub'] = $details[0]->sub;
        	$sess_data = array('qid' => $details[0]->id);

				$this->session->set_userdata($sess_data);
			
				
				$id = $data['id'];
				$view = $data['view']+1;

				$result=$this->user->insert_view($id,$view);
        }
        else {
				$data['id'] = '';
				$data['u_id'] = '';
                                $data['quest'] = '';



			}
                 $this->load->view('header');
		$this->load->view('answer',$data);
		
		}
                else{
                
                if ($this->session->userdata('u_id') >0) {
               if(!empty($_FILES['picture']['name'])){
		 		$config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|JPG|doc|docx';
                $config['file_name'] = time()."answer";
                $config['max_size']= 10000000;
                $config['max_width'] = 6048;
                $config['max_height']= 6048;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../uploads');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'width' => 600,
                          'height' => 480
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
                  $data = array(
				
				'qid' => $this->input->post('qid'),
				'u_id' =>  $this->session->userdata('u_id'),
				'rply' => ascii_to_entities($this->input->post('rply')),
				'picture' => $picture);

			
		if($this->user->insert_rply($data)){
			$this->session->set_flashdata('msg','<div > Successfully Updated</div>');
			$qid=$this->session->userdata('qid');
				redirect('questions/answer/'. $qid);
			}
			else{
				// error
				$this->session->set_flashdata('msg','<div >Oops! Error.  Something Went Wrong</div>');
				$qid=$this->session->userdata('qid');
				redirect('questions/answer/'. $qid);
                            }
		}else{
			$this->session->set_flashdata('msg','<div >Login First!!</div>');
			$qid=$this->session->userdata('qid');
			redirect('questions/answer/'. $qid);
		}

		}
	
		
	}

	public function math()
	{
				
        	$details['query']=$this->user->showquestionm();
     		
		$this->load->view('header');
		$this->load->view('math',$details);
		$this->load->view('footer');
		
		
	
	}

	public function chem()
	{
				
        	$details['query']=$this->user->showquestionc();
     		
		$this->load->view('header');
		$this->load->view('chem',$details);
		$this->load->view('footer');
		
		
	
	}

	public function phy()
	{
				
        	$details['query']=$this->user->showquestionp();
     		
		$this->load->view('header');
		$this->load->view('phy',$details);
		$this->load->view('footer');
		
		
	
	}
        
        public function fed()
	{
		
		$this->form_validation->set_rules('fed', 'fed', 'required');
			

			if ($this->form_validation->run() == FALSE)
        {
        	$this->load->view('header');
			$this->load->view('fed');
			$this->load->view('footer');
        }
		else
		{
			$data = array(
				'uid' => $this->input->post('u_id'),
				'fed' => $this->input->post('fed')
			);
		if ($this->user->insert_fed($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('home/');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('home/fed');
			}
		}
	}
	
        public function asked()
	{
			$details['query']=$this->user->showquestionbyid($this->session->userdata('u_id'));
			//$this->load->view('header');
			$this->load->view('asked',$details);
			$this->load->view('footer');
       
	}
        
        public function Deletequestion($id)
	{
			
		$details['query']=$this->user->showquestionbyid($this->session->userdata('u_id'));
			$this->load->view('header');
			$this->load->view('asked',$details);
			$this->load->view('footer');
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user->deletequestion($id);
	  if($r){
          echo "Successfully Deleted Data";
	  }
	  else {
          echo "Can Not Delete Data";
	  }
	 redirect('home');
	}
	
	public function share()
	{			
				$name=$this->session->userdata('u_name');
				$id=$this->session->userdata('u_id');
				$promo=$name.'_'.$id;
				echo "$this->session->userdata('u_name'); ";
        	$details['query']=$this->user->promo($promo);
     		
		$this->load->view('header');
		$this->load->view('share',$details);
		$this->load->view('footer');
		
		
	
	}
	function logout()
	{
        $data = array('login' => '', 'uname' => '', 'u_id' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('');
	}
        
        public function course()
	{
		$this->load->view('course');}
	
		public function courses()
	{
			//insert user details into db
			$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'school'=> $this->input->post('school'),
				'about' => $this->input->post('about'),
                                'contact' => $this->input->post('contact')
			);
			
			if ($this->user->insert_usercourse($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! </div>');
				redirect('home');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('home/course');
			}
		
	}
		
	
	
        
        
}
