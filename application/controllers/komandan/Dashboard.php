<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_status();
        $this->CI = &get_instance();
    }

    public function index()
    {
        if ($this->CI->router->fetch_class() != "login") {
            // session check logic here...change this accordingly
            if ($this->CI->session->userdata['id_jabatan'] == '12') {
                redirect('relawan/assesment/kaji_cepat');
            } elseif ($this->CI->session->userdata['id_jabatan'] != '13') {
                redirect('');
            }
        }
        $data = [
            'title' => 'Dosen ',
            'parent' => 'Profil ',
            'child' => 'Data Pribadi ',
            'users' => $this->db->get_where('tbl_users', ['nik' => $this->session->userdata('nik')])->row_array(),
            'account' => $this->Users_model->getAll()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('komandan/dashboard/index');
        $this->load->view('templates/footer');
    }
}
