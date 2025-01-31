<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view_user_requerments extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Contact_model');         // Load Contact_model
        $this->load->library('form_validation');     // Load form_validation library
        $this->load->helper('url');   // Load necessary helpers
    }

	public function index()
	{
		$data['sqldata1'] = $this->Contact_model->get_users_requirements();

		$this->load->view('admin/home/head',$data );
		$this->load->view('admin/home/sidebar');
		$this->load->view('admin/home/navbar');

		$this->load->view('admin/user/users_requerments');
		$this->load->view('admin/home/footer');
	}

	
}
