<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_edit_Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the Product_model
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->model('Product_model'); // Ensure this line is present
    }
    public function index() {
        // Use the segment directly as a condition
        $id = $this->uri->segment(3); // Get the ID from the URL segment
    
        // Retrieve the product by its ID
        $data['product'] = $this->Product_model->get_product_by_id1(['id' => $id]); // Pass the ID as an array
    
        // Handle cases where no product is found
        if (empty($data['product'])) {
            $this->session->set_flashdata('error', 'Product not found.');
            redirect('Admin_add_Product/index'); // Redirect to the product list
        }
    
        // Load the edit product view with the product data
        $this->load->view('admin/home/head');
        $this->load->view('admin/home/sidebar');
        $this->load->view('admin/home/navbar');
        $this->load->view('admin/product/edit', $data);
        $this->load->view('admin/home/footer');
    }
    
}
