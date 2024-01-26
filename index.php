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
      <section class="section-hero">
        <div class="hero">
          <div class="hero-text-box">
            <h1 class="heading-primary"> Find Your Perfect Car Today </h1>
            <p class="hero-description"> Explore a wide range of new and used cars. Tailored to your budget and
              lifestyle needs. </p>
            <a href="new.php" class="btn btn--full margin-right-sm">Browse Cars</a>
            <a href="AboutUs.php" class="btn btn--outline">Learn more &darr;</a>
          </div>
          <div class="hero-img-box">
            <img src="img/hero.png" class="hero-img" />
          </div>
        </div>
      </section>
      <section class="section-featured">
        <div class="container">
          <h2 class="heading-featured-in">As featured in</h2>
          <div class="logos">
            <img src="img/logos/toyota.png" alt="Toyota logo" />
            <img src="img/logos/honda.png" alt="Honda logo" />
            <img src="img/logos/nissan.png" alt="Nissan logo" />
          </div>
      </section>
      <section class="section-how">
        <div class="container">
          <span class="subheading">How it works</span>
          <h2 class="heading-secondary"> Your journey to a new car in 3 simple steps </h2>
        </div>
        <div class="container grid grid--2-cols grid--center-v">
          <!-- STEP 01 -->
          <div class="step-text-box">
            <p class="step-number">01</p>
            <h3 class="heading-tertiary"> Choose Your Car </h3>
            <p class="step-description"> Browse our extensive collection to find your perfect car. Filter by make,
              model, price, and more to suit your needs and preferences. </p>
          </div>
          <div class="step-img-box">
            <img src="img/cars/try.gif" class="step-img" alt="Car selection screen" />
          </div>
          <!-- STEP 02 -->
          <div class="step-img-box">
            <img src="img/cars/finance.gif" class="step-img" alt="Financing options screen" />
          </div>
          <div class="step-text-box">
            <p class="step-number">02</p>
            <h3 class="heading-tertiary">Select Financing Options</h3>
            <p class="step-description"> Choose a financing plan that works best for you. We offer a range of financing
              options to suit every budget. </p>
          </div>
          <!-- STEP 03 -->
          <div class="step-text-box">
            <p class="step-number">03</p>
            <h3 class="heading-tertiary">Drive Away Your New Car</h3>
            <p class="step-description"> Finalize your purchase and drive away in your new car. Our team will ensure a
              smooth and hassle-free delivery. </p>
          </div>
          <div class="step-img-box">
            <img src="img/cars/drive.gif" class="step-img" alt="Customer receiving new car" />
          </div>
        </div>
      </section>
      <section class="section-cars">
        <div class="container center-text">
          <span class="subheading">Our Collection</span>
          <h2 class="heading-secondary"> Explore Our Wide Range of Cars </h2>
        </div>
        <div class="container grid grid--3-cols margin-bottom-md">
          <!-- Car 01 -->
          <div class="car">
            <img src="img/cars/Used.jpg" class="car-img" alt="Sleek Sports Car" />
            <div class="car-content">
              <p class="car-title">Sleek Sports Car</p>
              <ul class="car-attributes">
                <li class="car-attribute">
                  <ion-icon class="car-icon" name="speedometer-outline"></ion-icon>
                  <span>0-60 mph in 3.5 sec</span>
                </li>
                <li class="car-attribute">
                  <ion-icon class="car-icon" name="car-outline"></ion-icon>
                  <span>Top Speed: 200 mph</span>
                </li>
                <li class="car-attribute">
                  <ion-icon class="car-icon" name="star-outline"></ion-icon>
                  <span>Rating: 4.9 (200 reviews)</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Car 02 -->
          <div class="car">
            <img src="img/cars/ssuv.jpg" class="car-img" alt="Family SUV" />
            <div class="car-content">
              <p class="car-title">Family SUV</p>
              <ul class="car-attributes">
                <li class="car-attribute">
                  <ion-icon class="car-icon" name="people-outline"></ion-icon>
                  <span>Seating Capacity: 7</span>
                </li>
                <li class="car-attribute">
                  <ion-icon class="car-icon" name="shield-outline"></ion-icon>
                  <span>Safety Rating: 5 Star</span>
                </li>
                <li class="car-attribute">
                  <ion-icon class="car-icon" name="star-outline"></ion-icon>
                  <span>Rating: 4.8 (150 reviews)</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- More cars or a call-to-action -->
          <div class="more-cars">
            <h3 class="heading-tertiary">Find the Perfect Car for You:</h3>
            <ul class="list">
              <li class="list-item">Sports Cars</li>
              <li class="list-item">SUVs</li>
              <li class="list-item">Sedans</li>
              <li class="list-item">Electric Vehicles</li>
              <li class="list-item">Hybrids</li>
              <!-- more categories as needed -->
            </ul>
          </div>
        </div>
        <div class="container view-all-cars">
          <a href="new.php" class="link">View All Cars &rarr;</a>
        </div>
      </section>
      <section class="section-testimonials">
        <div class="testimonials-container">
          <span class="subheading">Testimonials</span>
          <h2 class="heading-secondary">What Our Customers Say</h2>
          <div class="testimonials">
            <!-- Testimonial 01 -->
            <figure class="testimonial">
              <img class="testimonial-img" src="img/customers/woman.png" />
              <blockquote class="testimonial-text"> "The purchase process was smooth and hassle-free. I'm delighted with
                my new car and the exceptional customer service. Highly recommend!" </blockquote>
              <p class="testimonial-name">&mdash; Emily Johnson</p>
            </figure>
            <!-- Testimonial 02 -->
            <figure class="testimonial">
              <img class="testimonial-img" alt="Photo of customer Michael Brown" src="img/customers/journalist.png" />
              <blockquote class="testimonial-text"> "Great selection of cars and an incredibly helpful team. They
                assisted me in finding the perfect car that fits my lifestyle." </blockquote>
              <p class="testimonial-name">&mdash; Michael Brown</p>
            </figure>
            <!-- Testimonial 03 -->
            <figure class="testimonial">
              <img class="testimonial-img" src="img/customers/happy.png" />
              <blockquote class="testimonial-text"> "I was impressed by the variety of choices and the knowledgeable
                staff. They made my car buying experience a joy." </blockquote>
              <p class="testimonial-name">&mdash; Sarah Miller</p>
            </figure>
            <!-- Testimonial 04 -->
            <figure class="testimonial">
              <img class="testimonial-img" src="img/customers/man.png" />
              <blockquote class="testimonial-text"> "I was impressed by the variety of choices and the knowledgeable
                staff. They made my car buying experience a joy." </blockquote>
              <p class="testimonial-name">&mdash; Tom Still</p>
            </figure>
          </div>
        </div>
        <div>
          <!-- Gallery items showcasing cars -->
          <figure class="gallery-item">
            <img src="img/cars/ford.png" alt="Luxury Sports Car" />
          </figure>
          <!-- Add more images of cars as needed -->
        </div>
      </section>
      <section class="section-pricing">
        <div class="container">
          <span class="subheading">Financing Options</span>
          <h2 class="heading-secondary"> Find the Right Plan for Your Budget </h2>
        </div>
        <div class="container grid grid--2-cols margin-bottom-md">
          <!-- Financing Plan 01 -->
          <div class="financing-plan financing-plan--basic">
            <header class="plan-header">
              <p class="plan-name">Basic Plan</p>
              <p class="plan-price"><span>$</span>199</p>
              <p class="plan-text">per month for 60 months</p>
            </header>
            <ul class="list">
              <li class="list-item">
                <ion-icon class="list-icon" name="car-outline"></ion-icon>
                <span>Low-interest rates</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="thumbs-up-outline"></ion-icon>
                <span>No down payment</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="wallet-outline"></ion-icon>
                <span>Flexible payment terms</span>
              </li>
            </ul>
            <div class="plan-sign-up">
              <a href="#" class="btn btn--full">Apply Now</a>
            </div>
          </div>
          <!-- Financing Plan 02 -->
          <div class="financing-plan financing-plan--premium">
            <header class="plan-header">
              <p class="plan-name">Premium Plan</p>
              <p class="plan-price"><span>$</span>299</p>
              <p class="plan-text">per month for 48 months</p>
            </header>
            <ul class="list">
              <li class="list-item">
                <ion-icon class="list-icon" name="flash-outline"></ion-icon>
                <span>0% APR for the first year</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="gift-outline"></ion-icon>
                <span>Complimentary vehicle service for 2 years</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="shield-outline"></ion-icon>
                <span>Extended warranty coverage</span>
              </li>
            </ul>
            <div class="plan-sign-up">
              <a href="#" class="btn btn--full">Apply Now</a>
            </div>
          </div>
        </div>
        <div class="container grid">
          <aside class="plan-details"> All financing options are subject to credit approval. Contact our finance team
            for more details. </aside>
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