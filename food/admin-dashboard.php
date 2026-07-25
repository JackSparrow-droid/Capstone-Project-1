<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<link rel="stylesheet" href="style.css">

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">

<div class="container-fluid">

<a class="navbar-brand fw-bold fs-3" href="#">

🍔 Foodify Admin

</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">

<a class="nav-link active" href="#">

Dashboard

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="login.html">

Logout

</a>

</li>

</ul>

</div>

</div>

</nav>

<!-- Dashboard -->

<section class="py-5">

<div class="container-fluid">

<div class="row">

<!-- Sidebar -->

<div class="col-lg-2">

<div class="list-group shadow">

<a href="#" class="list-group-item list-group-item-action active">

<i class="bi bi-speedometer2"></i>

Dashboard

</a>

<a href="#" class="list-group-item list-group-item-action">

<i class="bi bi-people"></i>

Manage Users

</a>

<a href="#" class="list-group-item list-group-item-action">

<i class="bi bi-shop"></i>

Restaurants

</a>

<a href="#" class="list-group-item list-group-item-action">

<i class="bi bi-egg-fried"></i>

Food Items

</a>

<a href="#" class="list-group-item list-group-item-action">

<i class="bi bi-bag-check"></i>

Orders

</a>

<a href="#" class="list-group-item list-group-item-action">

<i class="bi bi-cash-stack"></i>

Revenue

</a>

<a href="login.html" class="list-group-item list-group-item-action text-danger">

<i class="bi bi-box-arrow-right"></i>

Logout

</a>

</div>

</div>

<!-- Main Content -->

<div class="col-lg-10">

<div class="row">

<div class="col-md-3">

<div class="card shadow text-center">

<div class="card-body">

<h2 class="text-primary">150</h2>

<p>Total Users</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow text-center">

<div class="card-body">

<h2 class="text-success">35</h2>

<p>Restaurants</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow text-center">

<div class="card-body">

<h2 class="text-warning">520</h2>

<p>Orders</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card shadow text-center">

<div class="card-body">

<h2 class="text-danger">₹2.5L</h2>

<p>Total Revenue</p>

</div>

</div>

</div>

</div>

<br>

<!-- Manage Users -->

<div class="card shadow">

<div class="card-body">

<h4 class="mb-3">

Manage Users

</h4>

<table class="table table-striped">

<thead>

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Status</th>

<th>Action</th>

</tr>

</thead>

<tbody>

<tr>

<td>1</td>

<td>Rahul</td>

<td>rahul@gmail.com</td>

<td>

<span class="badge bg-success">

Active

</span>

</td>

<td>

<button class="btn btn-primary btn-sm">

Edit

</button>

<button class="btn btn-danger btn-sm">

Delete

</button>

</td>

</tr>

<tr>

<td>2</td>

<td>Priya</td>

<td>priya@gmail.com</td>

<td>

<span class="badge bg-success">

Active

</span>

</td>

<td>

<button class="btn btn-primary btn-sm">

Edit

</button>

<button class="btn btn-danger btn-sm">

Delete

</button>

</td>

</tr>

<tr>

<td>3</td>

<td>Amit</td>

<td>amit@gmail.com</td>

<td>

<span class="badge bg-warning">

Inactive

</span>

</td>

<td>

<button class="btn btn-primary btn-sm">

Edit

</button>

<button class="btn btn-danger btn-sm">

Delete

</button>

</td>

</tr>

</tbody>

</table>

</div>

</div>

<br>

<!-- Manage Restaurants -->

<div class="card shadow">

<div class="card-body">

<h4 class="mb-3">

Manage Restaurants

</h4>

<table class="table table-bordered">

<thead class="table-light">

<tr>

<th>Restaurant</th>

<th>Owner</th>

<th>Status</th>

<th>Action</th>

</tr>

</thead>

<tbody>

<tr>

<td>Pizza Palace</td>

<td>Rahul</td>

<td><span class="badge bg-success">Approved</span></td>

<td>

<button class="btn btn-primary btn-sm">Edit</button>

<button class="btn btn-danger btn-sm">Delete</button>

</td>

</tr>

<tr>

<td>Burger House</td>

<td>Priya</td>

<td><span class="badge bg-warning">Pending</span></td>

<td>

<button class="btn btn-success btn-sm">Approve</button>

<button class="btn btn-danger btn-sm">Reject</button>

</td>

</tr>

</tbody>

</table>

</div>

</div>

<br>

<!-- Recent Orders -->

<div class="card shadow">

<div class="card-body">

<h4 class="mb-3">

Recent Orders

</h4>

<table class="table table-hover">

<thead>

<tr>

<th>Order ID</th>

<th>Customer</th>

<th>Restaurant</th>

<th>Amount</th>

<th>Status</th>

</tr>

</thead>

<tbody>

<tr>

<td>#1001</td>

<td>Rahul</td>

<td>Pizza Palace</td>

<td>₹299</td>

<td><span class="badge bg-success">Delivered</span></td>

</tr>

<tr>

<td>#1002</td>

<td>Priya</td>

<td>Burger House</td>

<td>₹199</td>

<td><span class="badge bg-info">Preparing</span></td>

</tr>

<tr>

<td>#1003</td>

<td>Amit</td>

<td>Chinese Corner</td>

<td>₹249</td>

<td><span class="badge bg-warning">Pending</span></td>

</tr>

</tbody>

</table>

</div>

</div>

<br>

<!-- Revenue Summary -->

<div class="card shadow">

<div class="card-body">

<h4 class="mb-3">

Revenue Summary

</h4>

<div class="row text-center">

<div class="col-md-4">

<h3 class="text-success">

₹50,000

</h3>

<p>Today</p>

</div>

<div class="col-md-4">

<h3 class="text-primary">

₹3,20,000

</h3>

<p>This Month</p>

</div>

<div class="col-md-4">

<h3 class="text-danger">

₹12,50,000

</h3>

<p>Total Revenue</p>

</div>

</div>

</div>

</div>

<br>

<!-- Website Settings -->

<div class="card shadow">

<div class="card-body">

<h4 class="mb-3">

Website Settings

</h4>

<form>

<div class="mb-3">

<label class="form-label">

Website Name

</label>

<input
type="text"
class="form-control"
value="Foodify">

</div>

<div class="mb-3">

<label class="form-label">

Support Email

</label>

<input
type="email"
class="form-control"
value="support@foodify.com">

</div>

<div class="mb-3">

<label class="form-label">

Contact Number

</label>

<input
type="text"
class="form-control"
value="+91 9876543210">

</div>

<button class="btn btn-danger">

Save Settings

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- Footer -->

<footer class="bg-dark text-white text-center py-4 mt-5">

<div class="container">

<h4>

🍔 Foodify Admin Panel

</h4>

<p>

Manage Users • Restaurants • Orders • Revenue

</p>

<p class="mb-0">

© 2026 Foodify. All Rights Reserved.

</p>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>