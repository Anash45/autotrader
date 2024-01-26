<?php
// Check if the user is logged in

function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

$userName = '';
if (isLoggedIn()) {
    $name = explode(' ', $_SESSION['username']);
    $userName = $name[0];
}
?>
<header class="header">
    <a href="index.php">
        <img class="logo" alt="AutoSales logo" src="img/auto-logo.png" />
    </a>
    <nav id="myTopnav" class="main-nav">
        <ul class="main-nav-list">
            <li><a class="main-nav-link" href="new.php">New Cars</a></li>
            <li><a class="main-nav-link" href="used.php">Used Cars</a></li>
            <?php
            // Show "Sell My Car" link if the user is logged in
            if (isLoggedIn()) {
                echo '<li><a class="main-nav-link" href="SellMyCar.php">Sell My Car</a></li>';
            }
            ?>
            <li><a class="main-nav-link" href="Search.php">Search</a></li>
            <li><a class="main-nav-link" href="AboutUs.php">About Us</a></li>
            <li><a class="main-nav-link" href="ContactUs.php">Contact Us</a></li>
            <?php
            // Show "Sign In" or "Logout" button based on the user's login status
            if (isLoggedIn()) {
                echo '<li class="logged-in">Hi, ' . $userName . '</li>';
                echo '<li><a class="main-nav-link nav-cta" href="logout.php">Logout</a></li>';
            } else {
                echo '<li><a class="main-nav-link nav-cta" href="login.php">Sign In</a></li>';
            }
            ?>
        </ul>
    </nav>
    <button class="btn-mobile-nav" onclick="myFunction()">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
    </button>
</header>