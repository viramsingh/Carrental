<?php
require_once 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO contact (Name, Email, Message) VALUES (:name, :email, :message)");

        // Bind parameters to the prepared statement
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // echo "Data inserted successfully";
        } else {
            // echo "Error inserting data";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Close the database connection
$conn = null;
?>



<!DOCTYPE html>
<html>
<head>
  <title>Car Rental Website - Contact</title>
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
    <p>For any inquiries or assistance, please feel free to contact us using the form below:</p>
    <div>
    <h2>Contact Us</h2>
    <form id="contact-form" method="post"action="#">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      
      <label for="message">Message:</label>
      <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
      
      <button type="submit" name="submit">Send Message</button>
    </form>
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
