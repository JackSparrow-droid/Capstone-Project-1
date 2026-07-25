<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Order History | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
background:#f5f5f5;
font-family:Arial,sans-serif;
}

.page-title{
background:#dc3545;
color:white;
padding:30px;
text-align:center;
margin-bottom:40px;
}

.order-card{
background:white;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,.1);
overflow:hidden;
}

.food-img{
width:80px;
height:80px;
border-radius:10px;
object-fit:cover;
}

.table td,
.table th{
vertical-align:middle;
}

</style>

</head>

<body>

<div class="page-title">

<h2>My Order History</h2>

<p>View all your previous orders</p>

</div>

<div class="container">

<div class="order-card">

<div class="card-header bg-danger text-white">

<h4 class="mb-0">

<i class="bi bi-bag-check-fill"></i>

Recent Orders

</h4>

</div>

<div class="table-responsive">

<table class="table table-hover mb-0">

<thead>

<tr>

<th>Image</th>

<th>Food</th>

<th>Restaurant</th>

<th>Price</th>

<th>Order Date</th>

<th>Status</th>

<th>Payment</th>

<th>Action</th>

</tr>

</thead>

<tbody>

<tr>

<td>

<img src="images/pizza1.jpg" class="food-img">

</td>

<td>Cheese Pizza</td>

<td>Pizza Hub</td>

<td>₹299</td>

<td>21 Jul 2026</td>

<td>

<span class="badge bg-success">

Delivered

</span>

</td>

<td>

<span class="badge bg-primary">

Paid

</span>

</td>
<td>

<a href="track-order.html" class="btn btn-primary btn-sm">

<i class="bi bi-geo-alt-fill"></i>

Track

</a>

</td>

</tr>

<tr>

<td>

<img src="images/burger1.jpg" class="food-img">

</td>

<td>Chicken Burger</td>

<td>Burger Point</td>

<td>₹199</td>

<td>20 Jul 2026</td>

<td>

<span class="badge bg-warning">

Preparing

</span>

</td>

<td>

<span class="badge bg-success">

Paid

</span>

</td>

</tr>

<tr>

<td>

<img src="images/noodles1.jpg" class="food-img">

</td>

<td>Veg Noodles</td>

<td>Chinese Corner</td>

<td>₹249</td>

<td>18 Jul 2026</td>

<td>

<span class="badge bg-danger">

Cancelled

</span>

</td>

<td>

<span class="badge bg-secondary">

Refunded

</span>

</td>

</tr>

</tbody>

</table>

</div>

</div>

<br>

<div class="text-center">

<a href="customer-dashboard.php" class="btn btn-danger">

<i class="bi bi-arrow-left"></i>

Back to Dashboard

</a>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>