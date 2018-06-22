<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class resultmodal extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	function get_result()
	{
        $query = $this->db->get('result');
		return $query->result();
	}
	function resultbyid($r_id)
	{
		$this->db->where('r_id', $r_id);
        $query = $this->db->get('result');
		return $query->result();
	}
	function update_result($r_id,$data)
	{
		$this->db->where('r_id', $r_id);
		return $this->db->update('result', $data);
		
	}
	function add_result($data)
	{
		return $this->db->insert('result', $data);
	}
	function toggle_result($r_id,$r_status)
	{
		$this->db->where('r_id', $r_id);
		$data['r_status'] = $r_status;
		return $this->db->update('result', $data);
	}
	
}?>