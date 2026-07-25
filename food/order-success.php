<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Order Success | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{

background:#f8f9fa;

display:flex;

justify-content:center;

align-items:center;

height:100vh;

font-family:Arial,sans-serif;

}

.success-card{

background:#fff;

padding:40px;

border-radius:20px;

box-shadow:0 10px 30px rgba(0,0,0,.15);

text-align:center;

max-width:500px;

width:100%;

}

.success-icon{

font-size:80px;

color:#28a745;

}

.order-id{

background:#f1f1f1;

padding:10px;

border-radius:8px;

font-weight:bold;

margin:20px 0;

}

.btn{

margin:8px;

}

</style>

</head>

<body>

<div class="success-card">

<i class="bi bi-check-circle-fill success-icon"></i>

<h2 class="mt-3">

Payment Successful

</h2>

<p class="text-muted">

🎉 Your order has been placed successfully.

</p>

<div class="order-id">

Order ID :
<strong>#FD2026001</strong>

</div>

<p>

Estimated Delivery Time

<br>

<strong class="text-success">

25 - 35 Minutes

</strong>

</p>

<a href="track-order.html"

class="btn btn-danger">

<i class="bi bi-truck"></i>

Track Order

</a>

<a href="index.html"

class="btn btn-outline-dark">

<i class="bi bi-house"></i>

Back to Home

</a>

</div>

</body>

</html>