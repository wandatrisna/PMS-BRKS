<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    function index()
    {
        if ($this->session->userdata('NIK')) {
            redirect('User');
        }
            $this->form_validation->set_rules('NIK', 'NIK', 'required',[
            'required' => 'Required!'
        ]);
            $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Required!'
        ]);
            if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer");
            } else {
            $this->cek_login();
        }
    }

	public function cek_login()
    {
        $NIK = $this->input->post('NIK');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['NIK' => $NIK])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'NIK' => $user['NIK'],
                    'role' => $user['role'],
                    'id_user' => $user['id_user'],
                ];
                $this->session->set_userdata($data);
                if ($user['role' == 'Superuser']) {
                    redirect('Dashboard');
                } else if ($user['role' == 'Superuser']) {
                    redirect('Dashboard');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Wrong Password!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Unregistered!</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('role');
        redirect('Auth');
    }
}