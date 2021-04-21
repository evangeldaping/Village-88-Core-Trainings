<?php
class Products_model extends CI_Model
{
    // Get all rows from database table
    public function get_all_products()
    {
        return $this->db->query("SELECT * FROM products")->result_array();
    }

    // Add a new item into the database
    public function add_product($post_data)
    {
        $this->db->query("INSERT INTO products (product_name, price, description, created_at, updated_at) VALUES (?,?,?,NOW(),NOW())", array($post_data['product_name'], $post_data['price'], $post_data['description']));
    }

    public function show_product($product_id)
    {
        return $this->db->query("SELECT * FROM products WHERE id = {$product_id}")->row_array();
    }

    public function delete_product($product_id)
    {
        $this->db->query("DELETE FROM products WHERE id = $product_id");
    }
}
