<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/9017fcdd22.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}
?>
<body>
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid bg-dark text-white">
    <a class="navbar-brand text-white">Navbar</a>
   <span>
  <i class="fa-solid fa-user"></i>
   Hello,<?php echo$_SESSION['admin']; ?>
  <i class="fa-solid fa-right-to-bracket"></i>
  <a href="form/logout.php" class="text-decoration-none text-white">Logout</a>
  <a href="" class="text-decoration-none text-white">userPanel</a>
   </span>
     
     
  </div>
</nav>

<div class="text-center">Dashboard</div>
<div class="col-md-6 bg-danger text-center m-auto text-white">
<a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
<a href="" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
</div>
</body>
</html>