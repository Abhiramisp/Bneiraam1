<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('user_id')) {
            // Fetch user's name from the session or database
            $user_id = $this->session->userdata('user_id');
            $user_name = $this->User_model->getUserName($user_id); // Example function to retrieve user's name from model
            $data['user_name'] = $user_name; // Assign user's name to $user_name variable
        }

        $data['user'] = $this->User_model->get_user_by_id($user_id);

        $this->load->view('landing_page/head', $data);
        $this->load->view('store/header');
        $this->load->view('profile/profile');


        $this->load->view('landing_page/footer');
    }
    public function update() {
        $user_id = $this->session->userdata('user_id');
        if (!$user_id) {
            redirect('login');
        }

        // Form validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required|numeric|trim');

        if ($this->form_validation->run() == FALSE) {
            // Reload the profile page with validation errors
            $this->index();
        } else {
            // Prepare data for update
            $data = [
                'first_name' => $this->input->post('first_name'),
                'email' => $this->input->post('email'),
                'mobile_number' => $this->input->post('mobile_number')
            ];

            // Update user data in the database
            if ($this->Profile_model->update_user($user_id, $data)) {
                $this->session->set_flashdata('success', 'Profile updated successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to update profile.');
            }

            redirect('profile');
        }
    }
}
