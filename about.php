<?php
include('auth_session.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Ecomm Shop</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>

<!-- HEADER -->
<header>
    <h1 class="headerTitle" ><a href="dashboard.php">The Ecomm Shop</a></h1>
    <a id="shopping-cart-icon" href="cart.php"><img src="imgs/shoppingIcon.png" alt="Shopping Cart" style="width:25px;height:25px;"></a>
</header>

<!-- NAVBAR -->
<div class="menu">
    <ul>
        <li><a href="catalogue.php">Catalogue</a>
        </li>
        <li><a class="active--link" href="about.php">About</a>
        </li>
</div>
<section class="about-content">
    <div class="wrapper">
    <div class="about-image">
    </div>
    <div class="about-content-wrapper">
        <h2 class="heading">About Us</h2>
    </div>
    </div>
</section>
</body>
<footer>
    <p>&copy; Kody Berry</p>
</footer>
</html>