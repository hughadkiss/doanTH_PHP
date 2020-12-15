<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('taikhoan')) {
			$data = array('dataCart' => $this->showDataCart($this->session->userdata('id')), );
			$this->load->view('gioHang_view', $data, false);
		}
		else {
			$this->session->set_flashdata('dangnhap', 'Bạn phải đăng nhập để vào giỏ hàng');
			redirect('/LoginRegister/dangnhap','refresh');
		}
	}
	public function insert()
	{
		$idpro = $data['pro_detail_id'] = $this->input->post('id');
		$soluong = $data['amount'] = $this->input->post('amount');
		$iduser = $data['member_id'] = $this->session->userdata('id');

		$this->load->model('Cart_model');

		if ($this->Cart_model->insertPro($idpro, $soluong, $iduser)) {
			$this->session->set_flashdata('success', 'Thêm thành công.');
		}
		else {
			$this->session->set_flashdata('fail', 'Thêm thất bại.');
			
		}
		
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	private function showDataCart($id)
	{
		$this->load->model('Cart_model');
		return $this->Cart_model->showDataToCart($id);
	}
	public function deleteData($id)
	{
		$this->load->model('Cart_model');
		if ($this->Cart_model->deleteDataById($id)) {
		 	echo "Xoá thành công";
		 }
		 else {
		 	echo "Xoá không thành công";
		 }
	}
	public function editCart()
	{
		$this->load->model('Cart_Model');
		$id = $this->input->post('id');
		$amount = $this->input->post('amount');
		
	}

}