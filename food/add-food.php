<?php
session_start();
include "config.php";

if(!isset($_SESSION['restaurant_id'])){
    header("Location: restaurant-login.php");
    exit();
}

if(isset($_POST['add_food'])){

    $restaurant_id = $_SESSION['restaurant_id'];
    $food_name = $_POST['food_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp,"images/".$image);

    $sql = "INSERT INTO foods
    (restaurant_id,food_name,category,price,description,image)
    VALUES
    ('$restaurant_id','$food_name','$category','$price','$description','$image')";

    if(mysqli_query($conn,$sql)){

        echo "<script>alert('Food Added Successfully');</script>";

    }else{

        echo "<script>alert('Failed to Add Food');</script>";

    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Add Food | Foodify</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
font-family:Arial,Helvetica,sans-serif;
}

.card{
max-width:700px;
margin:40px auto;
padding:30px;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,.15);
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<h2 class="text-center mb-4">
Add Food Item
</h2>

<form action="" method="POST" enctype="multipart/form-data">

<div class="mb-3">

<label>Food Name</label>

<input
type="text"
name="food_name"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Category</label>

<select
name="category"
class="form-select"
required>

<option value="">Select Category</option>

<option>Pizza</option>

<option>Burger</option>

<option>Biryani</option>

<option>Chinese</option>

<option>South Indian</option>

<option>Dessert</option>

</select>

</div>

<div class="mb-3">

<label>Price</label>

<input
type="number"
name="price"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Description</label>

<textarea
name="description"
class="form-control"
rows="4"
required></textarea>

</div>

<div class="mb-3">

<label>Food Image</label>

<input
type="file"
name="image"
class="form-control"
required>

</div>

<button
type="submit"
name="add_food"
class="btn btn-success w-100">

Add Food

</button>

</form>

</div>

</div>

</body>

</html>