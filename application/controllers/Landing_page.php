<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{
	

	
	public function index()
	{

		$this->load->view('landing_page/head');
		$this->load->view('landing_page/header');
		$this->load->view('landing_page/hero');
		$this->load->view('landing_page/About');
		// $this->load->view('landing_page/Stats');
		$this->load->view('landing_page/Services');
		$this->load->view('landing_page/Features');
		// $this->load->view('landing_page/Portfolio');
		// $this->load->view('landing_page/Team');
		$this->load->view('landing_page/call_action');
		// $this->load->view('landing_page/Testimonials');
		$this->load->view('landing_page/Contact');
		$this->load->view('landing_page/footer');

	}
}
?>