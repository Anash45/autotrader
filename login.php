<?php

// Include the database connection file (db_conn.php)
include('db_conn.php');

// Initialize $info variable for messages
$info = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get form data
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Validate the email and password (add more validation if needed)
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $info = "<div class='message fail'>Invalid email format</div>";
  } else {
    // Fetch user data based on the provided email
    $getUserQuery = "SELECT id, name, password FROM sellers WHERE email = '$email'";
    $result = $conn->query($getUserQuery);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $hashedPassword = $row["password"];

      // Verify the password
      if (password_verify($password, $hashedPassword)) {
        // Login successful
        session_start();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["username"] = $row["name"];

        // Redirect to index.php
        header("Location: index.php");
        exit();
      } else {
        $info = "<div class='message fail'>Incorrect password</div>";
      }
    } else {
      $info = "<div class='message fail'>User not found</div>";
    }
  }
}

// Close the database connection
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />
    <link rel="stylesheet" href="css/auto.js" />
    <script src="css/auto.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <title>AutoTrader</title>
    <style>
      .heading-secondary {
        text-align: center;
        /* Center the title */
      }

      .cta-form input[type="email"],
      .cta-form input[type="password"] {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
      }

      .cts-form button {
        display: block;
        width: 100px;
        margin: auto;
      }

      .containers {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .cts {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
      }

      .cts-text-box,
      .cta-form {
        width: 100%;
      }
    </style>
  </head>

  <body>
    <header class="header">
      <a href="index.php">
        <img class="logo" alt="AutoSales logo" src="img/auto-logo.png" />
      </a>
      <nav id="myTopnav" class="main-nav">
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="new.php">New Cars</a></li>
          <li><a class="main-nav-link" href="used.php">Used Cars</a></li>
          <li><a class="main-nav-link" href="SellMyCar.php">Sell My Car</a></li>
          <li><a class="main-nav-link" href="Search.php">Search</a></li>
          <li><a class="main-nav-link" href="AboutUs.php">About Us</a></li>
          <li><a class="main-nav-link" href="ContactUs.php">Contact Us</a></li>
          <li><a class="main-nav-link nav-cta" href="login.php">Sign In</a></li>
        </ul>
      </nav>
      <button class="btn-mobile-nav" onclick="myFunction()">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
      </button>
    </header>
    <main>
      <section class="section-cts">
        <div class="containers">
          <div class="cts">
            <div class="cts-text-box">
              <h2 class="heading-secondary">Login to Your Account</h2>
              <p class="cta-text"> Access your account to explore our exclusive car collections, manage your bookings,
                and more. </p>
              <?php echo $info; ?>
              <form class="cts-form" action="#" method="post">
                <div>
                  <div>
                    <label for="email">Email Address</label>
                    <input  id="email" name="email" type="email" width="100%" placeholder="you@example.com" required />
                  </div>
                  <br>
                  <div>
                    <label for="password">Password</label>
                    <input  id="password" name="password" type="password" placeholder="Enter your password" required />
                  </div>
                </div>
                <br>
                <button id="submit-btn" class="btn btn--form">Login</button>
                <br>
                <div style="text-align: right"> Don't have an account? <a href="SignUp.php">Sign Up</a>
                </div>
              </form>
            </div>
            <div class="cts-img-box" style="background-image: url('img/halfimage.jpg');" role="img"
              aria-label="Luxury car on display"></div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="container grid grid--footer">
        <div class="logo-col">
          <a href="#" class="footer-logo">
            <img class="logo" alt="AutoSales logo" src="img/auto-logo.png" />
          </a>
          <ul class="social-links">
            <li>
              <a class="footer-link" href="#"><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a>
            </li>
            <li>
              <a class="footer-link" href="#"><ion-icon class="social-icon" name="logo-facebook"></ion-icon></a>
            </li>
            <li>
              <a class="footer-link" href="#"><ion-icon class="social-icon" name="logo-twitter"></ion-icon></a>
            </li>
          </ul>
          <p class="copyright"> Copyright &copy; 2023 by AutoSales, Inc. All rights reserved. </p>
        </div>
        <div class="address-col">
          <p class="footer-heading">Contact Us</p>
          <address class="contacts">
            <p class="address"> 123 Auto Drive, Suite 400, Car City, Sydney 90001 Australia </p>
            <p>
              <a class="footer-link" href="tel:555-123-4567">555-123-4567</a><br />
              <a class="footer-link" href="mailto:sales@autosales.com">sales@autosales.com</a>
            </p>
          </address>
        </div>
        <nav class="nav-col">
          <p class="footer-heading">Explore</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">New Cars</a></li>
            <li><a class="footer-link" href="#">Used Cars</a></li>
            <li><a class="footer-link" href="#">Special Offers</a></li>
            <li><a class="footer-link" href="#">Finance Options</a></li>
          </ul>
        </nav>
        <nav class="nav-col">
          <p class="footer-heading">Company</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">About Us</a></li>
            <li><a class="footer-link" href="#">Our Team</a></li>
            <li><a class="footer-link" href="#">Careers</a></li>
            <li><a class="footer-link" href="#">Testimonials</a></li>
          </ul>
        </nav>
        <nav class="nav-col">
          <p class="footer-heading">Support</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">Contact Support</a></li>
            <li><a class="footer-link" href="#">FAQs</a></li>
            <li><a class="footer-link" href="#">Privacy & Terms</a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </body>

</html>