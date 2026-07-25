<?php
include "config.php";

if(isset($_POST['register'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$password=$_POST['password'];

$check=mysqli_query($conn,"SELECT * FROM customers WHERE email='$email'");

if(mysqli_num_rows($check)>0){

echo "<script>alert('Email Already Registered');</script>";

}else{

$sql="INSERT INTO customers(name,email,phone,address,password)
VALUES('$name','$email','$phone','$address','$password')";

if(mysqli_query($conn,$sql)){

echo "<script>
alert('Registration Successful');
window.location='customer-login.php';
</script>";

}else{

echo "<script>alert('Registration Failed');</script>";

}

}

}
?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Foodify Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
    background:#f5f5f5;
    font-family:Poppins,sans-serif;
}

.register-box{
    width:500px;
    margin:40px auto;
    background:#fff;
    padding:35px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,.1);
}

.logo{
    text-align:center;
    font-size:45px;
}

h2{
    text-align:center;
    margin-bottom:25px;
    font-weight:bold;
}

.form-control{
    height:50px;
}

textarea{
    resize:none;
}

.btn-danger{
    height:50px;
    font-size:18px;
}

a{
    text-decoration:none;
}

</style>

</head>

<body>

<div class="register-box">

<div class="logo">
🍔
</div>

<h2>Create Account</h2>

<form action="" method="POST">

<div class="mb-3">

<label>Full Name</label>

<input
type="text"
name="name"
class="form-control"
placeholder="Enter Full Name"
required>

</div>

<div class="mb-3">

<label>Email Address</label>

<input
type="email"
name="email"
class="form-control"
placeholder="Enter Email"
required>

</div>

<div class="mb-3">

<label>Mobile Number</label>

<input
type="tel"
name="phone"
class="form-control"
placeholder="Enter Mobile Number"
required>

</div>

<div class="mb-3">

<label>Address</label>

<textarea
name="address"
class="form-control"
rows="3"
placeholder="Enter Address"
required></textarea>

</div>

<div class="mb-3">

<label>Password</label>

<div class="input-group">

<input
type="password"
id="password"
name="password"
class="form-control"
placeholder="Enter Password"
required>

<button
class="btn btn-outline-secondary"
type="button"
onclick="togglePassword('password')">

<i class="bi bi-eye"></i>

</button>

</div>

</div>

<div class="mb-3">

<label>Confirm Password</label>

<div class="input-group">

<input
type="password"
id="confirmPassword"
name="confirm_password"
class="form-control"
placeholder="Confirm Password"
required>

<button
class="btn btn-outline-secondary"
type="button"
onclick="togglePassword('confirmPassword')">

<i class="bi bi-eye"></i>

</button>

</div>

</div>

<div class="form-check mb-3">

<input class="form-check-input" type="checkbox" required>

<label class="form-check-label">

I agree to the Terms & Conditions

</label>

</div>

<button
type="submit"
name="register"
class="btn btn-danger w-100">

Register

</button>

<div class="text-center mt-3">

Already have an account?

<a href="customer-login.php">

Login

</a>

</div>

<div class="text-center mt-2">

<a href="index.php">

← Back to Home

</a>

</div>

</form>

</div>

<script>

function togglePassword(id){

let input=document.getElementById(id);

if(input.type==="password"){

input.type="text";

}else{

input.type="password";

}

}

</script>

</body>

</html>