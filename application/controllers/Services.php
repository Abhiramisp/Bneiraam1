<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->library('session');
		$this->load->model('User_model');
    }
	public function index()
	{
		

		$this->load->view('landing_page/head',);
		$this->load->view('services/header');
		$this->load->view('services/services', );
		$this->load->view('landing_page/footer');
	}
}
