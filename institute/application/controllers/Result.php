<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class result extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('resultmodal');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}
	public function index()
	{   
		$data['query']=$this->resultmodal->get_result();
		$this->load->view('header');
		$this->load->view('viewresult',$data);
		$this->load->view('footer');
	}
	public function insertresult()
	{
		$this->load->view('header');
		$this->load->view('result');
		$this->load->view('footer');
	}
	public function add_result()
	{   
		if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."image";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'height' => 400
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
		
			$data = array
			(
				'r_name' => $this->input->post('r_name'),
				'r_desc' => $this->input->post('r_desc'),
				'r_year' => $this->input->post('r_year'),
				'r_type' => $this->input->post('r_type'),
				'r_status' => $this->input->post('r_status'),
				'r_image' => $picture
			);
			
			if ($this->resultmodal->add_result($data))
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
	public function result_id($r_id)
	{   $details=$this->resultmodal->resultbyid($r_id);
        	    	$data['r_id'] = $details[0]->r_id;
        			$data['r_name'] = $details[0]->r_name;
        			$data['r_desc'] = $details[0]->r_desc;
        			$data['r_year'] = $details[0]->r_year;
        			$data['r_type'] = $details[0]->r_type;
        			
					$data['r_image'] = $details[0]->r_image;
     			$this->load->view('header');
				$this->load->view('resultdisplay',$data);
				$this->load->view('footer');
	}

	public function update_result()
	{	if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."image";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'height' => 400
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
            $r_id=$this->input->post('r_id');
		 	$del_image=$this->input->post('r_image');
		 	if(!empty($picture))
		 	{
		 		unlink("../uploads/".$del_image);
		 		unlink("../uploads/thumb/".$del_image);
		 	}
		 	else{$picture=$del_image;}

			$data = array
			(
				'r_name' => $this->input->post('r_name'),
				'r_desc' => $this->input->post('r_desc'),
				'r_type' => $this->input->post('r_type'),
				'r_status' => $this->input->post('r_status'),
				'r_image' => $picture
			);
			
			if ($this->resultmodal->update_result($r_id,$data))
			{
				$this->session->set_flashdata('msg','<div class="">Updated Successfully</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
			}
		
	}

	public function toggle_result($r_id,$r_status)
	{        
	        $r_status1=1-$r_status;
			if ($this->resultmodal->toggle_result($r_id,$r_status1))
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
