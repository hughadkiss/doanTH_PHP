<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if (!$this->session->userdata('taikhoan')) {
		// 	redirect('logReg_Model');
		// }
	}

	public function index()
	{
		$this->load->view('home_view');
	}

}

/* End of file Home_Controller.php */
/* Location: ./application/controllers/Home_Controller.php */