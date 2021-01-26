<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kaji_cepat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cek_status();
        $this->CI = &get_instance();
    }

    public function index()
    {

        $data = [
            'title' => 'SIM TANGGAP DARURAT ',
            'parent' => 'Assesment ',
            'child' => 'Kaji Cepat ',
            'users' => $this->db->get_where('tbl_users', ['nik' => $this->session->userdata('nik')])->row_array(),
            'account' => $this->Users_model->getAll()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('relawan/assesment/kaji_cepat/index');
        $this->load->view('templates/footer');
    }
}
