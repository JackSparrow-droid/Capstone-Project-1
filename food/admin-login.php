<?php
session_start();
include "config.php";
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    echo $sql;
exit();

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        $admin = mysqli_fetch_assoc($result);

        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['username'];

        header("Location: admin-dashboard.php");
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

<title>Admin Login | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
background:#f5f5f5;
font-family:Arial, Helvetica, sans-serif;
}

.login-card{
max-width:450px;
margin:80px auto;
padding:35px;
background:#fff;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.logo{
font-size:55px;
text-align:center;
margin-bottom:10px;
}

.btn-dark{
border-radius:30px;
padding:12px;
font-size:18px;
}

</style>

</head>

<body>

<div class="container">

<div class="login-card">

<div class="logo">

👨‍💼

</div>

<h2 class="text-center fw-bold">

Admin Login

</h2>

<p class="text-center text-muted">

Login to manage Foodify

</p>

<form action="" method="POST">

<div class="mb-3">

<label class="form-label">

Admin Email

</label>

<input
type="email"
name="email"
class="form-control"
placeholder="Enter Admin Email"
required>

</div>

<div class="mb-3">

<label class="form-label">

Password

</label>

<input
type="password"
name="password"
class="form-control"
placeholder="Enter Password"
required>

</div>

<div class="text-end mb-3">
    <a href="forgot-password.html">Forgot Password?</a>
</div>

<div class="mb-3 form-check">

<input
type="checkbox"
class="form-check-input"
id="remember">

<label class="form-check-label" for="remember">

Remember Me

</label>

</div>

<div class="d-grid">

<button
type="submit"
name="login"
class="btn btn-dark">

<i class="bi bi-box-arrow-in-right"></i>

Admin Login

</button>

</div>

</form>

<hr>

<div class="text-center">

<a href="choose-login.php">

← Back to Login Selection

</a>

</div>

</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>