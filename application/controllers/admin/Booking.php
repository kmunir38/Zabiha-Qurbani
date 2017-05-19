<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['qurbani_user_id'])) {
            redirect('/admin','refresh');
        }
       $this->load->model('User_model', 'user');
    }

    public function index()
    {
        $data['title'] = 'Booking';
        $data['mainContent'] = 'admin/booking';
        $this->load->view('admin/layout/master', $data);
    }
}