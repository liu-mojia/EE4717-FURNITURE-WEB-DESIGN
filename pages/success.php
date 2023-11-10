<?php
include '../php/emailFunction.php'; ?>
<?php
session_start();
if (isset($_SESSION['user'])) { $username = $_SESSION['user']; }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Order Success</title>
    <link rel="stylesheet" href="../css/index.css" />
    <script src="../scripts/confirmLogout.js"></script>

  </head>
  <body>
  <div class="top-bar">
    <div class="logo">
      <img src="../resource/logo.png" alt="Logo" height="35" />
    </div>
    <div class="right-elements">
      <a href="../">HOME</a>
      <a href="./diningPage.php">DINING</a>
      <a href="./livingPage.php">LIVING</a>
      <a href="./workspacePage.php">WORKSPACE</a>
      <a href="./contact.php">CONTACT US</a>
      <?php if (isset($_SESSION['user']) && $username == 'admin') {
          echo '<div class="menu-item">
          <a href="./adminPage.php">ADMIN</a>
          <div class="options">
            <a href="./addNewItemPage.php">Add New Item</a>
            <a href="./adminPage.php">Edit Item</a>
          </div>
        </div>';
      } ?>

      <?php if (isset($_SESSION['user'])) {
          echo '<div><a class="admin" onclick="confirmLogout()">
              <span class="username">Hi! ' .
              $username .
              '</span> <span class="logout">Logout</span>
              </a>
              </div>
              ';
      } else {
          echo '<a style="font-size:14px;"  href="./login.php">LOGIN</a>';
      } ?>
      <a href="./cart.php">
        <img src="../resource/cartIcon.svg" height="26px" width="26px" />
      </a>
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
