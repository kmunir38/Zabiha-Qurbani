<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        redirect('/admin');
    }

    public function index()
    {
        redirect('/admin');
    }
}