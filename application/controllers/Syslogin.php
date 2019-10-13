<?php 
 
class Syslogin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status') == "login") {
            redirect(base_url("admin"));
        }
		$this->load->model('m_login');
	}
 
	// function index(){
	// 	$this->load->view('admin/pages/v_login');
	// }


	public function index(){
        $data = array (
            'sheader' => 'dashboard/ext/sheader',
            'header' => 'dashboard/vmenu/header',
            'content' => 'dashboard/pages/vlogin',
            'footer'=> 'dashboard/vfooter/footer',
            'sfooter'=> 'dashboard/ext/sfooter',     
        );
        $this->load->view("dashboard/index", $data);
    }
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 			$this->session->set_flashdata('true_login', 'Selamat Datang');
			redirect(base_url("admin"));
 
		}else{
			$this->session->set_flashdata('wrong_login', 'Username atau Password Salah');
			redirect(base_url("login"));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}