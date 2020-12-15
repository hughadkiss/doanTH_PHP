<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('ShowData');
		$dulieu = $this->ShowData->getDatabaseAll();
		$dulieu = array(
			'dulieucontroller' => $dulieu,
			'tieude' => 'Tất cả sản phẩm'
		);
		$this->load->view('product_view', $dulieu);

	}
	public function products($cat_id)
	{
		$this->load->model('ShowData');
		$dulieu = $this->ShowData->getDatabase($cat_id);
		$dulieu = array(
			'dulieucontroller' => $dulieu,
			'tieude' => 'Thời trang nam'
		);
		$this->load->view('product_view', $dulieu);
	}

	public function getProductDetail($id)
	{
		$this->load->model('ShowData');
		$data = $this->ShowData->getProductDetailByProductId($id);

		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	public function showpro($a)
	{
		$this->load->model('ShowData');
		$this->ShowData->count_all($a);

	}

}

/* End of file Product_Controller.php */
/* Location: ./application/controllers/Product_Controller.php */