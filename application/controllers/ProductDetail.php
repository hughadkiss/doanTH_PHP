<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductDetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('productDetail_view');
	}

}

/* End of file ProductDetail_Controller.php */
/* Location: ./application/controllers/ProductDetail_Controller.php */