<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }
    
    public function index()
    {
        if (isset($_SESSION['qurbani_user_id'])) {
            redirect('/admin/home/dashboard','refresh');
        }
        
        $this->load->view('admin/index');
    }

    public function validate()
    {
        $where = [
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        ];

        $query = $this->user->validate_credentials($where);

        if ($query)
        {
            $shareitnow_data = [
                'qurbani_fullname' => $query->name,
                'qurbani_user_id' => $query->id,
                'qurbani_is_logged_in' => TRUE
            ];

            $this->session->set_userdata($shareitnow_data);

            redirect('/admin/home/dashboard','refresh');
        }
        else
        {
            $data['error'] = "Sorry! Your Credentials didn't match our records";
            $this->load->view('admin/index', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/admin','refresh');
    }

    public function dashboard()
    {
        if (!isset($_SESSION['qurbani_user_id'])) {
            redirect('/admin/','refresh');
        }
        $data['title'] = 'Dashboard';
        $data['mainContent'] = 'admin/dashboard';
        $this->load->view('admin/layout/master', $data);
    }
}
