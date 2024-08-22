<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_auth');
    }

    // Default function to redirect to the login page or dashboard
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        } else {
            $this->load->view('backend/auth/login');
        }
    }

    // Function to handle the login process
    public function login()
    {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Log the attempt
            log_message('debug', "Attempting login with username: $username");

            $user = $this->Mod_auth->validate_login($username, $password);

            if ($user) {
                $this->session->set_userdata(array(
                    'username' => $user['username'],
                    'level_name' => $user['level_name'],
                    'logged_in' => TRUE
                ));

                redirect('dashboard');

                echo json_encode(['status' => 'success', 'username' => $username]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Invalid username or password.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No data provided.']);
        }
    }

    // Function to handle logout
    public function logout()
    {
        $this->session->sess_destroy(); // Destroy session
        redirect('auth'); // Redirect to login page
    }
}
