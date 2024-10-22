<?php
//data base
$con= mysqli_connect('localhost', 'root', '', 'ecommerce');

$A_name= $_POST['username'];
$A_password=$_POST['userpassword'];

$result= mysqli_query($con, " SELECT * FROM `admin` WHERE username = '$A_name' AND userpassword= '$A_password' ");
session_start();//to admin session start
if(mysqli_num_rows($result)){
 $_SESSION['admin'] = $A_name;//to admin $A_name value go into admin to cheak in mystore
    echo"
    <script>
   alert('Login Sucessfully');
     window.location.href='../mystore.php'
    </script>
    ";
}else{

    echo"
    <script>

    alert('Invaled username/userpassword');
     window.location.href='../login.php'
    </script>
    ";
}
?>