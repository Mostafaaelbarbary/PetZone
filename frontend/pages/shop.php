<?php
session_start();

if (isset($_GET['id'])) {
  $productId = $_GET['id'];

  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }

  $_SESSION['cart'][] = $productId;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
  // The "Add to Cart" button was pressed

  // Perform any necessary processing, e.g., adding the item to the cart

  // Display a success message as an alert
  echo '<script>alert("Item added to the cart successfully.");</script>';
 
}
 header("location:index.php")
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Your HTML header content here -->
</head>
<body>
    <!-- Your HTML content here -->

    <form method="post">
        <!-- Your product details, including the "Add to Cart" button -->
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
</body>
</html>
