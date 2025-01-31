<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function save_contact($data) {
        return $this->db->insert('contact_messages', $data);
    }
    public function get_users_requirements()
    {
        $query = $this->db->get('contact_messages');
        return $query->result_array();
    }
}
