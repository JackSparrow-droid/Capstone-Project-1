<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Track Order | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
background:#f5f5f5;
font-family:Arial,sans-serif;
}

.header{
background:#dc3545;
color:white;
padding:35px;
text-align:center;
}

.track-card{
background:white;
padding:35px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,.1);
margin-top:40px;
}

.step{
text-align:center;
position:relative;
}

.circle{
width:70px;
height:70px;
background:#198754;
color:white;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:30px;
margin:auto;
}

.line{
height:5px;
background:#198754;
margin-top:33px;
}

.status{
margin-top:15px;
font-weight:bold;
}

.order-info{
background:#fff8e1;
padding:20px;
border-radius:10px;
margin-bottom:40px;
}

</style>

</head>

<body>

<div class="header">

<h2>

🚚 Track Your Order

</h2>

<p>

Foodify Live Delivery Status

</p>

</div>

<div class="container">

<div class="track-card">

<div class="order-info">

<h4>

Order #1001

</h4>

<p>

Customer : Rahul Sharma

</p>

<p>

Restaurant : Pizza Hub

</p>

<p>

Delivery Time : 25-30 Minutes

</p>

</div>

<div class="row text-center">

<div class="col-md-3">

<div class="step">

<div class="circle">

<i class="bi bi-check2"></i>

</div>

<p class="status">

Order Confirmed

</p>

</div>

</div>

<div class="col-md-3">

<div class="step">

<div class="circle">

<i class="bi bi-fire"></i>

</div>

<p class="status">

Preparing

</p>

</div>

</div>

<div class="col-md-3">

<div class="step">

<div class="circle">

<i class="bi bi-bicycle"></i>

</div>

<p class="status">

Out For Delivery

</p>

</div>

</div>

<div class="col-md-3">

<div class="step">

<div class="circle bg-secondary">

<i class="bi bi-house-check"></i>

</div>

<p class="status">

Delivered

</p>

</div>

</div>

</div>

<div class="progress mt-5" style="height:12px;">

<div
class="progress-bar bg-success"
style="width:75%;">

</div>

</div>

<div class="text-center mt-4">

<h5>

Current Status

</h5>

<span class="badge bg-warning text-dark fs-6">

🚚 Out For Delivery

</span>

</div>

<div class="text-center mt-5">

<a href="order-history.html"
class="btn btn-danger">

<i class="bi bi-arrow-left"></i>

Back to Order History

</a>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>