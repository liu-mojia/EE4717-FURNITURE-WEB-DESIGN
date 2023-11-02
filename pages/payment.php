<?php
//Load session variables
session_start();

//Purchase Now selected
if (!isset($_SESSION['items'])) {
    $name = $_SESSION['buyNow'][0];
    $quantity = $_SESSION['buyNow'][1];
    $price = $_SESSION['buyNow'][2];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Payment Details</title>
    <link rel="stylesheet" href="../css/index.css" />
    <style>
      #payment-table {
        padding: 0 30px 20px 20px;
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
        <h3 style="padding: 90px 0 0 0;">Payment Details</h3>
        <form method="post" action="../php/payment.php" id="form">
          <table id="payment-table">
            <tr>
              <td><label for="cardNo">Card Number</label></td>
            </tr>
            <tr>
              <td><input type="text" id="cardNo" /></td>
            </tr>
            <tr>
              <td><label for="cvv">CVV</label></td>
            </tr>
            <tr>
              <td><input type="text" id="cvv" /></td>
            </tr>
            <tr>
              <td><label for="expiry">Date of Expiry</label></td>
            </tr>
            <tr>
              <td><input type="date" id="expiry" /></td>
            </tr>
          </table>
          <input
            type="submit"
            style="padding: 20px; float: right;"
            value="Submit"
          />
        </form>
        <button
          onclick="window.location.href = 'delivery.php';"
          style="float: left; padding: 20px;"
        >
          Back
        </button>
      </div>

      <div class="right-column">
        <h3 style="padding: 90px 0 0 0;">Order Summary</h3>
          <?php
          echo "<p>$name($quantity) $".number_format($price, 2)."</p>";
          echo "<p>Delivery $10.00</p>";
          echo "<p>Total $".number_format($price + 10, 2)."</p>";
          ?>
      </div>
    </div>
  </body>
</html>