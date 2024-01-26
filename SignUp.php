<?php
session_start();
?>
<?php

include('db_conn.php');

$info = ""; // Variable to store success or fail messages

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get form data
  $name = $_POST["full-name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm-password"];
  $phone = $_POST["phone"];

  // Check if the email already exists
  $emailExistsQuery = "SELECT id FROM sellers WHERE email = '$email'";
  $result = $conn->query($emailExistsQuery);

  if ($result->num_rows > 0) {
    $info = "<div class='message fail'>Email already exists. Please use a different email.</div>";
  } else {
    // Check if password and confirm password match
    if ($password === $confirmPassword) {

      // Hash the password before storing in the database
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      // Insert data into the sellers table
      $insertQuery = "INSERT INTO sellers (name, email, password, phone) VALUES ('$name', '$email', '$hashedPassword', '$phone')";

      if ($conn->query($insertQuery) === TRUE) {
        $info = "<div class='message success'>Registration successful. Welcome!</div>";
      } else {
        $info = "<div class='message fail'>Error: " . $conn->error. "</div>";
      }
    } else {
      $info = "<div class='message fail'>Password and Confirm Password do not match.</div>";
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
    <script src="css/auto.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <title>AutoTrader</title>
    <style>
      .heading-secondary {
        text-align: center;
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
      .cts-form {
        width: 100%;
      }

      .login {
        align: Center;
        text-align: Center;
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
              <h2 class="heading-secondary">Register Your Account</h2>
              <p class="cts-text"> Sign up to discover our exclusive car collections, manage your bookings, and more.
              </p>
              <?php echo $info; ?>
              <form class="cts-form" action="#" method="post">
                <div>
                  <label for="full-name">Full Name</label>
                  <input name="full-name" id="full-name" type="text" placeholder="John Doe" required />
                </div>
                <br>
                <div>
                  <label for="email">Email Address</label>
                  <input name="email" id="email" type="email" placeholder="you@example.com" required />
                </div>
                <br>
                <div>
                  <label for="password">Password</label>
                  <input name="password" id="password" type="password" placeholder="Enter your password" required />
                </div>
                <br>
                <div>
                  <label for="confirm-password">Confirm Password</label>
                  <input name="confirm-password" id="confirm-password" type="password"
                    placeholder="Confirm your password" required />
                </div>
                <br>
                <div>
                  <label for="phone">Phone Number</label>
                  <input name="phone" id="phone" type="tel" placeholder="123-456-7890" />
                </div>
                <br>
                <button id="submit-btn" class="btn btn--form register">Register</button>
              </form>
            </div>
            <div class="cta-img-box" style="background-image: url('img/1.jpg');" role="img"
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
    <script>
      document.getElementById("submit-btn").addEventListener("click", function (event) {
        // Prevent the form from submitting immediately
        event.preventDefault();

        // Get form values
        var fullName = document.getElementById("full-name").value.trim();
        var email = document.getElementById("email").value.trim();
        var phone = document.getElementById("phone").value.trim();
        var password = document.getElementById("password").value.trim();
        var confirmPassword = document.getElementById("confirm-password").value.trim();

        // Check if name, email, and password are filled
        if (fullName === "" || email === "" || phone === "" || password === "") {
          alert("Please fill in all required fields (Name, Email, Phone and Password).");
          return;
        }

        // Check if password and confirm password match
        if (password !== confirmPassword) {
          alert("Password and Confirm Password do not match.");
          return;
        }


        // Optionally, submit the form programmatically here if needed
        document.querySelector('.cts-form').submit();
      });
    </script>
  </body>

</html>