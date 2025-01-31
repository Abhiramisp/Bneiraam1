<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    // Function to confirm payment and save the receipt path in the database
    public function confirm_payment($receipt_path) {
        // You can save the receipt path and other payment details in the database
        $data = array(
            'payment_receipt' => $receipt_path,
            'status' => 'confirmed', // You can mark the order as confirmed
            'payment_date' => date('Y-m-d H:i:s')
        );

        // Insert into payments table (adjust this based on your table structure)
        $this->db->insert('payments', $data);
    }
}
