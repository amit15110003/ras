<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blogmodal extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	function get_blog()
	{
        $query = $this->db->get('blog');
		return $query->result();
	}
	function blogbyid($bl_id)
	{
		$this->db->where('bl_id', $bl_id);
        $query = $this->db->get('blog');
		return $query->result();
	}
	function update_blog($bl_id,$data)
	{
		$this->db->where('bl_id',$bl_id);
		return $this->db->update('blog', $data);
		
	}
	function add_blog($data)
	{
		return $this->db->insert('blog', $data);
	}
	function toggle_blog($bl_id,$r_status)
	{
		$this->db->where('bl_id', $bl_id);
		$data['bl_status'] = $bl_status;
		return $this->db->update('blog', $data);
	}
	
}?>