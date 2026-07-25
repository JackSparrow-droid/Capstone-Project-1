<?php
include "config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Shopping Cart | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" href="style.css">

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">

<div class="container">

<a class="navbar-brand fw-bold text-danger fs-2" href="index.html">

🍔 Foodify

</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbar">

<ul class="navbar-nav ms-auto">

<li class="nav-item">

<a class="nav-link" href="index.html">Home</a>

</li>

<li class="nav-item">

<a class="nav-link" href="restaurants.html">Restaurants</a>

</li>

<li class="nav-item">

<a class="nav-link active" href="cart.html">Cart</a>

</li>

<li class="nav-item">

<a class="nav-link" href="login.html">Login</a>

</li>

</ul>

</div>

</div>

</nav>

<!-- Cart -->

<section class="py-5">

<div class="container">

<h2 class="text-center mb-4">

🛒 Shopping Cart

</h2>

<div class="table-responsive">

<table class="table table-bordered table-hover align-middle">

<thead class="table-danger">

<tr>

<th>Image</th>

<th>Food Item</th>

<th>Price</th>

<th>Quantity</th>

<th>Total</th>

<th>Action</th>

</tr>

</thead>

<tbody>

<tr>

<td width="120">

<img src="images/pizza1.jpg"

class="img-fluid rounded">

</td>

<td>

Margherita Pizza

</td>

<td>

₹299

</td>

<td width="170">

<div class="input-group">

<button class="btn btn-outline-secondary">

-

</button>

<input

type="text"

class="form-control text-center"

value="1">

<button class="btn btn-outline-secondary">

+

</button>

</div>

</td>

<td>

₹299

</td>

<td>

<button class="btn btn-danger">

<i class="bi bi-trash"></i>

Remove

</button>

</td>

</tr>

<tr>

<td>

<img src="images/burger1.jpg"

class="img-fluid rounded">

</td>

<td>

Cheese Burger

</td>

<td>

₹199

</td>

<td>

<div class="input-group">

<button class="btn btn-outline-secondary">

-

</button>

<input

type="text"

class="form-control text-center"

value="2">

<button class="btn btn-outline-secondary">

+

</button>

</div>

</td>

<td>

₹398

</td>

<td>

<button class="btn btn-danger">

<i class="bi bi-trash"></i>

Remove

</button>

</td>

</tr>

</tbody>

</table>
<!-- Coupon & Cart Summary -->

<div class="row mt-5">

    <!-- Coupon -->

    <div class="col-lg-6">

        <div class="card shadow p-4">

            <h4>Apply Coupon</h4>

            <div class="input-group mt-3">

                <input type="text"
                       class="form-control"
                       placeholder="Enter Coupon Code">

                <button class="btn btn-success">

                    Apply

                </button>

            </div>

        </div>

    </div>

    <!-- Cart Summary -->

    <div class="col-lg-6">

        <div class="card shadow p-4">

            <h4>Cart Summary</h4>

            <hr>

            <div class="d-flex justify-content-between">

                <span>Subtotal</span>

                <span>₹697</span>

            </div>

            <div class="d-flex justify-content-between">

                <span>Delivery Charge</span>

                <span>₹50</span>

            </div>

            <div class="d-flex justify-content-between">

                <span>Discount</span>

                <span class="text-success">-₹50</span>

            </div>

            <hr>

            <div class="d-flex justify-content-between fw-bold fs-5">

                <span>Grand Total</span>

                <span class="text-danger">₹697</span>

            </div>

            <div class="mt-4 d-grid gap-2">

                <a href="restaurants.html" class="btn btn-outline-primary">

                    Continue Shopping

                </a>

                <a href="checkout.html" class="btn btn-danger">

                    Proceed to Checkout

                </a>

            </div>

        </div>

    </div>

</div>

</div>

</section>

<!-- Footer -->

<footer class="bg-dark text-white text-center py-4 mt-5">

    <div class="container">

        <h4>🍔 Foodify</h4>

        <p>Fast • Fresh • Delicious</p>

        <p class="mb-0">

            © 2026 Foodify. All Rights Reserved.

        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

</div>