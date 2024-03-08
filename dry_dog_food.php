<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws and Whiskers- Home(OrangeHost)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-body-tertiary">
<header class="h-auto">
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand text-light" href="index.php" onclick="openItems('main')"><i class="fas fa-paw"></i> Paws and Whiskers <i class="fas fa-cat"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="dry_dog_food.php" onclick="openItems('dry_dogfood')">Dry Dog Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="wet_dog_food.php" onclick="openItems('wet_dogfood')">Wet Dog Food</a>
                    </li>
                </ul>
            <div class="nav-icons text-light">
                <div class="fas fa-search ms-3" id="search-btn"></div>
                    <div class="fas fa-shopping-cart ms-3" id="cart-btn"></div>
                        <span>0</span>
                        </div>
                    <button class="nav-link text-light btn btn-outline-light" id="login-btn" onclick="openItems('login')">Login</button>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <h2>Dry Dog Food</h2>                
        <section class="card-container" id="login"><?php include('login.php'); ?></section>                
    </div>
</main>

<?php include('footer.php')?>