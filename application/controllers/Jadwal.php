<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('backend/partials/header');
        $this->load->view('backend/jadwal/view');
        $this->load->view('backend/partials/footer');
    }

    public function add()
    {
        $this->load->view('backend/partials/header');
        $this->load->view('backend/jadwal/add');
        $this->load->view('backend/partials/footer');
    }
}

