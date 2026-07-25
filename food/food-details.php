<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Food Details | Foodify</title>

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
<a class="nav-link" href="login.html">Login</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- Food Details -->

<section class="py-5">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<img src="images/pizza1.jpg"

class="img-fluid rounded shadow"

alt="Pizza">

</div>

<div class="col-lg-6">

<h2 class="fw-bold">

Margherita Pizza

</h2>

<p class="text-muted">

Fresh mozzarella cheese, tomato sauce, oregano and basil served on a crispy crust.

</p>

<h3 class="text-danger">

₹299

</h3>

<p>

⭐ 4.8 (1,250 Reviews)

</p>

<p>

<i class="bi bi-clock text-success"></i>

Delivery Time : 30-40 mins

</p>

<label class="fw-bold">

Quantity

</label>

<div class="d-flex mb-3">

<button class="btn btn-outline-secondary"

onclick="decreaseQty()">

-

</button>

<input

type="text"

id="qty"

class="form-control text-center mx-2"

value="1"

style="width:70px;">

<button class="btn btn-outline-secondary"

onclick="increaseQty()">

+

</button>

</div>

<button class="btn btn-danger me-2" onclick="addToCart()">

<i class="bi bi-cart-plus"></i>

Add To Cart

</button>

<button class="btn btn-success" onclick="buyNow()">
    Buy Now
</button>

</div>

</div>

</div>

</section>
<!-- Related Food Items -->

<section class="py-5 bg-light">

<div class="container">

<h2 class="text-center mb-4">Related Food Items</h2>

<div class="row g-4">

<!-- Item 1 -->

<div class="col-lg-4">

<div class="card shadow border-0 related-card">

<img src="images/burger1.jpg" class="card-img-top" alt="Burger">

<div class="card-body text-center">

<h5>Cheese Burger</h5>

<p class="text-danger fw-bold">₹199</p>

<p>⭐ 4.6</p>

<a href="food-details.html" class="btn btn-danger">
View Details
</a>

</div>

</div>

</div>

<!-- Item 2 -->

<div class="col-lg-4">

<div class="card shadow border-0 related-card">

<img src="images/noodles1.jpg" class="card-img-top" alt="Noodles">

<div class="card-body text-center">

<h5>Hakka Noodles</h5>

<p class="text-danger fw-bold">₹179</p>

<p>⭐ 4.7</p>

<a href="food-details.html" class="btn btn-danger">
View Details
</a>

</div>

</div>

</div>

<!-- Item 3 -->

<div class="col-lg-4">

<div class="card shadow border-0 related-card">

<img src="images/fries.jpg" class="card-img-top" alt="Fries">

<div class="card-body text-center">

<h5>French Fries</h5>

<p class="text-danger fw-bold">₹99</p>

<p>⭐ 4.5</p>

<a href="food-details.html" class="btn btn-danger">
View Details
</a>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- Customer Reviews -->

<section class="py-5">

<div class="container">

<h2 class="text-center mb-4">

Customer Reviews

</h2>

<div class="card mb-3">

<div class="card-body">

<h5>⭐⭐⭐⭐⭐ Rahul Sharma</h5>

<p>

Very tasty pizza and fast delivery.

</p>

</div>

</div>

<div class="card mb-3">

<div class="card-body">

<h5>⭐⭐⭐⭐ Priya Patel</h5>

<p>

Fresh food with excellent taste.

</p>

</div>

</div>

<div class="card">

<div class="card-body">

<h5>⭐⭐⭐⭐⭐ Adarsh</h5>

<p>

Best online food delivery experience.

</p>

</div>

</div>

</div>

</section>

<!-- Footer -->

<footer class="bg-dark text-white text-center py-4">

<div class="container">

<h4>🍔 Foodify</h4>

<p>

Delicious Food Delivered Fast

</p>

<p class="mb-0">

© 2026 Foodify. All Rights Reserved.

</p>

</div>

</footer>

<script>

function increaseQty(){

let qty=document.getElementById("qty");

qty.value=parseInt(qty.value)+1;

}

function decreaseQty(){

let qty=document.getElementById("qty");

if(parseInt(qty.value)>1){

qty.value=parseInt(qty.value)-1;

}

}

</script>

<script>
function addToCart() {

    alert("Item Added Successfully!");

    window.location.href = "cart.html";

}

function buyNow() {

    window.location.href = "checkout.html";

}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>