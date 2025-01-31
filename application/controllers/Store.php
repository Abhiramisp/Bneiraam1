<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('User_model');
    }
	public function index()
	{

		$this->load->view('landing_page/head',);
		$this->load->view('store/header');
		$this->load->view('store/store', );
		
	
		$this->load->view('landing_page/footer');
	}
}
