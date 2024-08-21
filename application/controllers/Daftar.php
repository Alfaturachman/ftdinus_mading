<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_daftar');
    }

    public function index()
    {

        $this->load->view('partials/header');
        $this->load->view('frontend/daftar');
        $this->load->view('partials/footer');
    }

    public function fetch()
    {
        $keyword = $this->input->post('keyword');
        $data = $this->Mod_daftar->search_data($keyword);
        echo json_encode($data);
    }

    public function get_schedule($kd_ruang)
    {
        $data = $this->Mod_daftar->get_jadwal($kd_ruang);
        echo json_encode($data);
    }
}
