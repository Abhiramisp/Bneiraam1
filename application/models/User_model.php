<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function email_exists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users'); // Assuming 'users' is your table name
        if ($query->num_rows() > 0) {
            return true; // Email already exists
        }
        return false; // Email does not exist
    }

    // Register a new user
    public function register_user($data)
    {
        $base64_password = base64_encode($data['password']);
        $data['password'] = password_hash($base64_password, PASSWORD_BCRYPT);

        $result = $this->db->insert('users', $data);

        if (!$result) {
            $error = $this->db->error();
        }

        return $result;
    }
    //login
    public function login($username, $password)
    {
        $this->db->where('email', $username);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            $user = $query->row();
            $base64_password = base64_encode($password);
            if (password_verify($base64_password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

    public function get_all_users() {
        // Query to get all the users from the 'users' table
        $query = $this->db->get('users');
        return $query->result_array();  // Return the result as an associative array
    }


    public function getUserName($user_id)
    {
        $query = $this->db->get_where('users', array('id' => $user_id));
        $result = $query->row_array(); // Assuming you expect only one row
        return isset($result['name']) ? $result['name'] : ''; // Return user's name or an empty string
    }
    public function get_user_by_id($user_id) {
        $this->db->where('id', $user_id);
        return $this->db->get('users')->row_array();
    }

    // Update user data
    public function update_user($user_id, $data) {
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }
}
