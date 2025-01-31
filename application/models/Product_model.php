<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    public function insert_product($data) {
        return $this->db->insert('products', $data);
    }
    
    public function get_all_products() {
        // $this->db->where('category', $category);
        $query = $this->db->get('products');
        return $query->result_array(); // Returns an array of products
    }
    public function get_products_by_category($category) {
        if (!empty($category)) {
            $this->db->where('category', $category);
        }
        $query = $this->db->get('products'); // Ensure your table name matches
        return $query->result_array();
    }

    public function get_product_by_id($product_id) {
        $query = $this->db->get_where('products', array('id' => $product_id));
        return $query->row_array();
    }

    public function get_product_by_id1($id) {
        return $this->db->get_where('products', $id)->row_array(); // Correct as is.
    }
    
    // public function get_product_by_id1($id) {
    //     return $this->db->get_where('products', ['id' => $id])->row_array();
    // }

    public function update_product($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('products', $data);
    }

    public function delete_product($id) {
        return $this->db->delete('products', ['id' => $id]);
    }
}
