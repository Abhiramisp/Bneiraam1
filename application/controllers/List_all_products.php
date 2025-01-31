<?php
defined('BASEPATH') or exit('No direct script access allowed');

class List_all_products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the Product_model
        $this->load->model('Product_model'); // Ensure this line is present
    }
    public function index()
    {
        $data['products'] = $this->Product_model->get_all_products();

        // Load views with product data
        $this->load->view('admin/home/head', $data);
        $this->load->view('admin/home/sidebar');
        $this->load->view('admin/home/navbar');
        $this->load->view('admin/product/product_list');
        $this->load->view('admin/home/footer');
    }
}
