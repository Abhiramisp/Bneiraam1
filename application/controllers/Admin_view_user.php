<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_view_user extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load the User_model
        $this->load->library('session');  // Load the session library
        $this->load->helper(array('form', 'url')); // Load necessary helpers
    }

	public function index()
	{
		$data['sqldata1'] = $this->User_model->get_all_users();

		$this->load->view('admin/home/head',$data );
		$this->load->view('admin/home/sidebar');
		$this->load->view('admin/home/navbar');

		$this->load->view('admin/user/view_user');
		$this->load->view('admin/home/footer');
	}


}
