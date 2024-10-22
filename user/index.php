<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/9017fcdd22.js" crossorigin="anonymous"></script>
    <title>Home-Page</title>
    <?php
   include 'header.php';
    ?>
</head>
<body>
   <div class="container-fluid">
   <div class="col-md-12">
   <div class="row">

<h1 class="text-warning font-monospace text-center my-3">Home</h1>

  <?php
  include 'Config.php';
  $Record= mysqli_query($con, "select * from tblproduct");
    while ($row = mysqli_fetch_array($Record)) {

        $cheak_page=$row['PCategory'];
        if($cheak_page==='Home'){  
    
 echo "
<div class='col-md-6 col-lg-4 mb-4'>
  <form action='Insertcart.php' method='POST'>
    <div class='card' style='width: 18rem;'>
      <img src='../admin/product/{$row['PImage']}' class='card-img-top' alt='Product Image'>
      <div class='card-body text-center'>
        <h5 class='card-title text-danger fs-4 fw-bold'>{$row['PName']}</h5>
        <p class='card-text text-danger fs-4 fw-bold'>RS: {$row['PPrice']}</p>
        <input type='hidden' name='PName' value='{$row['PName']}'>
        <input type='hidden' name='PPrice' value='{$row['PPrice']}'>
        <input type='number' name='PQuantity' min='1' max='20' value='1' placeholder='Quantity' class='form-control mb-3'>
        <input type='submit' name='addCart' class='btn btn-danger text-white w-100' value='Add to Cart'>
      </div>
    </div>
  </form>
</div>
";

        }
  }
    
?>

  </div>
   </div>
   </div>
</body>
</html>