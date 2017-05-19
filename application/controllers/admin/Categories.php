<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['qurbani_user_id'])) {
            redirect('/admin','refresh');
        }
       $this->load->model('User_model', 'user');
       $this->load->model('Categories_model', 'cat');
    }

    public function index()
    {
        $data['categories'] = $this->cat->get_all();
        $data['title'] = 'Categories';
        $data['mainContent'] = 'admin/categories/index';
        $this->load->view('admin/layout/master', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $name = $this->input->post('name');
            $shares = $this->input->post('shares');

            $options = [
                'name' => $name,
                'shares' => $shares
            ];

            $affected = $this->cat->create($options);
            if ($affected) {
                $data['message'] = "Category created successfully";
            } else {
                $data['error'] = "Something Went Wrong! Please Try Again.";
            }
        }
        $data['title'] = 'Add Categories';
        $data['mainContent'] = 'admin/categories/add';
        $this->load->view('admin/layout/master', $data);
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $name = $this->input->post('name');
            $shares = $this->input->post('shares');

            $options = [
                'name' => $name,
                'shares' => $shares
            ];

            $affected = $this->cat->update($id, $options);
            if ($affected) {
                $data['message'] = "Category created successfully";
            } else {
                $data['error'] = "Something Went Wrong! Please Try Again.";
            }
        }
        $data['category'] = $this->cat->get_by($id);
        $data['title'] = 'Edit Categories';
        $data['mainContent'] = 'admin/categories/edit';
        $this->load->view('admin/layout/master', $data);
    }

    public function delete($id)
    {
        $affected = $this->cat->destroy($id);
        if($affected)
        {
            $data['message'] = "Deleted Successfully";
        }
        redirect(base_url().'admin/categories');
    }
}