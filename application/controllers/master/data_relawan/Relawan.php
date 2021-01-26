<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Relawan extends CI_Controller
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
            'parent' => 'Master Data ',
            'child' => 'Relawan',
            'users' => $this->db->get_where('tbl_users', ['nik' => $this->session->userdata('nik')])->row_array(),
            'account' => $this->Users_model->getAll()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('master/relawan/index');
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data = [
            'title' => 'SIM TANGGAP DARURAT ',
            'parent' => 'Master Data ',
            'child' => 'Relawan',
            'son' => 'Tambah Relawan',
            'users' => $this->db->get_where('tbl_users', ['nik' => $this->session->userdata('nik')])->row_array(),
            'account' => $this->Users_model->getAll()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('master/relawan/add');
        $this->load->view('templates/footer');
    }
}
