<?php
session_start();
include "config.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM customers
WHERE email='$email' AND password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$user=mysqli_fetch_assoc($result);

$_SESSION['customer_id']=$user['id'];
$_SESSION['customer_name']=$user['name'];
$_SESSION['customer_email']=$user['email'];

header("Location: customer-dashboard.php");
exit();

}else{

echo "<script>alert('Invalid Email or Password');</script>";

}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Customer Login | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{

background:#f5f5f5;

font-family:Arial, Helvetica, sans-serif;

}

.login-box{

max-width:430px;

margin:80px auto;

background:#fff;

padding:40px;

border-radius:15px;

box-shadow:0 15px 35px rgba(0,0,0,.1);

}

.logo{

font-size:40px;

text-align:center;

}

.btn-danger{

border-radius:30px;

}

</style>

</head>

<body>

<div class="container">

<div class="login-box">

<div class="logo">

🍔

</div>

<h2 class="text-center fw-bold mt-2">

Customer Login

</h2>

<p class="text-center text-muted">

Login to continue

</p>

<form action="" method="POST">

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
placeholder="Enter Email"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
placeholder="Enter Password"
required>

</div>

<div class="text-end mb-3">
    <a href="forgot-password.php">Forgot Password?</a>
</div>

<div class="d-grid">

<button
type="submit"
name="login"
class="btn btn-danger btn-lg">

<i class="bi bi-box-arrow-in-right"></i>

Login

</button>

</div>

</form>

<hr>

<p class="text-center">

Don't have an account?

<a href="register.php">

Register

</a>

</p>

</div>

</div>


</body>

</html>