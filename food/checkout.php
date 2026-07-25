<?php
include "config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Checkout | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="style.css">

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg bg-white shadow-sm">

<div class="container">

<a class="navbar-brand fw-bold text-danger fs-2" href="index.html">

🍔 Foodify

</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.html">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="restaurants.html">Restaurants</a>
</li>

<li class="nav-item">
<a class="nav-link" href="cart.html">Cart</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="checkout.html">Checkout</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- Checkout -->

<section class="py-5">

<div class="container">

<h2 class="text-center mb-5">

Checkout

</h2>

<div class="row">

<!-- Billing Details -->

<div class="col-lg-7">

<div class="card shadow p-4">

<h4 class="mb-4">

Billing Details

</h4>

<form>

<div class="row">

<div class="col-md-6 mb-3">

<label>First Name</label>

<input
type="text"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label>Last Name</label>

<input
type="text"
class="form-control"
required>

</div>

</div>

<div class="mb-3">

<label>Email Address</label>

<input
type="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Mobile Number</label>

<input
type="tel"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Delivery Address</label>

<textarea
class="form-control"
rows="4"
required></textarea>

</div>

<div class="row">
    

<div class="col-md-6 mb-3">

<label>City</label>

<input
type="text"
class="form-control"
required>

</div>


<div class="col-md-6 mb-3">

<label>Pincode</label>

<input
type="text"
class="form-control"
required>

</div>


</div>
<!-- Order Summary -->

</form>

</div>

</div>

<!-- Right Side -->

<div class="col-lg-5">

<div class="card shadow p-4">

<h4 class="mb-4">

Order Summary

</h4>

<table class="table">

<tr>

<td>Margherita Pizza</td>

<td class="text-end">₹299</td>

</tr>

<tr>

<td>Cheese Burger</td>

<td class="text-end">₹199</td>

</tr>

<tr>

<td>French Fries</td>

<td class="text-end">₹149</td>

</tr>

<tr>

<td>Delivery Charge</td>

<td class="text-end">₹50</td>

</tr>

<tr class="fw-bold">

<td>Total</td>

<td class="text-end text-danger">

₹697

</td>

</tr>

</table>

<hr>

<h5 class="mb-3">

Payment Method

</h5>

<div class="form-check">

<input class="form-check-input"
type="radio"
name="payment"
checked>

<label class="form-check-label">

Cash on Delivery

</label>

</div>

<div class="form-check">

<input class="form-check-input"
type="radio"
name="payment">

<label class="form-check-label">

UPI Payment

</label>

</div>

<div class="form-check mb-4">

<input class="form-check-input"
type="radio"
name="payment">

<label class="form-check-label">

Credit / Debit Card

</label>

</div>

<a href="payment.html" class="btn btn-danger btn-lg">

Proceed to Payment

</a>

</div>

</div>

</div>

</div>

</section>

<!-- Footer -->

<footer class="bg-dark text-white text-center py-4 mt-5">

<div class="container">

<h4>🍔 Foodify</h4>

<p>

Fast • Fresh • Delicious Food Delivered to Your Doorstep

</p>

<hr class="bg-light">

<p class="mb-0">

© 2026 Foodify | Online Food Delivery System

</p>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>