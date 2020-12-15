<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LogReg_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function InsertMember($yourname, $address, $username, $password, $sdt, $email, $confirm)
	{
		$this->db->where('taikhoan', $username);
		$demuser = $this->db->get('member')->num_rows();
		if ($password != $confirm) {
			
			echo "Mật khẩu nhập lại chưa trùng khớp.";
		} else if (!$demuser) {
			$object = array('hoten' => $yourname, 'diachi' => $address, 'taikhoan' => $username, 'matkhau' => $password, 'sdt' => $sdt, 'email' => $email);
			$this->db->insert('member', $object);
			$this->session->set_flashdata('status', 'Đăng ký thành công.');
			redirect('/LoginRegister/dangky','refresh');
		} else {
			$this->session->set_flashdata('error', 'Tên đăng nhập đã tồn tại.');
			redirect('/LoginRegister/dangky','refresh');
		}
		
	}
	public function GetUser($tk)
	{

		$this->db->where('taikhoan', $tk);
		$arrmember = $this->db->get('member')->row_array();
		return $arrmember;
	}
	// public function changePassByPass($pass)
	// {
	// 	$this->db->select('*');
	// 	$this->db->where('matkhau', $pass);
	// 	return $this->db->get('member')->result_array();
	// }
	public function GetPass($user)
	{
		$this->db->select('matkhau');
		$this->db->where('taikhoan', $user);
		return $this->db->get('member')->row_aray();
	}

}

/* End of file register_model.php */
/* Location: ./application/models/register_model.php */