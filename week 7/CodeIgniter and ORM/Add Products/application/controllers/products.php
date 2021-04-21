<?php
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load the Products_model model on all pages
        $this->load->model('Products_model');
    }

    // Method to add products
    public function add()
    {
        $this->output->enable_profiler(TRUE);

        // Load the form_validation library
        $this->load->library('form_validation');

        // Set form validation rules
        $this->form_validation->set_rules('product_name', 'name', 'required|xss_clean|trim|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('price', 'price', 'required|integer|is_natural');
        $this->form_validation->set_rules('description', 'description', 'required|xss_clean|trim|min_length[5]|max_length[100]');

        // If validate errors appear show the
        // "add-product" and echo them out
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('products/add-product');
        } else {
            // Create success message session variable
            $this->session->set_userdata('message', 'You have successfully added a new product!');

            $this->Products_model->add_product($this->input->post());

            redirect(site_url());
        }

        // Assign the Products_model model - get_all_products() method to a variable $products
        $products = $this->Products_model->get_all_products();

        // Show page that lists products AND
        // pass in $products variable as an associative array
        $this->load->view('products/list-product.php', array('products' => $products));
    }

    // public function show($product_id)
    // {
    //     $this->output->enable_profiler(TRUE);

    //     // Assign the Products_model model - show_products() method to a variable $single_record
    //     $single_record = $this->Products_model->show_product($product_id);

    //     if ($single_record) {
    //         $this->load->view('products/delete-product', array('single_record' => $single_record));
    //     } else {
    //         $this->load->view('products/product-not-found');
    //     }
    // }

    public function destroy($product_id)
    {
        $this->output->enable_profiler(TRUE);

        // Create a delete record success message
        // session variable
        $this->session->set_userdata("delete_success", "You have successfully deleted product $product_id!");

        // Call the Products_model model - delete_product() method
        $this->Products_model->delete_product($product_id);

        redirect(site_url());
    }
}
