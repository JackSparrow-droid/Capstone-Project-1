<?php
session_start();
include "config.php";

if(!isset($_SESSION['customer_id'])){
    header("Location: customer-login.php");
    exit();
}

$customer_id = $_SESSION['customer_id'];

$query = mysqli_query($conn, "SELECT * FROM customers WHERE id='$customer_id'");

$customer = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Customer Dashboard | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
background:#f5f5f5;
font-family:Arial, Helvetica, sans-serif;
}

.sidebar{
background:#dc3545;
min-height:100vh;
padding:30px 20px;
color:white;
}

.sidebar a{
display:block;
color:white;
text-decoration:none;
padding:12px;
margin-bottom:10px;
border-radius:8px;
transition:.3s;
}

.sidebar a:hover{
background:white;
color:#dc3545;
}

.dashboard-card{
border:none;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.1);
transition:.3s;
}

.dashboard-card:hover{
transform:translateY(-5px);
}

.profile-box{
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.1);
}

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<!-- Sidebar -->

<div class="col-lg-3 sidebar">

<h2 class="fw-bold mb-4">
🍔 Foodify
</h2>

<a href="#">
<i class="bi bi-speedometer2"></i>
 Dashboard
</a>

<a href="order-history.php">
<i class="bi bi-bag-check"></i>
 My Orders
</a>

<a href="#">
<i class="bi bi-heart"></i>
 Wishlist
</a>

<a href="#">
<i class="bi bi-cart"></i>
 Cart
</a>

<a href="#">
<i class="bi bi-geo-alt"></i>
 Delivery Address
</a>

<a href="logout.php">
<i class="bi bi-box-arrow-right"></i>
 Logout
</a>

</div>

<!-- Main -->

<div class="col-lg-9 p-4">

<h2 class="fw-bold">
Welcome,
<?php echo $customer['name']; ?> 👋
</h2>

<p class="text-muted">
Manage your Foodify account.
</p>

<div class="row g-4 mt-3">

<div class="col-md-3">

<div class="card dashboard-card text-center p-4">

<h1>12</h1>

<p>Total Orders</p>

</div>

</div>

<div class="col-md-3">

<div class="card dashboard-card text-center p-4">

<h1>3</h1>

<p>Wishlist</p>

</div>

</div>

<div class="col-md-3">

<div class="card dashboard-card text-center p-4">

<h1>2</h1>

<p>Cart Items</p>

</div>

</div>

<div class="col-md-3">

<div class="card dashboard-card text-center p-4">

<h1>1</h1>

<p>Active Order</p>

</div>

</div>

</div>

<!-- Profile -->

<div class="profile-box mt-5">

<h4 class="fw-bold mb-4">

Customer Profile

</h4>

<div class="row">

<div class="col-md-6">

<p>

<strong>Name :</strong>

<?php echo $customer['name']; ?>

</p>

<p>

<strong>Email :</strong>

<?php echo $customer['email']; ?>

</p>

<p>

<strong>Phone :</strong>

<?php echo $customer['phone']; ?>

</p>

</div>

<div class="col-md-6">

<p>

<strong>Address :</strong>

<?php echo $customer['address']; ?>

</p>

<p>

<strong>Membership :</strong>

Gold Customer

</p>

<p>

<strong>Status :</strong>

<span class="badge bg-success">

Active

</span>

</p>

</div>

</div>

</div>

<!-- Recent Orders -->

<div class="card mt-5 shadow border-0">

<div class="card-header bg-danger text-white">

Recent Orders

</div>

<div class="card-body">

<table class="table">

<thead>

<tr>

<th>#</th>

<th>Food</th>

<th>Restaurant</th>

<th>Status</th>

</tr>

</thead>

<tbody>

<tr>

<td>1</td>

<td>Pizza</td>

<td>Pizza Hub</td>

<td>

<span class="badge bg-success">

Delivered

</span>

</td>

</tr>

<tr>

<td>2</td>

<td>Burger</td>

<td>Burger Point</td>

<td>

<span class="badge bg-warning">

On The Way

</span>

</td>

</tr>

<tr>

<td>3</td>

<td>Noodles</td>

<td>Chinese Corner</td>

<td>

<span class="badge bg-primary">

Preparing

</span>

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>

</body>

</html>