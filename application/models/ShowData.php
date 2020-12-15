<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowData extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getDatabaseAll()
	{
		$this->db->select('*');
		$ketqua = $this->db->get('product');
		$toArr = $ketqua->result_array();
		// echo "<pre>";
		// var_dump($toArr);
		return $toArr;
	}
	public function getDatabase($cat_id)
	{
		$this->db->select('*');
		$this->db->where('cat_id', $cat_id);
		return $this->db->get('product')->result_array();
	}

	public function getProductDetailByProductId($id)
	{
		$this->db->where('product_id', $id);
		return $this->db->get('product_details')->result_array();

	}
	public function list($number, $offset)
	{
		$query =  $this->db->get('product',$number,$offset);
		 return $query->result_array();
	}


}

/* End of file showData.php */
/* Location: ./application/models/showData.php */