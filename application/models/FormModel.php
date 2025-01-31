<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormModel extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function insert_data($data) {
        $this->db->insert('form_submissions', $data);
    }
    public function get_submissions() {
        $query = $this->db->get('form_submissions'); // Fetch all data from form_submissions table
        return $query->result(); // Return the result as an array of objects
    }
}
