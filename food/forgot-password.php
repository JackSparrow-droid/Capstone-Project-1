<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Forgot Password | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
background:#f4f6f9;
font-family:Arial, Helvetica, sans-serif;
}

.forgot-card{
max-width:450px;
margin:80px auto;
background:#fff;
padding:35px;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.logo{
font-size:55px;
text-align:center;
margin-bottom:15px;
}

.btn-danger{
border-radius:30px;
padding:12px;
font-size:18px;
}

</style>

</head>

<body>

<div class="container">

<div class="forgot-card">

<div class="logo">

🔐

</div>

<h2 class="text-center fw-bold">

Forgot Password

</h2>

<p class="text-center text-muted">

Enter your registered email to receive a password reset link.

</p>

<form id="forgotForm">

<div class="mb-3">

<label class="form-label">

Email Address

</label>

<input
type="email"
class="form-control"
placeholder="Enter your email"
required>

</div>

<div class="d-grid">

<button
type="submit"
class="btn btn-danger">

<i class="bi bi-envelope-fill"></i>

Send Reset Link

</button>

</div>

</form>

<div id="successMessage"
class="alert alert-success mt-4 d-none">

Password reset link sent successfully! (Demo)

</div>

<hr>

<div class="text-center">

<a href="customer-login.html">

Customer Login

</a>

|

<a href="restaurant-login.html">

Restaurant Login

</a>

|

<a href="admin-login.html">

Admin Login

</a>

</div>

</div>

</div>

<script>

document.getElementById("forgotForm").addEventListener("submit",function(e){

e.preventDefault();

document.getElementById("successMessage").classList.remove("d-none");

});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>