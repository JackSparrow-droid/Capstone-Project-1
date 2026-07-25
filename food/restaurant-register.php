<?php
include "config.php";

if(isset($_POST['register'])){

    $restaurant_name = $_POST['restaurant_name'];
    $owner_name = $_POST['owner_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $check = mysqli_query($conn,"SELECT * FROM restaurants WHERE email='$email'");

    if(mysqli_num_rows($check)>0){

        echo "<script>alert('Email Already Registered');</script>";

    }else{

        $sql="INSERT INTO restaurants
        (restaurant_name,owner_name,email,phone,address,password)
        VALUES
        ('$restaurant_name','$owner_name','$email','$phone','$address','$password')";

        if(mysqli_query($conn,$sql)){

            echo "<script>
            alert('Restaurant Registration Successful');
            window.location='restaurant-login.php';
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

<title>Restaurant Registration | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
background:#f5f5f5;
font-family:Arial,Helvetica,sans-serif;
}

.register-card{
max-width:700px;
margin:50px auto;
background:#fff;
padding:35px;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.logo{
font-size:60px;
text-align:center;
margin-bottom:10px;
}

.btn-success{
padding:12px;
font-size:18px;
border-radius:30px;
}

</style>

</head>

<body>

<div class="container">

<div class="register-card">

<div class="logo">
🍽️
</div>

<h2 class="text-center fw-bold">
Restaurant Registration
</h2>

<p class="text-center text-muted">
Register your restaurant on Foodify
</p>

<form action="" method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<label>Restaurant Name</label>

<input type="text"
name="restaurant_name"
class="form-control"
placeholder="Restaurant Name"
required>

</div>

<div class="col-md-6 mb-3">

<label>Owner Name</label>

<input type="text"
name="owner_name"
class="form-control"
placeholder="Owner Name"
required>

</div>

<div class="col-md-6 mb-3">

<label>Email</label>

<input type="email"
name="email"
class="form-control"
placeholder="Restaurant Email"
required>

</div>

<div class="col-md-6 mb-3">

<label>Phone</label>

<input type="tel"
name="phone"
class="form-control"
placeholder="Phone Number"
required>

</div>

<div class="col-12 mb-3">

<label>Restaurant Address</label>

<textarea
name="address"
class="form-control"
rows="3"
placeholder="Enter Restaurant Address"
required></textarea>

</div>

<div class="col-md-6 mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control"
placeholder="Password"
required>

</div>

<div class="col-md-6 mb-3">

<label>Confirm Password</label>

<input
type="password"
name="confirm_password"
class="form-control"
placeholder="Confirm Password"
required>

</div>

</div>

<div class="d-grid mt-3">

<button
type="submit"
name="register"
class="btn btn-success">

<i class="bi bi-person-plus-fill"></i>

Register Restaurant

</button>

</div>

</form>

<hr>

<div class="text-center">

Already have an account?

<a href="restaurant-login.php">

Restaurant Login

</a>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>