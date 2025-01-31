<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the database model
        $this->load->model('FormModel');
    }

    public function index() {

        $this->load->view('landing_page/head',);
		$this->load->view('camp/header'); // Load the form view
        $this->load->view('form_view');  // Load the form view
		$this->load->view('landing_page/footer');
    
    }

    public function submit_form() {
        // Validate the form data
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('course_last_studied', 'Course Last Studied', 'required');
        $this->form_validation->set_rules('pass_out_year', 'Pass Out Year', 'required|numeric');
        $this->form_validation->set_rules('terms_conditions', 'Terms and Conditions', 'required');

        if ($this->form_validation->run() === FALSE) {
            // If validation fails, reload the form view with errors
            redirect('formcontroller/index');

        } else {
            // Prepare data for insertion
            $data = array(
                'name'               => $this->input->post('name'),
                'email'              => $this->input->post('email'),
                'phone'              => $this->input->post('phone'),
                'course_last_studied'=> $this->input->post('course_last_studied'),
                'pass_out_year'      => $this->input->post('pass_out_year'),
                'github_link'        => $this->input->post('github_link'),
                'terms_conditions'   => $this->input->post('terms_conditions')
            );

            // Insert data into the database
            $this->FormModel->insert_data($data);

            // Redirect or show success message
            $this->session->set_flashdata('success', 'Form submitted successfully!');
            redirect('formcontroller/index');
        }
    }
}
