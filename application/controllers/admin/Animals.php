<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animals extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['qurbani_user_id'])) {
            redirect('/admin','refresh');
        }
       $this->load->model('User_model', 'user');
       $this->load->model('Categories_model', 'cat');
       $this->load->model('Animals_model', 'animals');
    }

    public function index()
    {
        $data['animals'] = $this->animals->get_all();
        $data['title'] = 'Animals';
        $data['mainContent'] = 'admin/animals/index';
        $this->load->view('admin/layout/master', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $category_id = $this->input->post('category_id');
            $code = $this->input->post('code');

            $code = explode('-', $code);

            $options = [
                'category_id' => $category_id,
                'code' => $code[1]
            ];

            $affected = $this->animals->create($options);
            if ($affected) {
                $data['message'] = "Animal added successfully";
            } else {
                $data['error'] = "Something Went Wrong! Please Try Again.";
            }
        }
        $data['categories'] = $this->cat->get_all();
        $data['title'] = 'Add Animals';
        $data['mainContent'] = 'admin/animals/add';
        $this->load->view('admin/layout/master', $data);
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $category_id = $this->input->post('category_id');
            $code = $this->input->post('code');

            $code = explode('-', $code);

            $options = [
                'category_id' => $category_id,
                'code' => $code[1]
            ];

            $affected = $this->animals->update($id, $options);
            if ($affected) {
                $data['message'] = "Category created successfully";
            } else {
                $data['error'] = "Something Went Wrong! Please Try Again.";
            }
        }
        $data['animal'] = $this->animals->get_by($id);
        $data['title'] = 'Edit Animals';
        $data['mainContent'] = 'admin/animals/edit';
        $this->load->view('admin/layout/master', $data);
    }

    public function delete($id)
    {
        $affected = $this->animals->destroy($id);
        if($affected)
        {
            $data['message'] = "Deleted Successfully";
        }
        redirect(base_url().'admin/animals');
    }

    public function getMaxCode($catId) 
    {
        $category = $this->cat->get_by($catId);
        $max_code = $this->animals->get_max_code($catId);
        $code = $max_code->code + 1;
        
        echo $code = $category->name . '-' . $code;
    }
}