<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_mading extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_backend');
    }

    public function index()
    {
        $data['mading'] = $this->Mod_backend->get_mading();
        $this->load->view('backend/partials/header');
        $this->load->view('backend/mading/view', $data);
        $this->load->view('backend/partials/footer');
        $this->check_login(); // Ensure user is logged in
    }

    private function check_login()
    {
        // Check if user is logged in
        if (!$this->session->userdata('logged_in')) {
            // Redirect to login page if not logged in
            redirect('auth');
        }
    }

    public function add_view()
    {
        $this->load->view('backend/partials/header');
        $this->load->view('backend/mading/add');
        $this->load->view('backend/partials/footer');
    }

    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('expire', 'Waktu Selesai', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->add_view();
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $upl_time = date('Y-m-d H:i:s', time());

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|mp4';
            $config['max_size'] = 102400; // Limit to 100MB
            $config['file_name'] = 'mading_' . time(); // Rename the file to prevent conflicts

            $this->load->library('upload', $config);

            // Upload Image
            if (!$this->upload->do_upload('mading_img')) {
                $error = $this->upload->display_errors();
                echo "File tidak dapat diunggah: " . $error;
                return;
            } else {
                $gambar = $this->upload->data('file_name');
            }

            // Upload Video (Optional)
            $video = null; // Set default to null
            if (!empty($_FILES['mading_vid']['name'])) {
                if (!$this->upload->do_upload('mading_vid')) {
                    $error = $this->upload->display_errors();
                    echo "File tidak dapat diunggah: " . $error;
                    return;
                } else {
                    $video = $this->upload->data('file_name');
                }
            }

            $data = array(
                'upl_time' => $upl_time,
                'judul' => $this->input->post('judul'),
                'kategori' => $this->input->post('kategori'),
                'mading_img' => $gambar,
                'mading_vid' => $video, // This will be null if no video was uploaded
                'expire' => $this->input->post('expire')
            );

            $this->Mod_backend->add_mading($data);
            redirect('admin_mading');
        }
    }
}
