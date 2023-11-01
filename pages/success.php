<?php
include '../php/emailFunction.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Order Success</title>
    <link rel="stylesheet" href="../css/index.css" />
  </head>
  <body>
    <div class="top-bar">
      <div class="logo">
        <img src="../resource/logo.png" alt="Logo" height="35" />
      </div>
      <div class="right-elements">
        <a href="../index.html">HOME</a>
        <a href="#">DINING</a>
        <a href=livingPage.php>LIVING</a>
        <a href="#">WORKSPACE</a>
        <a href="contact.php">CONTACT US</a>
      </div>
    </div>

    <div class="content" style="flex-direction: column;">
      <div
        class="img-container"
        style="width: auto; height: 120px; padding: 100px 0 0 90px;"
      >
        <img src="../resource/tick.png" style="scale: 50%;" />
      </div>
      <div
        id="order-success"
        style="
          display: block;
          justify-content: center;
          align-items: center;
          padding: 0 0 0 90px;
          text-align: center;
        "
      >
        <h3>Order Submitted</h3>
        <p>Thank you for shopping with us</p>
          <?php sendEmail(); ?>
        <button onclick="window.location.href = '../index.php';">
          Continue Browsing
        </button>
      </div>
    </div>
  </body>
</html>
