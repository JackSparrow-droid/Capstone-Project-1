<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodify | Online Food Delivery System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">

        <a class="navbar-brand fw-bold text-danger fs-2" href="#">
            🍔 Foodify
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Restaurants</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Offers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>

            <div class="ms-3 d-flex align-items-center">

    <a href="cart.html" class="btn btn-outline-danger me-2">
        <i class="bi bi-cart3"></i> Cart
    </a>

    <a href="choose-login.php" class="btn btn-danger me-2">
        Login
    </a>

    <button id="themeToggle" class="btn btn-outline-dark">
        🌙
    </button>

</div>

        </div>
    </div>
</nav>

<!-- ================= HERO SECTION ================= -->

<section class="hero py-5">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h5 class="text-danger fw-bold mb-3">
Fresh & Delicious Food
</h5>

<h1 class="display-3 fw-bold mb-4">
Order Your <br>
Favorite Food <br>
Online
</h1>

<p class="text-muted mb-4">

Discover the best restaurants near you and
get your favourite meals delivered hot and fresh
within minutes.

</p>

<div class="d-flex">

<a href="restaurants.html"
class="btn btn-danger btn-lg me-3">

Order Now

</a>

<a href="#categories"
class="btn btn-outline-dark btn-lg">

Explore Menu

</a>

</div>

</div>

<div class="col-lg-6 text-center">

<img src="images/hero-food.jpg"
class="img-fluid"
alt="Food">

</div>

</div>

</div>

</section>


<!-- Search Box -->

<section class="pb-5">

<div class="container">

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="input-group shadow">

<input type="text"
class="form-control form-control-lg"
placeholder="Search Food or Restaurant...">

<button class="btn btn-danger">

<i class="bi bi-search"></i>

Search

</button>

</div>

</div>

</div>

</div>

</section>

<!-- Categories Start -->

<section id="categories" class="py-5 bg-light">

<div class="container">

<div class="text-center mb-5">

<h2 class="fw-bold">

What's Your Craving?

</h2>

<p class="text-muted">

Choose your favourite food category

</p>

</div>

<div class="row g-4">

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow text-center p-4">

<img src="images/pizza1.jpg"
width="270"
class="mx-auto">

<h4 class="mt-3">
Pizza
</h4>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow text-center p-4">

<img src="images/burger1.jpg"
width="230"
class="mx-auto">

<h4 class="mt-3">
Burger
</h4>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow text-center p-4">

<img src="images/noodles1.jpg"
width="172"
class="mx-auto">

<h4 class="mt-3">
Noodles
</h4>

</div>

</div>

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow text-center p-4">

<img src="images/fries.jpg"
width="173"
class="mx-auto">

<h4 class="mt-3">
French Fries
</h4>

</div>

</div>

</div>

</div>

