<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Login
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Login extends CI_Controller
{
    
  function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->library('session');
		// $this->load->model('log_model');
	}
 
	public function index()
	{
    $data_initial = [
      'title'     => "Security Logbook - Angkasa Pura | Airports"
    ];
		$this->load->view('view_login',$data_initial);
	}
 
	public function proses()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

    // echo $username.''.$password;die;

		if($this->auth_model->login_user($username,$password))
		{
			$parameter = [
				'execution' => 'LOGIN',
				'name' => $this->session->userdata('nama')
			];
			// $this->log_model->log($parameter);
			redirect('main');
		}
		else
		{
			$this->session->set_flashdata('error','Username atau Password salah');
			redirect('login');
		}
	}
 
	public function logout()
	{
		$parameter = [
			'execution' => 'LOGOUT',
			'name' => $this->session->userdata('nama')
		];
		// $this->log_model->log($parameter);
		$this->session->sess_destroy();
		redirect('login');
	}

	public function profile(){
		$this->load->view('header.php');
		$this->load->view('halaman_profil.php');
		$this->load->view('footer.php');
	}

}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */