<?php

require_once 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pickupDate = $_POST["pickupdate"];
    $returnDate = $_POST["returndate"];
    $car = $_POST["car"];
    $price = $_POST["price"];

    try {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO booking (`Name`, `Email`, `Phone`, `Pickup Date`, `Return Date`, `Car`, `Price`) VALUES (:name, :email, :phone, :pickupDate, :returnDate, :car, :price)");

        // Bind parameters to the prepared statement
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':pickupDate', $pickupDate);
        $stmt->bindParam(':returnDate', $returnDate);
        $stmt->bindParam(':car', $car);
        $stmt->bindParam(':price', $price);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // echo "Data inserted successfully";
        } else {
            echo "Error inserting data";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Close the database connection

            // Display a success message
            // echo "<h2>Thank you for your booking, $name!</h2>";
            // echo "<p>Your booking details:</p>";
            // echo "<p>Email: $email</p>";
            // echo "<p>Phone: $phone</p>";
            // echo "<p>Pickup Date: $pickupDate</p>";
            // echo "<p>Return Date: $returnDate</p>";
            // echo "<p>Car: $car</p>";
            // echo "<p>Price: $price</p>";

// Close the database connection
$conn = null;
?><!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        
        .booking-details {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }
        
        .booking-details h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .booking-details p {
            color: #666;
            font-size: 16px;
            margin-bottom: 5px;
            text-align: center;
            /* padding:0px 145px; */
        }
        
        .back-button {
            text-align: center;
            margin-top: 20px;
        }
        
        .back-button a {
            /* display: inline-block; */
            /* padding: 10px 20px; */
            /* background-color: #3498db; */
            /* color: #333; */
            /* text-decoration: none; */
            border-radius: 20px;
        }

        .back-button a:hover{
            /* background-color: #c8671e; */
        }
    </style>
</head>

<body>
    <div class="booking-details">
        <h2>Thank you for your booking, <?php echo $name; ?>!</h2>
        <p>Your booking details:</p>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone: <?php echo $phone; ?></p>
        <p>Pickup Date: <?php echo $pickupDate; ?></p>
        <p>Return Date: <?php echo $returnDate; ?></p>
        <p>Car: <?php echo $car; ?></p>
        <p>Price: <?php echo $price; ?></p>

    </div>
    
    <div class="back-button">
        <a href="index.php">Go back to the homepage</a>
    </div>
</body>
</html>
