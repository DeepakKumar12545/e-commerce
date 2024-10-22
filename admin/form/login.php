<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/9017fcdd22.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="bg-secondary">
    <div class="container">
<div class="row">
<div class="col-md-6 m-auto shadow bg-white p-3 border font-monospace border-primary mt-3">

    <form action="login1.php" method="POST">
      <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Login</p>
    
  </div>
   <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="username" class="form-control" placeholder="Enter Username">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" name="userpassword" class="form-control" placeholder="Enter Password">
    
  </div>
  <button class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</button>
    </form>
    </div>
</div>
</div>
</body>
</html>