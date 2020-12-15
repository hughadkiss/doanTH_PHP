<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertPro($idpro, $amount, $iduser)
	{
		$dulieu = array('pro_detail_id' =>$idpro, 'amount' =>$amount, 'member_id' =>$iduser);
		$this->db->insert('cart', $dulieu);
		return $this->db->insert_id();
	}
	public function showDataToCart($id)
	{
		// $this->db->select('*');
		// $this->db->where('', $Value);
		// $ketqua = $this->db->get('cart', 'product_details', 'member');
		// $kq = $ketqua->result_array();
		// echo "<pre>";
		// var_dump($kq);
		$sql = "SELECT product_details.product_id,cart.pro_detail_id,cart.member_id, product.pro_img, cart.amount, product.price, product.pro_name, product_details.size, product_details.color, cart.id
		from cart
		join product_details on cart.pro_detail_id = product_details.id
		join product on product_details.product_id = product.id
		where cart.member_id = ".$id;
		return $this->db->query($sql)->result_array();
	}
	public function deleteDataById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('cart');
	}
	public function editById($id, $amount)
	{
		$this->db->trans_start();
		foreach ($id as $key => $value) {
			$this->db->where('id', $value);
			$data = array('amount' => $amount[$key]);
			$this->db->update('cart', $data);
		}
		return $this->db->trans_complete();
	}
}

/* End of file Cart_model.php */
/* Location: ./application/models/Cart_model.php */