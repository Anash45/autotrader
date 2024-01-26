<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />
	<script src="css/auto.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>
    <title>AutoTrader</title>
	<style>
	

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
		<section class="section-cta">

		  <div class="container">
			<div class="cta">
			  <div class="cta-text-box">
				<h2 class="heading-secondary">Discover Your Dream Car Today!</h2>
				<p class="cta-text">
				  Explore our wide range of cars and find the perfect match for your lifestyle. 
				  Sign up now to receive exclusive updates and offers. Let us help you in driving home your dream car!
				</p>

				<form class="cta-form" action="#">
				  <div>
					<label for="full-name">Full Name</label>
					<input
					  id="full-name"
					  type="text"
					  placeholder="John Doe"
					  required
					/>
				  </div>

				  <div>
					<label for="email">Email Address</label>
					<input
					  id="email"
					  type="email"
					  placeholder="you@example.com"
					  required
					/>
				  </div>

				  <div>
					<label for="select-interest">What are you interested in?</label>
					<select id="select-interest" required>
					  <option value="">Please choose one option:</option>
					  <option value="new-cars">New Cars</option>
					  <option value="used-cars">Used Cars</option>
					  <option value="finance-options">Finance Options</option>
					  <option value="test-drive">Test Drive</option>
					  <option value="others">Others</option>
					</select>
				  </div>

				  <button class="btn btn--form">Send</button>
				</form>
			  </div>
			  <div
				class="cta-img-box"
				style="background-image: url('img/cars/ssuv.jpg');"
				role="img"
				aria-label="Luxury car on display"
			  ></div>
			</div>
		  </div>
		</section>

  
		<section class="section-map">
		  <div class="container center-text">
			<h2 class="heading-secondary">
			  Find Us Here
			</h2>
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d552.6519177412167!2d151.21112572301553!3d-33.885297494629704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2snp!4v1703094413451!5m2!1sen!2snp" 
			width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" 
			referrerpolicy="no-referrer-when-downgrade"></iframe>
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
          <a class="footer-link" href="#"
            ><ion-icon class="social-icon" name="logo-instagram"></ion-icon
          ></a>
        </li>
        <li>
          <a class="footer-link" href="#"
            ><ion-icon class="social-icon" name="logo-facebook"></ion-icon
          ></a>
        </li>
        <li>
          <a class="footer-link" href="#"
            ><ion-icon class="social-icon" name="logo-twitter"></ion-icon
          ></a>
        </li>
      </ul>

      <p class="copyright">
        Copyright &copy; 2023 by AutoSales, Inc. All rights reserved.
      </p>
    </div>

    <div class="address-col">
      <p class="footer-heading">Contact Us</p>
      <address class="contacts">
        <p class="address">
          123 Auto Drive, Suite 400, Car City, Sydney 90001 Australia
        </p>
        <p>
          <a class="footer-link" href="tel:555-123-4567">555-123-4567</a><br />
          <a class="footer-link" href="mailto:sales@autosales.com"
            >sales@autosales.com</a
          >
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
