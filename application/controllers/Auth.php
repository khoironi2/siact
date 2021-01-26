<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/auth_header');
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}
	public function loginForm()
	{
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {

			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('/auth');
		} else {

			$nik = htmlspecialchars($this->input->post('nik'));
			$pass = htmlspecialchars($this->input->post('password'));
			$cek_login = $this->Auth_model->cek_login($nik);

			if ($cek_login == FALSE) {
				$this->session->set_flashdata('error_login', '<p class="mb-4" style="font-size: 12px; color:#f25767; text-align:center;">NIK yang Anda masukan tidak terdaftar.</p>');
				redirect('auth');
			} else {

				if (password_verify($pass, $cek_login->password)) {
					$this->session->set_userdata('id_users', $cek_login->id_users);
					$this->session->set_userdata('nama_lengkap', $cek_login->nama_lengkap);
					$this->session->set_userdata('nik', $cek_login->nik);
					$this->session->set_userdata('email', $cek_login->email);
					$this->session->set_userdata('id_jabatan', $cek_login->id_jabatan);
					date_default_timezone_set("ASIA/JAKARTA");
					//$email = $this->session->userdata('email');
					$data = array('time_login_users' => date('Y-m-d H:i:s'));
					$this->Auth_model->logout($data, $nik);
					redirect('komandan/dashboard');
				} else {

					$this->session->set_flashdata('error_login', '<p class="mb-4" style="font-size: 12px; color:#f25767; text-align:center;">NIK atau password yang Anda masukan salah.</p>');
					redirect('auth');
				}
			}
		}
	}

	public function register()
	{

		$this->load->view('auth/register');
	}

	public function registerform()
	{

		$this->form_validation->set_rules('nik', 'Nik', 'required');
		// $this->form_validation->set_rules('level', 'Level', 'required');

		if ($this->form_validation->run() == FALSE) {

			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('user/account/add');
		} else {

			$nama_lengkap = $this->input->post('nama_lengkap');
			$nik = $this->input->post('nik');
			$password = $this->input->post('password');
			$pass = password_hash($password, PASSWORD_DEFAULT);
			$id_jabatan = $this->input->post('id_jabatan');
			// $level = $this->input->post('level');
			date_default_timezone_set("ASIA/JAKARTA");
			$data = [
				'nama_lengkap' => $nama_lengkap,
				'nik' => $nik,
				'password' => $pass,
				'id_jabatan' => $id_jabatan,
				'time_create_users' => date('Y-m-d H:i:s')
			];

			$insert = $this->Auth_model->register("tbl_users", $data);
			//$insert = $this->db->insert('tbl_users', $data);

			if ($insert) {
				$this->session->set_flashdata('success', 'success');
				redirect('/user/account/add');
			}
		}
	}

	public function logout()
	{
		date_default_timezone_set("ASIA/JAKARTA");
		$nik = $this->session->userdata('nik');
		$data = array('time_logout_users' => date('Y-m-d H:i:s'));

		$this->Auth_model->logout($data, $nik);
		$this->session->sess_destroy();
		echo '<script>
            alert("Sukses! Anda berhasil logout."); 
            window.location.href="' . base_url('/') . '";
            </script>';
	}
}
