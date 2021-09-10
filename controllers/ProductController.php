<?php

require('../models/ProductModel.php');

// product controller includes all the crud actions you can take on a particular function
function add_product_controller($name, $desc, $quantity){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_product($name, $desc, $quantity);

}

function delete_product_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->delete_one_product($id);

}

function update_product_controller($id, $name, $description, $qty){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_product($id, $name, $description, $qty);

}

function select_all_products_controller(){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_products();

}

function select_one_product_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_product($id);

}



?>