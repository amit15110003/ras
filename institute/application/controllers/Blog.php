<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('blogmodal');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}
	public function index()
	{   
		$data['query']=$this->blogmodal->get_blog();
		$this->load->view('header');
		$this->load->view('viewblog',$data);
		$this->load->view('footer');
	}
	public function insertblog()
	{
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
	}
	public function add_blog()
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
				'bl_title' => $this->input->post('bl_title'),
				'bl_desc' => $this->input->post('bl_desc'),
				'bl_date' => $this->input->post('bl_date'),
				'bl_status' => $this->input->post('bl_status'),
				'bl_image' => $picture
			);
			
			if ($this->blogmodal->add_blog($data))
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
	public function blog_id($bl_id)
	{   $details=$this->blogmodal->blogbyid($bl_id);
        	    	$data['bl_id'] = $details[0]->bl_id;
        			$data['bl_title'] = $details[0]->bl_title;
        			$data['bl_desc'] = $details[0]->bl_desc;
        			$data['bl_date'] = $details[0]->bl_date;
        			$data['r_type'] = $details[0]->r_type;
        			
					$data['bl_image'] = $details[0]->bl_image;
     			$this->load->view('header');
				$this->load->view('blogdisplay',$data);
				$this->load->view('footer');
	}

	public function update_blog()
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
            $bl_id=$this->input->post('bl_id');
		 	$del_image=$this->input->post('bl_image');
		 	if(!empty($picture))
		 	{
		 		unlink("../uploads/".$del_image);
		 		unlink("../uploads/thumb/".$del_image);
		 	}
		 	else{$picture=$del_image;}

			$data = array
			(
				'bl_title' => $this->input->post('bl_title'),
				'bl_desc' => $this->input->post('bl_desc'),
				'bl_status' => $this->input->post('bl_status'),
				'bl_image' => $picture
			);
			
			if ($this->blogmodal->update_blog($bl_id,$data))
			{
				$this->session->set_flashdata('msg','<div class="">Updated Successfully</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
			}
		
	}

	public function toggle_blog($bl_id,$bl_status)
	{        
	        $bl_status1=1-$bl_status;
			if ($this->blogmodal->toggle_blog($bl_id,$bl_status1))
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
