<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_Product extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load the Product_model
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
        $this->load->library('upload'); 
		$this->load->library('session');
        $this->load->model('Product_model'); // Ensure this line is present
    }
    public function index() {
        $this->load->view('admin/home/head');
        $this->load->view('admin/home/sidebar');
        $this->load->view('admin/home/navbar');
        $this->load->view('admin/product/add');
        $this->load->view('admin/home/footer');
    }
    public function add() {
        // Set validation rules
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('brand', 'Brand', 'required');
        $this->form_validation->set_rules('model', 'Model', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');
        $this->form_validation->set_rules('special_price', 'Special Price', 'required|numeric');
    
        if ($this->form_validation->run() == FALSE) {
            $this->index(); // Reload the add product form view if validation fails
        } else {
            // Gather form data
            $data = array(
                'category' => $this->input->post('category'),
                'brand' => $this->input->post('brand'),
                'model' => $this->input->post('model'),
                'color' => $this->input->post('color'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'special_price' => $this->input->post('special_price'),
                'stock' => $this->input->post('stock'),
                'processor' => $this->input->post('processor'),
                'screen_size' => $this->input->post('screen_size'),
                'RAM' => $this->input->post('RAM'),
                'storage_type' => $this->input->post('storage_type'),
                'storage_capacity' => $this->input->post('storage_capacity'),
                'operating_system' => $this->input->post('operating_system'),
                'battery_life' => $this->input->post('battery_life'),
                'camera' => $this->input->post('camera'),
                'connectivity' => $this->input->post('connectivity'),
                'accessory_type' => $this->input->post('accessory_type'),
                'compatible_with' => $this->input->post('compatible_with'),
            );
    
            // Check if files were uploaded
            $images = array();
            if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
                $files = $_FILES;
                $file_count = count($files['images']['name']);
    
                for ($i = 0; $i < $file_count; $i++) {
                    $_FILES['images']['name'] = $files['images']['name'][$i];
                    $_FILES['images']['type'] = $files['images']['type'][$i];
                    $_FILES['images']['tmp_name'] = $files['images']['tmp_name'][$i];
                    $_FILES['images']['error'] = $files['images']['error'][$i];
                    $_FILES['images']['size'] = $files['images']['size'][$i];
    
                    $this->upload->initialize($this->set_upload_options());
    
                    if ($this->upload->do_upload('images')) {
                        $upload_data = $this->upload->data();
                        $images[] = $upload_data['file_name'];
                    } else {
                        // Output any upload errors
                        $error = $this->upload->display_errors();
                        echo "Upload Error for Image " . $i . ": " . $error;
                        return; // Stop execution if upload fails
                    }
                }
            }
    
            // Print images array to confirm file names
            echo "<pre>Images Uploaded: ";
            print_r($images);
            echo "</pre>";
    
            // Save images as JSON if any images were uploaded
            if (!empty($images)) {
                $data['images'] = json_encode($images);
            } else {
                $data['images'] = json_encode([]); // Store empty array if no images
            }
    
            // Save product data to the database
            $result = $this->Product_model->insert_product($data);
    
            // Check database insert status
            if ($result) {
                $this->session->set_flashdata('message', 'Product added successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to add product.');
            }
    
            // Redirect to product list or add product page
            redirect('Admin_add_Product');
        }
    }
    
    private function set_upload_options() {
        return array(
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size' => '0', // No size limit
            'overwrite' => FALSE,
        );
    }
    
    public function list_all_products() {
        $data['products'] = $this->Product_model->get_all_products();

        // Load views with product data
        $this->load->view('admin/home/head', $data);
        $this->load->view('admin/home/sidebar');
        $this->load->view('admin/home/navbar');
        $this->load->view('admin/product/product_list');
        $this->load->view('admin/home/footer');
        
    }
    public function edit($id) {
      
        // Retrieve product details from the database
        $id = $this->uri->segment(3); // Get the ID from the URL segment
       
        // Retrieve the product by its ID
        $data['product'] = $this->Product_model->get_product_by_id1(['id' => $id]); // Pass the ID as an array
     
        // Handle cases where no product is found
        if (empty($data['product'])) {
            $this->session->set_flashdata('error', 'Product not found.');
            redirect('Admin_add_Product/index'); // Redirect to the product list
        }
    
        // Load the edit product view with the product data
        $this->load->view('admin/home/head');
        $this->load->view('admin/home/sidebar');
        $this->load->view('admin/home/navbar');
        $this->load->view('admin/product/edit', $data);
        $this->load->view('admin/home/footer');
    }

    public function update($id) {
        // Get the updated product data from the form
        $updated_data = array(
            'category' => $this->input->post('category'),
            'brand' => $this->input->post('brand'),
            'model' => $this->input->post('model'),
            'price' => $this->input->post('price'),
            'stock' => $this->input->post('stock'),
            // Add other fields as necessary
        );

        // Update the product in the database
        $this->Product_model->update_product($id, $updated_data);

        // Redirect back to the product list with a success message
        $this->session->set_flashdata('success', 'Product updated successfully.');
        redirect('Admin_add_Product/index'); // Adjust the redirect path as necessary
    }

    public function delete($id) {
        // Perform the deletion of the product from the database
        $this->Product_model->delete_product($id);

        // Redirect back to the product list with a success message
        $this->session->set_flashdata('success', 'Product deleted successfully.');
        redirect('list_all_products'); // Adjust the redirect path as necessary
    }
}
