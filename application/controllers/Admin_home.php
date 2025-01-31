<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/home/head');
		$this->load->view('admin/home/sidebar');
		$this->load->view('admin/home/navbar');

		$this->load->view('admin/home/home');
		$this->load->view('admin/home/footer');
	}
}
