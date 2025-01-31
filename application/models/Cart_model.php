<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    public function add_to_cart($user_id, $product_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->where('product_id', $product_id);
        $query = $this->db->get('cart');

        if ($query->num_rows() > 0) {
            $this->db->where('user_id', $user_id);
            $this->db->where('product_id', $product_id);
            $this->db->set('quantity', 'quantity + 1', false); 
            return $this->db->update('cart');
        } else {
            $data = [
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => 1, 
            ];
            return $this->db->insert('cart', $data);
        }
    }

    public function get_cart_items($user_id)
{
    $this->db->select('cart.id as cart_id, cart.quantity, products.id as product_id, products.brand, products.model, products.special_price, products.images');
    $this->db->from('cart');
    $this->db->join('products', 'cart.product_id = products.id');
    $this->db->where('cart.user_id', $user_id);
    return $this->db->get()->result_array();
}

public function update_cart_item($cart_id, $quantity)
{
    $this->db->set('quantity', $quantity);
    $this->db->where('id', $cart_id);
    $this->db->update('cart');
}

public function get_cart_total($user_id)
{
    $this->db->select_sum('quantity * special_price', 'total');
    $this->db->from('cart');
    $this->db->join('products', 'cart.product_id = products.id');
    $this->db->where('cart.user_id', $user_id);
    $query = $this->db->get();
    return $query->row()->total;
}

public function update_item($cart_id, $quantity) {
    $this->db->where('id', $cart_id);
    $this->db->update('cart', ['quantity' => $quantity]);
}

// Remove an item from the cart
public function remove_item($cart_id) {
    $this->db->where('id', $cart_id);
    $this->db->delete('cart');
}

}
?>