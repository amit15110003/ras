<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testmodal extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    

	function get_test()
	{
        $query = $this->db->get('test');
		return $query->result();
	}
	function get_batch()
	{
        $query = $this->db->get('batch');
		return $query->result();
	}

	function add_test($data)
	{
        return $this->db->insert('test', $data);
	}
	function sturesultinsert($data)
	{
        return $this->db->insert('sturesults', $data);
	}

}?>