<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Model 
{

	function get_all_products()
    {
    	return $this->db->query("SELECT * FROM products")->result_array();
    }
    function add_product($product_info)
    {
    	$query = "INSERT INTO products(Name,Descriptions,Price,created_at) VALUES(?,?,?,?)";
    	$values = array($product_info['name'],$product_info['description'],$product_info['price'], date("Y-m-d H:i:s"));
    	return $this->db->query($query, $values);
    }
    function show_product($id)
    {
    	$query = "SELECT * FROM products WHERE id =?";
    	$values = array($id);
    	return $this->db->query($query, $values)->row_array();
    }
    function update_product($id,$update_prod)
    {
    	$query = "UPDATE  products SET Name=?, Descriptions =?, Price=?, updated_at = ? WHERE id=?";
    	$values = array( $update_prod['name'],$update_prod['description'],$update_prod['price'], date("Y-m-d H:i:s"),$id);
    	return $this->db->query($query, $values);

    }
    function delete($id)
    {
    	$query =  "DELETE FROM products WHERE id =?  ";
    	$values = array($id);
    	return $this->db->query($query, $values);
    }


}