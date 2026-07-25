<?php
session_start();
include "config.php";

if(!isset($_SESSION['restaurant_id'])){
    header("Location: restaurant-login.php");
    exit();
}

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $restaurant_id = $_SESSION['restaurant_id'];

    // Image ka naam lo
    $result = mysqli_query($conn,"SELECT * FROM foods WHERE id='$id' AND restaurant_id='$restaurant_id'");

    if(mysqli_num_rows($result)>0){

        $food = mysqli_fetch_assoc($result);

        // Image delete karo
        if(file_exists("images/".$food['image'])){
            unlink("images/".$food['image']);
        }

        // Database se record delete karo
        mysqli_query($conn,"DELETE FROM foods WHERE id='$id' AND restaurant_id='$restaurant_id'");

    }

}

header("Location: restaurant-dashboard.php");
exit();
?>