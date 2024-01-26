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
	<script>
		
	
	</script>
	
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
	
	<section class="section-how">
	  <div class="container">
		<span class="subheading">About Us</span>
		<h2 class="heading-secondary">
		  Discover Our Story
		</h2>
	  </div>

	  <div class="container grid grid--2-cols grid--center-v">
		<!-- About 01 -->
		<div class="step-text-box">
		  <p class="step-number">01</p>
		  <h3 class="heading-tertiary">
			Our Mission
		  </h3>
		  <p class="step-description">
			We're committed to revolutionizing the car buying experience, offering simplicity, efficiency, and satisfaction.
		  </p>
		</div>

		<div class="step-img-box">
		  <img
			src="img/man.png"
			class="step-img"
			alt="Our Mission"
		  />
		</div>

		<!-- About 02 -->
		
		<div class="step-text-box">
		  <p class="step-number">02</p>
		  <h3 class="heading-tertiary">Our Values</h3>
		  <p class="step-description">
			Built on transparency, customer focus, and innovation, we strive to deliver the best car buying experience.
		  </p>
		</div>
		<div class="step-img-box">
		  <img
			src="img/woman.png"
			class="step-img"
			alt="Our Values"
		  />
		</div>

		<!-- About 03 -->
		<div class="step-img-box">
		  <img
			src="img/journalist.png"
			class="step-img"
			alt="Why Choose Us"
		  />
		</div>
		<div class="step-text-box">
		  <p class="step-number">03</p>
		  <h3 class="heading-tertiary">Why Choose Us</h3>
		  <p class="step-description">
			With a unique approach, diverse vehicle options, and personalized services, we stand out in the auto industry.
		  </p>
		</div>
		
	  </div>
	  
	  
		<div class="container grid grid--2-cols grid--center-v">
		  <!-- Team Introduction -->
		  <div class="step-img-box">
			<img
			  src="img/happy.png"
			  class="step-img"
			  alt="Our Team"
			/>
		  </div>
		  
		  <div class="step-text-box">
			<p class="step-number">04</p>
			<h3 class="heading-tertiary">
			  Meet Our Team
			</h3>
			<p class="step-description">
			  Our dedicated team of professionals is committed to providing you with the best car buying experience.
			</p>
		  </div>

		  

		 

		  <!-- FAQs -->
		  <div class="step-text-box">
			<p class="step-number">05</p>
			<h3 class="heading-tertiary">FAQs</h3>
			<p class="step-description">
			  Got questions? Check out our Frequently Asked Questions for more information about our services.
			</p>
		  </div>
		  <div class="step-img-box">
			<img
			  src="img/happy.png"
			  class="step-img"
			  alt="FAQs"
			/>
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
