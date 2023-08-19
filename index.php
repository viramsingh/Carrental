
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Rental Website</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
  <script src="https://kit.fontawesome.com/04db810459.js" crossorigin="anonymous"></script>
</head>
<body>    
  <header>
    <nav class="navbar">
        <div class="logo">
          <a href="index.php">
            <img src="logo.png" alt="Car Rental Logo">
          </a>
        </div>
        <ul class="nav-links nav-menu">
          <li class="nav-item"><a  href="index.php">Home</a></li>
          <li class="nav-item"><a href="about.php">About Us</a></li>
          <li class="nav-item"><a href="cars.php">Cars</a></li>
          <li class="nav-item"><a href="booking.php">Booking</a></li>
          <li class="nav-item"><a href="contact.php">Contact</a></li>
          </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>

  
  <section class="hero-section">
    <h2>Explore Our Car Rental Services</h2>
    <p>Welcome to our car rental website. We offer a wide range of cars for rent at affordable prices. Whether you need a car for a day or a week, we have the perfect options for you. Start exploring our cars and make a booking today!</p>
    <a href="cars.php" class="btn">View Cars</a>
  </section>
  
  <section class="car-section">
    <h2>Featured Cars</h2>
    <div class="car-photos">
      <div class="car-card">
        <img src="car1.jpg" alt="Car 1">
        <!-- <h3>Creta</h3> -->
        <!-- <p>Price: ₹3000/day</p> -->
        <!-- <a href="booking.html" class="btn">Rent Now</a> -->
      </div>
      <div class="car-card">
        <img src="car2.jpg" alt="Car 2">
        <!-- <h3>Audi</h3> -->
        <!-- <p>Price:₹5000/day</p> -->
        <!-- <a href="booking.html" class="btn">Rent Now</a> -->
      </div>
      <div class="car-card">
        <img src="car5.jpg" alt="Car 3">
        <!-- <h3>Range rover</h3> -->
        <!-- <p>Price: ₹7000/day</p> -->
        <!-- <a href="booking.html" class="btn">Rent Now</a> -->
      </div>
    </div>
  </section>
  
  

    <footer>
    <div class="footer-container">
      <div class="footer-column">
        <a href="About.php" ><h3  class="footer-heading">About Us</h3></a>
        <p>Car Rental is a leading car rental service provider, offering high-quality vehicles and exceptional customer
          service. With 3 years of experience in the industry, we take pride in providing our customers with reliable and
          affordable car rental solutions.</p>
      </div>
      <div class="footer-column">
        <h3 class="footer-heading">Contact Us</h3>
        <p>Email: info@qualitywebs.in</p>
        <p>Phone: 0731-7177541</p>
        <p>Address: Vijaynagar, Indore 452010</p>
      </div>
      <div class="footer-column">
        <h3 class="footer-heading">Follow Us</h3>
        <div class="social-media-icons">
          <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
      <p class="footer-bottom">&copy; 2023 Car Rental. All rights reserved.</p>
    </div>
  </footer>

<script src="script.js"></script>
</body>
</html>
