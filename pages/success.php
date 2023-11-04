<?php
include '../php/emailFunction.php'; ?>
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

    <div class="layout">


    <div class="content" style="flex-direction: column; align-content:center; align-items:center; justify-content:center">
      <div
        class="img-container"
        style="height: 120px; "
      >
        <img src="../resource/tick.png" style="scale: 50%;" />
      </div>
      <div
        id="order-success"
        style="display:flex;flex-direction: column;; align-content:center; align-items:center; justify-content:center" "

      >
        <div class="title">Order Submitted</div>
        <p>Thank you for shopping with us</p>
          <?php sendEmail(); ?>
          <br>
        <button onclick="window.location.href = '../index.php';" class='btn'>
          Continue Browsing
        </button>
      </div>
    </div>
    </div>

  </body>
</html>
