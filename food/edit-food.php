<?php
session_start();
include "config.php";

if(!isset($_SESSION['restaurant_id'])){
    header("Location: restaurant-login.php");
    exit();
}

$restaurant_id = $_SESSION['restaurant_id'];

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM foods WHERE id='$id' AND restaurant_id='$restaurant_id'");

$food = mysqli_fetch_assoc($result);
if(isset($_POST['update_food'])){

    $food_name = $_POST['food_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Agar nayi image upload hui hai
    if($_FILES['image']['name']!=""){

        $image = time()."_".$_FILES['image']['name'];

        move_uploaded_file($_FILES['image']['tmp_name'],"images/".$image);

        // Purani image delete
        if(file_exists("images/".$food['image'])){
            unlink("images/".$food['image']);
        }

        mysqli_query($conn,"UPDATE foods SET
        food_name='$food_name',
        category='$category',
        price='$price',
        description='$description',
        image='$image'
        WHERE id='$id' AND restaurant_id='$restaurant_id'");

    }else{

        mysqli_query($conn,"UPDATE foods SET
        food_name='$food_name',
        category='$category',
        price='$price',
        description='$description'
        WHERE id='$id' AND restaurant_id='$restaurant_id'");

    }

    echo "<script>
    alert('Food Updated Successfully');
    window.location='restaurant-dashboard.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Food</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
font-family:Arial,sans-serif;
}

.card{
max-width:700px;
margin:40px auto;
padding:30px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,.15);
}

</style>

</head>

<body>

<div class="container">

<div class="card">

<h2 class="text-center">
Edit Food
</h2>

<form action="" method="POST" enctype="multipart/form-data">

<div class="mb-3">

<label>Food Name</label>

<input
type="text"
name="food_name"
class="form-control"
value="<?php echo $food['food_name']; ?>"
required>

</div>

<div class="mb-3">

<label>Category</label>

<input
type="text"
name="category"
class="form-control"
value="<?php echo $food['category']; ?>"
required>

</div>

<div class="mb-3">

<label>Price</label>

<input
type="number"
name="price"
class="form-control"
value="<?php echo $food['price']; ?>"
required>

</div>

<div class="mb-3">

<label>Description</label>

<textarea
name="description"
class="form-control"
rows="4"><?php echo $food['description']; ?></textarea>

</div>

<div class="mb-3">

<label>Current Image</label>

<br>

<img src="images/<?php echo $food['image']; ?>" width="120">

</div>

<div class="mb-3">

<label>New Image</label>

<input
type="file"
name="image"
class="form-control">

</div>

<button
type="submit"
name="update_food"
class="btn btn-primary w-100">

Update Food

</button>

</form>

</div>

</div>

</body>

</html>