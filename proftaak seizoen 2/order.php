<!DOCTYPE html>
<html>
<head>
  <title>Order - My Clothing Store</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    h2 {
      margin-bottom: 20px;
    }

    form {
      max-width: 400px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    h3 {
      margin-top: 20px;
      margin-bottom: 10px;
    }

    #order-summary {
      margin-bottom: 10px;
    }

    #order-total {
      font-weight: bold;
      margin-bottom: 20px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
<?php 
include "inc/nav.php";

?>
  <h2>Order Details</h2>
  <form action="process_order.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="address">Address:</label>
    <input type="text" name="address" required>

    <h3>Order Summary</h3>
    <div id="order-summary"></div>
    <div id="order-total"></div>

    <input type="submit" value="Place Order">
  </form>

  <script>
    // Fetch and display the order summary from local storage
    const orderSummary = localStorage.getItem('orderSummary');
    const orderTotal = localStorage.getItem('orderTotal');
    document.getElementById('order-summary').innerHTML = orderSummary;
    document.getElementById('order-total').innerHTML = `Total: $${orderTotal}`;

    // Clear the stored order summary and total
    localStorage.removeItem('orderSummary');
    localStorage.removeItem('orderTotal');
  </script>
</body>
</html>
