<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Login | Foodify</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow border-0">

                <div class="card-body p-5">

                    <h2 class="text-center text-danger fw-bold mb-2">
                        🍔 Foodify
                    </h2>

                    <h4 class="text-center mb-5">
                        Select Login Type
                    </h4>

                    <div class="row g-4">

                        <!-- Customer -->
                        <div class="col-md-4">

                            <div class="card text-center shadow-sm h-100">

                                <div class="card-body">

                                    <i class="bi bi-person-circle display-3 text-primary"></i>

                                    <h4 class="mt-3">
                                        Customer
                                    </h4>

                                    <p>
                                        Order delicious food from nearby restaurants.
                                    </p>

                                    <a href="customer-login.php"
                                       class="btn btn-primary w-100">
                                        Customer Login
                                    </a>

                                </div>

                            </div>

                        </div>

                        <!-- Restaurant -->
                        <div class="col-md-4">

                            <div class="card text-center shadow-sm h-100">

                                <div class="card-body">

                                    <i class="bi bi-shop display-3 text-success"></i>

                                    <h4 class="mt-3">
                                        Restaurant
                                    </h4>

                                    <p>
                                        Manage food items and customer orders.
                                    </p>

                                    <a href="restaurant-login.php"
                                       class="btn btn-success w-100">
                                        Restaurant Login
                                    </a>

                                </div>

                            </div>

                        </div>

                        <!-- Admin -->
                        <div class="col-md-4">

                            <div class="card text-center shadow-sm h-100">

                                <div class="card-body">

                                    <i class="bi bi-person-workspace display-3 text-danger"></i>

                                    <h4 class="mt-3">
                                        Admin
                                    </h4>

                                    <p>
                                        Manage users, restaurants and website.
                                    </p>

                                    <a href="admin-login.php"
                                       class="btn btn-danger w-100">
                                        Admin Login
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="text-center mt-5">

                        <a href="index.php" class="btn btn-dark">
                            <i class="bi bi-arrow-left"></i>
                            Back to Home
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>