<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    function adminlogin($email, $pwd)
	{
		$this->db->where('a_mail', $email);
		$this->db->where('a_pass', md5($pwd));
        $query = $this->db->get('admin_login');
        $data['a_lastseen'] = date("Y-m-d H:i:s");
		$update = $this->db->update('admin_login',$data);
		return $query->result();
	}

	function insert_admin($data)
    {
    	$data['a_created'] = date("Y-m-d H:i:s");
		return $this->db->insert('admin_login', $data);
	}

	function update_admin($id,$data)
	{
		$this->db->where('a_id',$id);
		return $this->db->update('admin', $data);
	}
	
	function update_admin_login($id,$logindata)
	{
		$this->db->where('a_id',$id);
		return $this->db->update('admin_login', $logindata);
	}

	function get_admin($id)
	{
		$this->db->where('a_id', $id);
        $query = $this->db->get('admin');
		return $query->result();
	}

	function get_admin_login($id)
	{
		$this->db->where('a_id', $id);
        $query = $this->db->get('admin_login');
		return $query->result();
	}

	function get_members()
	{
        $query = $this->db->get('admin_login');
		return $query->result();
	}

	function add_member($data)
	{
		return $this->db->insert('admin_login', $data);
	}
	function update_member($u_id,$data)
	{
		$this->db->where('a_id', $a_id);
		return $this->db->update('member', $data);
		
	}
	function memberbyid($u_id)
	{
		$this->db->where('a_id', $a_id);
        $query = $this->db->get('member');
		return $query->result();
	}


	function toggle_member($a_id,$status)
	{
		$this->db->where('a_id', $a_id);
		$data['status'] = $status;
		return $this->db->update('admin_login', $data);
	}

	function update_pass($id,$logindata)
	{
		$this->db->where('a_id',$id);
		return $this->db->update('admin_login', $logindata);
	}
	function get_batch()
	{
        $query = $this->db->get('batch');
		return $query->result();
	}
	function add_batch($data)
	{
		return $this->db->insert('batch', $data);
	}
	function toggle_batch($b_id,$b_status)
	{
		$this->db->where('b_id', $b_id);
		$data['b_status'] = $b_status;
		return $this->db->update('batch', $data);
	}
	function get_user()
	{
        $query = $this->db->get('user');
		return $query->result();
	}
	function get_category()
	{
        $query = $this->db->get('category');
		return $query->result();
	}
	function add_category($data)
	{
		return $this->db->insert('category', $data);
	}
	function toggle_category($c_id,$c_status)
	{
		$this->db->where('c_id', $c_id);
		$data['c_status'] = $c_status;
		return $this->db->update('category', $data);
	}



}?>