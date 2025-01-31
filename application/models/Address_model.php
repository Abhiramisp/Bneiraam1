<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function add_address($data) {
        return $this->db->insert('addresses', $data);
    }
    public function get_addresses_by_user_id($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('addresses'); // 'addresses' is the table name
        return $query->result_array(); // Return as an associative array
    }

}
?>