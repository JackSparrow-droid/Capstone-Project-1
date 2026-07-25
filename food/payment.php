<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Payment | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

body{
background:#f5f5f5;
font-family:Arial,Helvetica,sans-serif;
}

.payment-card{
max-width:700px;
margin:50px auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,.15);
}

.payment-option{
padding:15px;
border:2px solid #ddd;
border-radius:10px;
margin-bottom:15px;
cursor:pointer;
}

.payment-option:hover{
border-color:#dc3545;
background:#fff5f5;
}

.btn-danger{
border-radius:30px;
padding:12px;
font-size:18px;
}

</style>

</head>

<body>

<div class="container">

<div class="payment-card">

<h2 class="text-center text-danger mb-4">

💳 Payment

</h2>

<h5>Total Amount :
<span class="text-success">

₹699

</span>

</h5>

<hr>

<form id="paymentForm">

<div class="payment-option">

<input type="radio"
name="payment"
required>

💳 Credit / Debit Card

</div>

<div class="payment-option">

<input type="radio"
name="payment">

📱 UPI (Google Pay / PhonePe / Paytm)

</div>

<div class="payment-option">

<input type="radio"
name="payment">

🏦 Net Banking

</div>

<div class="payment-option">

<input type="radio"
name="payment">

💵 Cash on Delivery

</div>

<div class="mt-4">

<label class="form-label">

Card Holder Name

</label>

<input
type="text"
class="form-control"
placeholder="Enter Name">

</div>

<div class="mt-3">

<label class="form-label">

Card Number

</label>

<input
type="text"
class="form-control"
placeholder="1234 5678 9012 3456">

</div>

<div class="row mt-3">

<div class="col-md-6">

<label>

Expiry Date

</label>

<input
type="month"
class="form-control">

</div>

<div class="col-md-6">

<label>

CVV

</label>

<input
type="password"
class="form-control"
maxlength="3">

</div>

</div>

<div class="d-grid mt-4">

<button
type="submit"
class="btn btn-danger">

<i class="bi bi-credit-card"></i>

Pay Now

</button>

</div>

</form>

</div>

</div>

<script>

document.getElementById("paymentForm").addEventListener("submit",function(e){

e.preventDefault();

window.location.href="order-success.html";

});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>