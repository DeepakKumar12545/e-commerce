<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-Cart</title>
    <!-- Add Bootstrap CDN or include it in your project for styling -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-warning text-center bg-light mb-5 rounded">My Cart</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-6 col-lg-9">

            <table class="table table-bordered text-center">
                <thead class="bg-danger text-white fs-5">
                    <tr>
                        <th>Index No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                session_start();
                $total=0;
                if (isset($_SESSION['cart'])) {
                    // $index = 1;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        // $productTotal = $value['productPrice'] * $value['productQuantity'];
                        $total= $value['productPrice'] * $value['productPrice'];
                        echo "
                            <tr>
                                <td>$key</td>
                                <td>{$value['productName']}</td>
                                <td>{$value['productPrice']}</td>
                                <td>{$value['productQuantity']}</td>
                                <td></td>
                                
                               
                               
                            </tr>
                        ";
                      
                    }
                } 
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
