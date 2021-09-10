<?php
// takes info from product controller
require('../controllers/ProductController.php');

// check if theres a POST variable with the name 'addProductButton'
if(isset($_POST['addProductButton'])){
    // retrieve the name, description and quantity from the form submission
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $qty = $_POST['qty'];

    // call the add_product_controller function: return true or false
    $result = add_product_controller($name, $desc, $qty);


    if($result === true) header("Location: ../views/products.php");
    else echo "insertion failed";

}



if(isset($_GET['deleteProductID'])){

    $id = $_GET['deleteProductID'];

    // call the function
    $result = delete_product_controller($id);

    if($result === true) header("Location: ../views/products.php");
    else echo "deletion failed";


}


// updating




?>