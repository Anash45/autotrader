<?php
session_start();
// Include the database connection file (db_conn.php)
include('db_conn.php');

if (!isset($_SESSION['user_id'])) {
  header('location:login.php');
}

// Initialize $info variable for messages
$info = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $user_id = $_SESSION['user_id'];
  // Get form data
  $carMake = $_POST["car-make"];
  $carModel = $_POST["car-model"];
  $year = $_POST["year"];
  $price = $_POST["price"];
  $carType = $_POST["car-type"];

  // Validate other form fields as needed

  // Handle image upload
  $uploadDir = "uploads/";
  $uploadFile = $uploadDir . basename($_FILES['car-image']['name']);
  $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

  // Check if the file is an image and has an allowed file type
  $allowedExtensions = array('png', 'jpg', 'jpeg');
  $maxFileSize = 5 * 1024 * 1024; // 5 MB

  if (in_array($imageFileType, $allowedExtensions) && $_FILES['car-image']['size'] <= $maxFileSize) {
    if (move_uploaded_file($_FILES['car-image']['tmp_name'], $uploadFile)) {
      // File upload successful, proceed to insert data into the autos table
      $insertQuery = "INSERT INTO autos (car_make, user_id, car_model, year, price, car_type, car_image) 
                            VALUES ('$carMake', '$user_id', '$carModel', '$year', '$price', '$carType', '$uploadFile')";

      if ($conn->query($insertQuery) === TRUE) {
        $info = "<div class='message success'>Car data uploaded successfully.</div>";
      } else {
        $info = "<div class='message fail'>Error inserting data into the database: " . $conn->error . "</div>";
      }
    } else {
      $info = "<div class='message fail'>Error uploading image.</div>";
    }
  } else {
    $info = "<div class='message fail'>Invalid file type or file size exceeds 5 MB. Allowed file types: png, jpg, jpeg.</div>";
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
    <?php 
    include_once 'header.php';
    ?>
    <main>
      <section class="section-cts">
        <div class="containers">
          <div class="cts">
            <div class="cts-text-box">
              <h2 class="heading-secondary">Sell Your Car</h2>
              <p class="cts-text"> Quickly and easily list your car for sale. Fill out the form below with your car's
                details. </p>
              <?php echo $info; ?>
              <form class="cts-form" action="#" method="post" enctype="multipart/form-data">
                <div>
                  <label for="car-make">Car Make</label>
                  <input name="car-make" id="car-make" type="text" placeholder="e.g., Toyota" required />
                </div>
                <br>
                <div>
                  <label for="car-model">Car Model</label>
                  <input name="car-model" id="car-model" type="text" placeholder="e.g., Corolla" required />
                </div>
                <br>
                <div>
                  <label for="year">Year</label>
                  <input name="year" id="year" type="text" placeholder="e.g., 2020" required />
                </div>
                <br>
                <br>
                <div>
                  <label for="price">Asking Price</label>
                  <input name="price" id="price" type="text" placeholder="e.g., $15000" required />
                </div>
                <br>
                <div>
                  <label for="car-type">Car Type</label>
                  <select name="car-type" id="car-type" required>
                    <option value="" selected disabled>Car Type</option>
                    <option value="New">New</option>
                    <option value="Used">Used</option>
                  </select>
                </div>
                <br>
                <div>
                  <label for="car-image">Car Image</label>
                  <input type="file" name="car-image" id="car-image" required name="car-image" accept="image/*" />
                </div>
                <br>
                <button id="submit-btn" class="btn btn--form register">Submit Listing</button>
              </form>
            </div>
            <div class="cta-img-box" style="background-image: url('img/cars/suv.jpg');" role="img"
              aria-label="Car for sale"></div>
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
    </script>
  </body>

</html>