<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model'); // Load the model
        $this->load->library('form_validation'); // Load form validation library
    }

    public function submit()
    {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim|numeric');
        $this->form_validation->set_rules('message', 'Message', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            header('Content-Type: application/json'); // Ensure proper JSON header
            echo json_encode([
                'status' => 'error',
                'errors' => validation_errors()
            ]);
        } else {
            // Validation passed, save data
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'message' => $this->input->post('message'),
            ];
            // print_r($data);

            if ($this->Contact_model->save_contact($data)) {

                // Success response
                echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
            } else {
                // Error in saving data
                header('Content-Type: application/json'); // Ensure proper JSON header
                echo json_encode(['status' => 'error', 'message' => 'Failed to save your message. Please try again.']);
            }
        }
    }
}
