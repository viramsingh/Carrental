<!DOCTYPE html>
<html>
<head>
  <title>Car Rental Website - Rent</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  
  <section>
    <h2>Rent Form</h2>
    <p>Please fill out the form below to rent a car:</p>
    <form id="booking-form" action="invoic.php" method ="post">
      <label for="name">Name:</label>
      <input type="text" id="name"  name="name" required>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>
      <label for="phone">Phone:</label>
      <input type="tel" name="phone" id="phone" required>
      
     
      <label for="pickup-date">Pickup Date:</label>
      <input type="date" name="pickupdate" id="pickup-date" onchange="updatePrice()" required>
      <label for="return-date">Return Date:</label>
      <input type="date" name="returndate" id="return-date" onchange="updatePrice()" required> 
      
      <label for="car">Car:</label>
      <select id="car" name="car" onchange="updatePrice()">
        <option value="" disabled selected>Choose your car</option>
        <option value="economy">Economy Car</option>
        <option value="compact">Compact Car</option>
        <option value="midsize">Midsize Car</option>
        <option value="fullsize">Full-size Car</option>
        <option value="luxury">Luxury Car</option>
      </select>
      
      <label for="price">Price per day:</label>
      <input type="text" id="price" name="price" readonly>


      <button type="submit" class="btn" name="submit">Submit</button>
    </form>
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

  <script>
    function getQueryParam(param) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(param);
    }

    function preselectCar() {
      const selectedCar = getQueryParam("car");
      const carSelect = document.getElementById("car");

      if (selectedCar) {
        carSelect.value = selectedCar;
      }
    }

    function updatePrice() {
      var carSelect = document.getElementById("car");
      var priceInput = document.getElementById("price");
      var selectedCar = carSelect.value;
      
      var price;
      if (selectedCar === "economy") {
        price = 3500;
      } else if (selectedCar === "compact") {
        price = 4200;
      } else if (selectedCar === "midsize") {
        price = 4900;
      } else if (selectedCar === "fullsize") {
        price = 5600;
      } else if (selectedCar === "luxury") {
        price = 6300;
      }
      
      var pickupDate = new Date(document.getElementById("pickup-date").value);
      var returnDate = new Date(document.getElementById("return-date").value);
      
      var days = Math.ceil((returnDate - pickupDate) / (1000 * 60 * 60 * 24));
      var totalPrice = price * days;
      
      if (isNaN(totalPrice) || totalPrice < 0) {
        priceInput.value = "Invalid dates";
      } else {
        priceInput.value = "₹" + totalPrice.toLocaleString();
      }
    }

    window.addEventListener("DOMContentLoaded", preselectCar);
  </script>
</body>
</html>
