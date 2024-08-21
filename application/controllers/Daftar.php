<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_daftar');
        $this->load->model('Mod_home');
    }

    public function index()
    {
        $dayOfWeek = date('w'); // 0 for Sunday, 1 for Monday, ..., 6 for Saturday
        $data['ruang'] = $this->Mod_home->get_all_ruang();
        
        // Ambil jadwal untuk semua ruang
        foreach ($data['ruang'] as $ruang) {
            $data['jadwal'][$ruang->kd_ruang] = $this->Mod_home->get_jadwal_by_kd_ruang($ruang->kd_ruang, $dayOfWeek);
        }
        
        $this->load->view('partials/header');
        $this->load->view('frontend/daftar', $data);
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
        $dayOfWeek = date('w');
        $data = $this->Mod_home->get_jadwal_by_kd_ruang($kd_ruang, $dayOfWeek);
        echo json_encode($data);
    }
}

