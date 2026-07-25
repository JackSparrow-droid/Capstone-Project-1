<?php
session_start();
include "config.php";

if(!isset($_SESSION['restaurant_id'])){
    header("Location: restaurant-login.php");
    exit();
}

$restaurant_id = $_SESSION['restaurant_id'];

$result = mysqli_query($conn,"SELECT * FROM restaurants WHERE id='$restaurant_id'");
$restaurant = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Restaurant Dashboard | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
background:#f5f5f5;
font-family:Arial,sans-serif;
}

.sidebar{
background:#198754;
min-height:100vh;
padding:25px;
color:white;
}

.sidebar h3{
margin-bottom:30px;
font-weight:bold;
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
color:#198754;
}

.card-box{
background:white;
border-radius:15px;
padding:20px;
box-shadow:0 10px 25px rgba(0,0,0,.1);
transition:.3s;
height:100%;
}

.card-box:hover{
transform:translateY(-5px);
}

.food-img{
width:70px;
height:70px;
object-fit:cover;
border-radius:10px;
}

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<!-- Sidebar -->

<div class="col-lg-3 sidebar">

<h3>🍽 Foodify</h3>

<a href="#"><i class="bi bi-speedometer2"></i> Dashboard</a>

<a href="#"><i class="bi bi-egg-fried"></i> Food Items</a>

<a href="add-food.php"><i class="bi bi-plus-circle"></i> Add Food</a>

<a href="#"><i class="bi bi-bag-check"></i> Orders</a>

<a href="#"><i class="bi bi-graph-up-arrow"></i> Sales Report</a>

<a href="#"><i class="bi bi-star"></i> Reviews</a>

<a href="restaurant-logout.php">
<i class="bi bi-box-arrow-right"></i>
Logout
</a>

</div>

<!-- Main Content -->

<div class="col-lg-9 p-4">

<h2 class="fw-bold">
Welcome,
<?php echo $restaurant['restaurant_name']; ?> 👋
</h2>

<p class="text-muted">
Manage your restaurant easily.
</p>

<div class="row g-4 mt-3">

<div class="col-md-3">

<div class="card-box text-center">

<h2 class="text-success">45</h2>

<p>Total Orders</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box text-center">

<h2 class="text-primary">25</h2>

<p>Food Items</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box text-center">

<h2 class="text-warning">₹18,500</h2>

<p>Today's Sales</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box text-center">

<h2 class="text-danger">4.8★</h2>

<p>Rating</p>

</div>

</div>

</div>

<!-- Food Items -->

<div class="card shadow border-0 mt-5">

<div class="card-header bg-success text-white">

Available Food Items

</div>

<div class="card-body">

<table class="table table-hover">

<thead>

<tr>

<th>Image</th>

<th>Food Name</th>

<th>Price</th>

<th>Status</th>

<th>Action</th>

</tr>

</thead>

<tbody>

<?php

$foods = mysqli_query($conn,"SELECT * FROM foods WHERE restaurant_id='$restaurant_id'");

while($food = mysqli_fetch_assoc($foods)){

?>

<tr>

<td>
<img src="images/<?php echo $food['image']; ?>" class="food-img">
</td>

<td>
<?php echo $food['food_name']; ?>
</td>

<td>
₹<?php echo $food['price']; ?>
</td>

<td>
<span class="badge bg-success">
Available
</span>
</td>

<td>

<a href="edit-food.php?id=<?php echo $food['id']; ?>" class="btn btn-primary btn-sm">
Edit
</a>

<a href="delete-food.php?id=<?php echo $food['id']; ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Delete this food item?')">
Delete
</a>

</td>

</tr>

<?php

}

?>

</tbody>

</table>

</div>

</div>

<!-- Recent Orders -->

<div class="card shadow border-0 mt-5">

<div class="card-header bg-success text-white">

Recent Orders

</div>

<div class="card-body">

<table class="table table-striped">

<thead>

<tr>

<th>Order ID</th>

<th>Customer</th>

<th>Food</th>

<th>Status</th>

</tr>

</thead>

<tbody>

<tr>

<td>#1001</td>

<td>Rahul</td>

<td>Pizza</td>

<td><span class="badge bg-primary">Preparing</span></td>

</tr>

<tr>

<td>#1002</td>

<td>Priya</td>

<td>Burger</td>

<td><span class="badge bg-success">Delivered</span></td>

</tr>

<tr>

<td>#1003</td>

<td>Amit</td>

<td>Noodles</td>

<td><span class="badge bg-warning">Pending</span></td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>