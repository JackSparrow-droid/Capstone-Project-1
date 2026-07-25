<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Restaurants | Foodify</title>

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
<a class="nav-link active" href="restaurants.html">Restaurants</a>
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

<!-- Heading -->

<section class="py-5 bg-light">

<div class="container text-center">

<h1 class="fw-bold">

Popular Restaurants

</h1>

<p class="text-muted">

Order from your favourite restaurants.

</p>

</div>

</section>

<!-- Search -->

<section class="py-4">

<div class="container">

<div class="row">

<div class="col-lg-8">

<input
type="text"
class="form-control"
id="searchBox"
placeholder="Search Restaurant">

</div>

<div class="col-lg-4">

<select class="form-select" id="categoryFilter">

<option>All Categories</option>

<option>Pizza</option>

<option>Burger</option>

<option>Chinese</option>

<option>South Indian</option>

<option>Biryani</option>

</select>

</div>

</div>

</div>

</section>

<!-- Restaurants -->

<section class="pb-5">

<div class="container">

<div class="row g-4">

<!-- Card 1 -->

<div class="col-lg-4 restaurant-card"
     data-name="Pizza Hub"
     data-category="Pizza">

<div class="card shadow border-0 position-relative">

<img src="images/rest1.jpg" class="card-img-top">

<button class="btn btn-light position-absolute top-0 end-0 m-2 rounded-circle shadow">

<i class="bi bi-heart"></i>

</button>

<div class="card-body">

<h4>Pizza Hub</h4>

<p>Italian • Fast Food</p>

<p>⭐ 4.8</p>

<p class="text-success">

<i class="bi bi-clock"></i>

Delivery : 30-40 mins

</p>


<a href="food-details.html"

class="btn btn-danger w-100">

View Menu

</a>

</div>

</div>

</div>

<!-- Card 2 -->

<div class="col-lg-4 restaurant-card"
     data-name="Pizza Hub"
     data-category="Pizza">

<div class="card shadow border-0 position-relative">

<img src="images/rest2.jpg" class="card-img-top">

<div class="card-body">

<h4>Burger Point</h4>

<p>Burger • Snacks</p>

<p>⭐ 4.7</p>

<p class="text-success">

<i class="bi bi-clock"></i>

Delivery : 20-30 mins

</p>

<a href="food-details.html"

class="btn btn-danger w-100">

View Menu

</a>

</div>

</div>

</div>

<!-- Card 3 -->

<div class="col-lg-4 restaurant-card"
     data-name="Chinese Corner"
     data-category="Chinese">

<div class="card shadow border-0 position-relative">

<img src="images/rest3.jpg" class="card-img-top">

<div class="card-body">

<h4>Chinese Corner</h4>

<p>Chinese • Noodles</p>

<p>⭐ 4.9</p>

<p class="text-success">

<i class="bi bi-clock"></i>

Delivery : 25-35 mins

</p>

<a href="food-details.html"

class="btn btn-danger w-100">

View Menu

</a>

</div>

</div>

</div>

<!-- Restaurant Card 4 -->

<div class="col-lg-4 restaurant-card"
     data-name="South Indian Cafe"
     data-category="South Indian">

    <div class="card shadow border-0 position-relative">

        <img src="images/rest4.jpg" class="card-img-top" alt="Restaurant">

        <div class="card-body">

            <h4>South Indian Cafe</h4>

            <p>South Indian • Dosa</p>

            <p>⭐ 4.6</p>

            <p class="text-success">
                <i class="bi bi-clock"></i>
                Delivery : 15-25 mins
            </p>

            <a href="food-details.html" class="btn btn-danger w-100">
                View Menu
            </a>

        </div>

    </div>

</div>

<!-- Restaurant Card 5 -->

<div class="col-lg-4 restaurant-card"
     data-name="Biryani Palace"
     data-category="Biryani">

    <div class="card shadow border-0 position-relative">

        <img src="images/rest5.jpg" class="card-img-top" alt="Restaurant">

        <div class="card-body">

            <h4>Biryani Palace</h4>

            <p>Biryani • Mughlai</p>

            <p>⭐ 4.9</p>

            <p class="text-success">
                <i class="bi bi-clock"></i>
                Delivery : 35-45 mins
            </p>

            <a href="food-details.html" class="btn btn-danger w-100">
                View Menu
            </a>

        </div>

    </div>

