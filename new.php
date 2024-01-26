<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    </style>
  </head>

  <body>
    <?php 
    include_once 'header.php';
    ?>
    <main>
      <section class="section-cars">
        <h2 class="page-title">New Cars</h2>
        <div class="container grid grid--3-cols">
          <?php
          // Include the database connection file (db_conn.php)
          include('db_conn.php');

          // Fetch cars with car_type = 'New'
          $query = "SELECT * FROM autos WHERE car_type = 'New'";
          $result = $conn->query($query);

          // Check if cars are found
          if ($result->num_rows > 0) {
            // Loop through the result set and display each car
            while ($row = $result->fetch_assoc()) {
              echo '<div class="car-box">';
              echo '<img src="' . $row['car_image'] . '" class="car-img" alt="' . $row['car_make'] . ' ' . $row['car_model'] . '" />';
              echo '<h3 class="heading-tertiary car-name">' . $row['car_make'] . ' ' . $row['car_model'] . ' - ' . $row['year'] . '</h3>';
              echo '<p class="car-price">$' . $row['price'] . '</p>';
              echo '</div>';
            }
          } else {
            // No cars found
            echo '<div class="message fail">No new cars found.</div>';
          }

          // Close the database connection
          $conn->close();
          ?>
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