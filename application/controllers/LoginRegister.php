<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LoginRegister extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if ($this->session->userdata('taikhoan')) {
		// 	redirect('/','refresh');
		// }
		$this->load->library('session');
	}

	public function index()
	{

	}
	public function dangnhap()
	{
		$this->load->view('login_view');
	}

	//lấy dữ liệu đăng nhập
	public function getLogin()
	{
		$tk = $this->input->post('username');
		$mk = md5($this->input->post('password'));
		//Gửi user sang model để so sánh
		$this->load->model('LogReg_Model');
		$arrmember = $this->LogReg_Model->GetUser($tk);
		if ($arrmember && $arrmember['matkhau'] == $mk) {
			$this->session->set_userdata($arrmember);
			redirect('Index','refresh');
		}
		else {
			$this->session->set_flashdata('error', 'Sai tên tài khoản hoặc mật khẩu.');
			redirect('/LoginRegister/dangnhap','refresh');
		}
	}
	
	public function logout()
	{
		if ($this->session->userdata('taikhoan')) {
			$this->session->sess_destroy('taikhoan');
			// $this->session->unset_userdata('taikhoan');
			redirect('Index','refresh');
		}
	}



	public function dangky()
	{
		$this->load->view('Register_view');
	}

	//lấy dữ liệu đăng ký
	public function getRegister()
	{
		$this->load->view('Register_view');
		$yourname = $this->input->post('yourname');
		$address = $this->input->post('address');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$sdt = $this->input->post('sdt');
		$email = $this->input->post('email');
		$confirm = md5($this->input->post('confirm'));
		$this->load->model('logReg_Model');
		$this->logReg_Model->insertMember($yourname, $address, $username, $password, $sdt, $email, $confirm);
		
	}
	public function changePassword()
	{
		$this->load->model('LogReg_Model');
		$this->LogReg_Model->GetPass('passold');
		
	}

}