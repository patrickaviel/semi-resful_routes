<?php
class product_model extends CI_Model {
     function get_all_products()
     {
         return $this->db->query("SELECT * FROM products ORDER BY created_at DESC")->result_array();
     }
     function get_product_by_id($product_id)
     {
         return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
     }
     function add_product($product)
     {
         $query = "INSERT INTO products (name, description,price, created_at, updated_at) VALUES (?,?,?,?,?)";
         $values = array($product['name'], $product['description'], $product['price'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
         return $this->db->query($query, $values);
     }
     function delete_product($product_id)
     {
        $this->db->query("DELETE FROM products WHERE id = $product_id");
     }
     function update_product($product,$product_id)
     {
        $this->db->query("UPDATE products SET name = '{$product['name']}', description = '{$product['description']}',
         price = '{$product['price']}', updated_at = NOW() WHERE id = $product_id");
    }
}