</div>

<!-- Restaurant Card 6 -->

<div class="col-lg-4 restaurant-card"
     data-name="Sandwich House"
     data-category="Burger">

    <div class="card shadow border-0 position-relative">

        <img src="images/rest6.jpg" class="card-img-top" alt="Restaurant">

        <div class="card-body">

            <h4>Sandwich House</h4>

            <p>Sandwich • Fast Food</p>

            <p>⭐ 4.5</p>

            <p class="text-success">
                <i class="bi bi-clock"></i>
                Delivery : 20-30 mins
            </p>

            <a href="food-details.html" class="btn btn-danger w-100">
                View Menu
            </a>

        </div>

    </div>

</div>

<!-- Restaurant Card 7 -->

<div class="col-lg-4 restaurant-card"
     data-name="Tandoori Express"
     data-category="Biryani">

    <div class="card shadow border-0 position-relative">

        <img src="images/rest7.jpg" class="card-img-top" alt="Restaurant">

        <div class="card-body">

            <h4>Tandoori Express</h4>

            <p>North Indian</p>

            <p>⭐ 4.7</p>

            <p class="text-success">
                <i class="bi bi-clock"></i>
                Delivery : 30-35 mins
            </p>

            <a href="food-details.html" class="btn btn-danger w-100">
                View Menu
            </a>

        </div>

    </div>

</div>

<!-- Restaurant Card 8 -->

<div class="col-lg-4 restaurant-card"
     data-name="Roll King"
     data-category="Burger">

    <div class="card shadow border-0 position-relative">

        <img src="images/rest8.jpg" class="card-img-top" alt="Restaurant">

        <div class="card-body">

            <h4>Roll King</h4>

            <p>Rolls • Wraps</p>

            <p>⭐ 4.4</p>

            <p class="text-success">
                <i class="bi bi-clock"></i>
                Delivery : 20-25 mins
            </p>

            <a href="food-details.html" class="btn btn-danger w-100">
                View Menu
            </a>

        </div>

    </div>

</div>

<!-- Restaurant Card 9 -->

<div class="col-lg-4 restaurant-card"
     data-name="Sweet Treats"
     data-category="Pizza">

    <div class="card shadow border-0 position-relative">

        <img src="images/rest9.jpg" class="card-img-top" alt="Restaurant">

        <div class="card-body">

            <h4>Sweet Treats</h4>

            <p>Desserts • Ice Cream</p>

            <p>⭐ 4.8</p>

            <p class="text-success">
                <i class="bi bi-clock"></i>
                Delivery : 15-20 mins
            </p>

            <a href="food-details.html" class="btn btn-danger w-100">
                View Menu
            </a>

        </div>

    </div>

</div>

</div>

<!-- Pagination -->

<div class="text-center mt-5">

    <nav>

        <ul class="pagination justify-content-center">

            <li class="page-item active">
                <a class="page-link" href="#">1</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>

        </ul>

    </nav>

</div>

</div>

</section>

<!-- Footer -->

<footer class="bg-dark text-white py-4">

<div class="container text-center">

<h4>🍔 Foodify</h4>

<p>Your Favourite Online Food Delivery System</p>

<p class="mb-0">
© 2026 Foodify. All Rights Reserved.
</p>

</div>

</footer>

</div>

</div>

</section>

<script>
const searchBox = document.getElementById("searchBox");
const cards = document.querySelectorAll(".restaurant-card");

searchBox.addEventListener("keyup", function () {

    const searchValue = this.value.toLowerCase();

    cards.forEach(function(card){

        const name = card.getAttribute("data-name").toLowerCase();

        if(name.includes(searchValue)){
            card.style.display = "block";
        }else{
            card.style.display = "none";
        }

    });

});

const categoryFilter = document.getElementById("categoryFilter");

categoryFilter.addEventListener("change", function(){

    const category = this.value;

    cards.forEach(function(card){

        const cardCategory = card.getAttribute("data-category");

        if(category === "All Categories" || cardCategory === category){
            card.style.display = "block";
        }else{
            card.style.display = "none";
        }

    });

});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>