</section>
<!-- ================= FEATURED RESTAURANTS ================= -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Popular Restaurants</h2>
            <p class="text-muted">
                Order from the best restaurants near you
            </p>
        </div>

        <div class="row g-4">

            <!-- Restaurant 1 -->

            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow">

                    <img src="images/rest1.jpg"
                        class="card-img-top"
                        alt="Restaurant">

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Pizza Hub
                        </h4>

                        <p class="text-muted">
                            Italian • Fast Food
                        </p>

                        <div class="d-flex justify-content-between">

                            <span class="text-warning">
                                ★★★★★
                            </span>

                            <span class="fw-bold text-success">
                                30-40 min
                            </span>

                        </div>

                        <a href="restaurant-details.html"
                            class="btn btn-danger w-100 mt-3">

                            View Menu

                        </a>

                    </div>

                </div>

            </div>

            <!-- Restaurant 2 -->

            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow">

                    <img src="images/rest2.jpg"
                        class="card-img-top"
                        alt="Restaurant">

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Burger Point
                        </h4>

                        <p class="text-muted">
                            Burgers • Snacks
                        </p>

                        <div class="d-flex justify-content-between">

                            <span class="text-warning">
                                ★★★★☆
                            </span>

                            <span class="fw-bold text-success">
                                20-30 min
                            </span>

                        </div>
                        

                        <a href="restaurant-details.html"
                            class="btn btn-danger w-100 mt-3">

                            View Menu

                        </a>

                    </div>

                </div>

            </div>

            <!-- Restaurant 3 -->

            <div class="col-lg-4 col-md-6">

                <div class="card border-0 shadow">

                    <img src="images/rest3.jpg"
                        class="card-img-top"
                        alt="Restaurant">

                    <div class="card-body">

                        <h4 class="fw-bold">
                            Chinese Corner
                        </h4>

                        <p class="text-muted">
                            Chinese • Noodles
                        </p>

                        <div class="d-flex justify-content-between">

                            <span class="text-warning">
                                ★★★★★
                            </span>

                            <span class="fw-bold text-success">
                                25-35 min
                            </span>

                        </div>

                        <a href="restaurant-details.html"
                            class="btn btn-danger w-100 mt-3">

                            View Menu

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= POPULAR FOODS ================= -->

<section class="py-5 bg-light">

<div class="container">

<div class="text-center mb-5">

<h2 class="fw-bold">

Popular Foods

</h2>

<p class="text-muted">

Most ordered dishes this week

</p>

</div>

<div class="row g-4">

<!-- Food 1 -->

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow">

<img src="images/pizza1.jpg"
class="card-img-top">

<div class="card-body">

<h5>Cheese Pizza</h5>

<h4 class="text-danger">
₹399
</h4>

<a href="#"
class="btn btn-danger w-100">

Add to Cart

</a>

</div>

</div>

</div>

<!-- Food 2 -->

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow">

<img src="images/burger1.jpg"
class="card-img-top">

<div class="card-body">

<h5>Burger</h5>

<h4 class="text-danger">
₹199
</h4>

<a href="#"
class="btn btn-danger w-100">

Add to Cart

</a>

</div>

</div>

</div>

<!-- Food 3 -->

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow">

<img src="images/noodles1.jpg"
class="card-img-top">

<div class="card-body">

<h5>Hakka Noodles</h5>

<h4 class="text-danger">
₹179
</h4>

<a href="#"
class="btn btn-danger w-100">

Add to Cart

</a>

</div>

</div>

</div>

<!-- Food 4 -->

<div class="col-lg-3 col-md-6">

<div class="card border-0 shadow">

<img src="images/fries.jpg"
class="card-img-top">

<div class="card-body">

<h5>French Fries</h5>

<h4 class="text-danger">
₹149
</h4>

<a href="#"
class="btn btn-danger w-100">

Add to Cart

</a>

</div>

</div>

</div>

</div>

</div>

</section>
<!-- ================= SPECIAL OFFERS ================= -->

<section class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <img src="images/special_offer.jpg" class="img-fluid" alt="Offer">

            </div>

            <div class="col-lg-6">

                <h2 class="fw-bold mb-3">
                    Today's Special Offer
                </h2>

                <h4 class="text-danger">
                    Flat 50% OFF
                </h4>

                <p class="text-muted mt-3">

                    Get amazing discounts on your favourite meals.
                    Order now and enjoy fresh food delivered to your doorstep.

                </p>

                <a href="restaurants.html" class="btn btn-danger btn-lg">
                    Order Now
                </a>

            </div>

        </div>

    </div>

</section>

<!-- ================= WHY CHOOSE US ================= -->

<section class="py-5 bg-light">

<div class="container">

<div class="text-center mb-5">

<h2 class="fw-bold">

Why Choose Foodify?

</h2>

<p class="text-muted">

Fast, Fresh & Reliable Food Delivery

</p>

</div>

<div class="row text-center g-4">

<div class="col-lg-4 col-md-4 col-sm-12">

