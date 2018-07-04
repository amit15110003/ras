<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        $this->tableName = 'user';
		$this->primaryKey = 'id';
    }
	//user
	function insert_user($data)
    {
    	$data['u_visit'] = date("Y-m-d H:i:s");
		return $this->db->insert('user', $data);
	}
	function get_user($u_card,$u_pass)
	{
		$this->db->where('u_card', $u_card);
		$this->db->where('u_contact', $u_pass);
        $query = $this->db->get('user');
		return $query->result();
	}
	function get_user_by_id($id)
	{
		$this->db->where('u_id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	function update_img($id,$profileimg)
        {	
    	$data = array('profileimg'=>$profileimg);
    	$this->db->where('u_id', $id);
		return $this->db->update('user', $data);
	}
	//product
	public function showcategory()
	{
		$query=$this->db->get('category');
		return $query->result();
	}
	public function showresult($year)
	{	
		$this->db->where('r_year', $year);
		$query=$this->db->get('result');
		return $query->result();
	}
	public function showresultyear()
	{	
		$this->db->distinct();
		$this->db->select("r_year");
		$this->db->order_by("r_year", "desc");
		$query=$this->db->get('result');
		return $query->result();
	}
	function countproduct_category($category)
	{	
		$this->db->where('p_category', $category);
		$this->db->where('p_status', "1");
		$this->db->select_sum('id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	public function showproduct_category($limit, $start,$category)
	{	
		$this->db->limit($limit, $start);
		$this->db->where('p_category', $category);
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function get_product_id($p_category,$p_name)
	{	
		$this->db->where('p_category', $p_category);
		$this->db->where('p_name', $p_name);
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		return $query->result();
	}
	public function get_product_by_id($p_id)
	{	
		$this->db->where('p_id', $p_id);
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		return $query->result();
	}

	public function showproduct_mostview_cat()
	{ 	$this->db->limit(8);
		$this->db->order_by("p_view", "desc");
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		return $query->result();
	}
	function updateview($p_id,$p_view)
    {	
    	$data = array('p_view'=>$p_view);
    	$this->db->where('p_id', $p_id);
		return $this->db->update('product', $data);
	}
	function get_cart_qty($u_id,$p_id)
	{
	    $this->db->where('p_id', $id);
	    $this->db->where('u_id', $uid);
	    $query = $this->db->get('cart');
	    return $query->result();
	}
	function countproduct($id)
	{	
		$this->db->where('u_id', $id);
		$this->db->select_sum('id');
	    $this->db->from('cart');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	//wishlist
	public function showwishlist($id)
	{	
		$this->db->where('u_id', $id);
		$query=$this->db->get('wishlist');;
		return $query->result();
	}
	//cart
	public function showcart($u_id)
	{	
		$this->db->where('u_id', $u_id);
		$query=$this->db->get('cart');;
		return $query->result();
	}
	//subscribe
	function insert_subscriber($email)
    {$data = array('s_mail'=>$email);
		return $this->db->insert('subscribe', $data);
	}
	//message
	function insert_contact($data)
    {
		return $this->db->insert('contact', $data);
	}

	public function showblog()
	{	
		$query=$this->db->get('blog');;
		return $query->result();
	}
	public function showblog_name($title)
	{	
		$this->db->where('bl_title', $title);
		$query=$this->db->get('blog');;
		return $query->result();
	}

	//questions

	public function showquestion($limit, $start)
	{	
		$this->db->limit($limit, $start);
		$this->db->order_by("id","desc");
		$this->db->order_by("posted","desc");
		$query=$this->db->get('question');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	
	}
	 public function showquestionc()
	{
		$this->db->where('sub', 'chemistry');
		$this->db->order_by("Upper(id)","desc");
		$query=$this->db->get('question');
		
		return $query->result();
	} 
	public function showquestionm()
	{ 
		$this->db->where('sub', 'mathematics');
		$this->db->order_by("Upper(id)","desc");
		$query=$this->db->get('question');
		
		return $query->result();
	} 
	public function showquestionp()
	{
		$this->db->where('sub', 'physics');
		$this->db->order_by("Upper(id)","desc");
		$query=$this->db->get('question');
		
		return $query->result();
	}
	function insert_question($data)
    { 	
    	$data['posted'] = date("Y-m-d H:i:s");
    	return $this->db->insert('question', $data);
	}

	public function showquestion1($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get('question');
		
		return $query->result();
	}
        
        public function showquestionbyid($limit, $start,$id)
	{		
		$this->db->limit($limit, $start);
		$this->db->order_by("id","desc");
		$this->db->order_by("posted","desc");
		$this->db->where('u_id', $id);
		$query=$this->db->get('question');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
        
        public function deletequestion($id)
	{
		$this->db->where('id', $id);
                return ($this->db->delete('question'));
	}
        
	function insert_rply($data)
    {
    	return $this->db->insert('rply', $data);
	}
	public function showrply($id)
	{
		$this->db->where('qid', $id);
		$query=$this->db->get('rply');
		
		return $query->result();
	}
	
	function insert_view($id, $view)
	{
		$data1 = array('view'=>$view);
		$this->db->where('id', $id);
        return $this->db->update('question', $data1);
	}
        

	function countq()
	{
		$this->db->select_sum('id');
	    $this->db->from('question');

	    $total_q = $this->db->count_all_results();

	    if ($total_q > 0)
	    {
	        return $total_q;
	    }

	    return NULL;

	}
	function countqbyid($id)
	{
		$this->db->select_sum('id');
		$this->db->where('u_id', $id);
	    $this->db->from('question');

	    $total_q = $this->db->count_all_results();

	    if ($total_q > 0)
	    {
	        return $total_q;
	    }

	    return NULL;

	}

	function counta()
	{
		$this->db->select_sum('id');
	    $this->db->from('rply');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function counta_id($id)
	{
		$this->db->select_sum('id');
	    $this->db->from('rply');
        $this->db->where('qid', $id);
	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function get_profile($id)
	{
		$this->db->where('u_id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
    function get_sturesult($u_card)
	{

		$this->db->where('stu_uid', $u_card);
		$this->db->join('test', 'test.t_id = sturesults.stu_tid');
        $query = $this->db->get('sturesults');
		return $query->result();
	}
	function get_attend($u_id)
	{

		$this->db->where('us_id', $u_id);
        $query = $this->db->get('attend');
		return $query->result();
	}
	
}?>