<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Login/Login_model","m_login");
        $this->load->library('form_validation');
    }


	public function index()
	{
		$this->load->view('Login/Login_view');
	}

    public function cekLogin(){
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'nama' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("petugas",$where)->num_rows();
		if($cek > 0){
			$dataLogin = $this->m_login->cek_login("petugas",$where)->row_array();
			$jabatan = $dataLogin['jabatan'];
			$data_session = array(
				'nama' => $username,
				'jabatan' => $jabatan,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			// if($jabatan == 'IT' OR $jabatan == 'ME') {
			// 	redirect(base_url("index.php/Covid19"));
			// }
			// else {
				redirect(base_url("index.php/DashboardCovid"));
			// }
 
		}else{
			echo "Username dan password salah !";
		}
    }

	public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('index.php/login'));
    }
}