<div class="p-4 shadow rounded bg-white h-100">

<i class="bi bi-truck display-4 text-success"></i>

<h4 class="mt-3">

Fast Delivery

</h4>

<p>

Food delivered within 30 minutes.

</p>

</div>

</div>

<div class="col-lg-4">

<div class="p-4 shadow rounded bg-white">

<i class="bi bi-shield-check display-4 text-success"></i>

<h4 class="mt-3">

100% Safe Food

</h4>

<p>

Fresh ingredients and hygienic cooking.

</p>

</div>

</div>

<div class="col-lg-4">

<div class="p-4 shadow rounded bg-white">

<i class="bi bi-star-fill display-4 text-success"></i>

<h4 class="mt-3">

Best Quality

</h4>

<p>

Top rated restaurants with quality food.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- ================= CUSTOMER REVIEWS ================= -->

<section class="py-5">

<div class="container">

<div class="text-center mb-5">

<h2 class="fw-bold">

Customer Reviews

</h2>

</div>

<div class="row">

<div class="col-lg-4">

<div class="card shadow border-0 p-4">

<h5>Rahul Sharma</h5>

<p class="text-warning">
★★★★★
</p>

<p>

Amazing food quality and very fast delivery.

</p>

</div>

</div>

<div class="col-lg-4">

<div class="card shadow border-0 p-4">

<h5>Priya Patel</h5>

<p class="text-warning">
★★★★★
</p>

<p>

Loved the burgers. Packaging was excellent.

</p>

</div>

</div>

<div class="col-lg-4">

<div class="card shadow border-0 p-4">

<h5>Amit Verma</h5>

<p class="text-warning">
★★★★☆
</p>

<p>

Affordable prices with delicious food.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- ================= DOWNLOAD APP ================= -->

<section class="py-5 bg-danger text-white">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h2>

Download Our Mobile App

</h2>

<p>

Order anytime and anywhere using our Android & iOS App.

</p>

<a href="#" class="btn btn-light me-2">

Google Play

</a>

<a href="#" class="btn btn-dark">

App Store

</a>

</div>

<div class="col-lg-6 text-center">

<img src="images/mobile-app.png"
class="img-fluid"
width="300">

</div>

</div>

</div>

</section>

<!-- ================= NEWSLETTER ================= -->

<section class="py-5">

<div class="container">

<div class="text-center">

<h2>

Subscribe Newsletter

</h2>

<p>

Get latest offers and updates.

</p>

<div class="row justify-content-center">

<div class="col-lg-6">

<div class="input-group">

<input type="email"
class="form-control"
placeholder="Enter Email">

<button class="btn btn-danger">

Subscribe

</button>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- ================= FOOTER ================= -->

<footer class="bg-dark text-white pt-5">

<div class="container">

<div class="row">

<div class="col-lg-4">

<h3 class="text-danger">

Foodify

</h3>

<p>

Online Food Delivery System that connects customers with restaurants.

</p>

</div>

<div class="col-lg-4">

<h4>

Quick Links

</h4>

<ul class="list-unstyled">

<li><a href="#" class="text-white text-decoration-none">Home</a></li>

<li><a href="#" class="text-white text-decoration-none">Restaurants</a></li>

<li><a href="#" class="text-white text-decoration-none">Offers</a></li>

<li><a href="#" class="text-white text-decoration-none">Contact</a></li>

</ul>

</div>

<div class="col-lg-4">

<h4>

Follow Us

</h4>

<i class="bi bi-facebook fs-3 me-3"></i>

<i class="bi bi-instagram fs-3 me-3"></i>

<i class="bi bi-twitter-x fs-3 me-3"></i>

<i class="bi bi-youtube fs-3"></i>

</div>

</div>

<hr>

<div class="text-center pb-3">

© 2026 Foodify | Online Food Delivery System | All Rights Reserved.

</div>

</div>

</footer>

<!-- Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>