<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mading_digital extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_home');
    }

    public function index()
    {
        $data['title']='Cari Ruang';
    
        $data['youtube_link'] = "https://www.youtube.com/watch?v=dQw4w9WgXcQ"; // Ganti dengan link YouTube Anda
        
        $this->load->view('frontend/partials/header',$data);
        $this->load->view('frontend/test_youtube', $data);
        $this->load->view('frontend/partials/footer');
    }

    public function fetch() 
    {
        $keyword = $this->input->post('keyword');
        $data = $this->Mod_home->search_data($keyword);
        echo json_encode($data);
    }

    public function get_schedule($kd_ruang) 
    {
        $dayOfWeek = date('w'); // 0 for Sunday, 1 for Monday, ..., 6 for Saturday
        $data = $this->Mod_home->get_jadwal_by_day($kd_ruang, $dayOfWeek);
        echo json_encode($data);
    }
}
