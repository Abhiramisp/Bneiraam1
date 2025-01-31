<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// FormController.php

class Admin_Form_controll extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('FormModel'); // Load the model
    }

    // Method to display form submissions in the admin page
    public function index() {
        // Fetch form submissions from the model
        $data['submissions'] = $this->FormModel->get_submissions();
        // Load the admin view and pass the data
        $this->load->view('admin/home/head');
		$this->load->view('admin/home/sidebar');
		$this->load->view('admin/home/navbar');
        $this->load->view('admin/campreg', $data);

		$this->load->view('admin/home/footer');
    }
}
