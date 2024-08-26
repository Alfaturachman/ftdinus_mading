<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mading extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_mading');
    }

    public function index()
    {
        // Update status konten yang kedaluwarsa
        $this->Mod_mading->update_expired_status();

        $data['title']='Mading Digital';    
        $data['mading_umum']=$this->Mod_mading->get_mading_umum();
        $data['mading_mahasiswa']=$this->Mod_mading->get_mading_mahasiswa();
        $this->load->view('frontend/mading',$data);
    }
}
