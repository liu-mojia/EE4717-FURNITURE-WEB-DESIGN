<?php
//Pass session variables
session_start();

if (isset($_SESSION['email'])) {
    $userEmail = $_SESSION['email'];
} else {
    $userEmail = "";
}

//Purchase Now Selected
if (!isset($_SESSION['items'])) {
    $name = $_SESSION['buyNow'][0];
    $quantity = $_SESSION['buyNow'][1];
    $price = $_SESSION['buyNow'][2];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery Details</title>
    <link rel="stylesheet" href="../css/index.css" />
    <style>
      #delivery-table {
        padding: 0px 30px 0 20px;
        min-width: 300px;
      }
    </style>
</head>
<body>
  <div class="top-bar">
    <div class="logo">
      <img src="../resource/logo.png" alt="Logo" height="35" />
    </div>
    <div class="right-elements">
      <a href="/">HOME</a>
      <a href="#">DINING</a>
      <a href="#">LIVING</a>
      <a href="#">WORKSPACE</a>
      <a href="#">CONTACT US</a>
    </div>
  </div>

  <div class="content">
    <div class="left-column">
      <h3 style="padding: 100px 0 0 0">Delivery Details</h3>
      <form method="post" action="../php/deliveryPost.php" id="form">
        <table id="delivery-table">
          <tr><td><label for="name">Name*</label></td></tr>
          <tr><td><input type="text" class="text-box" id="name" name="name" required></td></tr>
          <tr><td><label for="email">Email*</label></td></tr>
          <tr><td><input type="email" class="text-box" id="email" name="email" value="<?php echo $userEmail?>" required></td></tr>
          <tr><td><label for="address">Address*</label></td></tr>
          <tr><td><input type="text" class="text-box" id="address" name="address" required></td></tr>
          <tr><td><label for="phoneNo">Phone Number*</label></td></tr>
          <tr><td><input type="text" class="text-box" id="phoneNo" name="phoneNo" required></td></tr>
        </table>
        <p style="padding: 0 0 0 250px">
          <input type="submit" style="padding: 20px 20px 20px 20px;" value="Next">
        </p>
      </form>
    </div>

    <div class="right-column">
      <h3 style="padding: 90px 0 0 0">Order Summary</h3>
      <?php
        echo "<p>$name($quantity) $".number_format($price, 2)."</p>";
        echo "<p>Delivery $10.00</p>";
        echo "<p>Total $".number_format($price + 10, 2)."</p>";
        ?>
    </div>
  </div>
</body>
</html>