<?php
class Products_model extends CI_Model
{
    // Get all rows from database table
    public function get_all_products()
    {
        return $this->db->query("SELECT * FROM products ORDER BY id ASC")->result_array();
    }

    // Add a new item into the database
    public function add_product($post_data)
    {
        $now = date("Y-m-d, H:i:s");
        $query = "INSERT INTO products (product_name, price, description, created_at, updated_at) 
                         VALUES        (?,         ?,          ?,           ?,          ?)";

        $values = array($post_data['product_name'], $post_data['price'], $post_data['description'], $now, $now);

        return $this->db->query($query, $values);
    }

    public function delete_product($product_id)
    {
        $query = "DELETE FROM products
                  WHERE
                      id = ?";

        $values = array($product_id);

        return $this->db->query($query, $values);
    }
}
