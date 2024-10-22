<?php

session_start();


if (isset($_POST['addCart'])) {
    // Retrieving form data
    $product_name = $_POST['PName'];
    $product_price = $_POST['PPrice'];
    $product_quantity = $_POST['PQuantity'];

    // Display the values (for debugging purposes)
    echo "Product Name: " . $product_name . "<br>";
    echo "Product Price: " . $product_price . "<br>";
    echo "Product Quantity: " . $product_quantity . "<br>";
//it is could Associtave Array
    $_SESSION['cart'][]= array(
        'productName'=> $product_name,
         'productPrice'=> $product_price, 
         'productQuantity'=> $product_quantity);
         print_r($_SESSION['cart']);
         header ("location: viewCart.php");
}
?>
