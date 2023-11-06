
<?php
session_start();
$username = $_SESSION['user'];
?>
<?php include '../php/dbFunctions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/cart.css" />
    <script src="../scripts/sort.js"></script>
    <script src="../scripts/confirmLogout.js"></script>
    <script src="../scripts/editQuantNPrice.js"></script>
</head>

<body>
<div >
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
            <a href="./adminPage.php">Edit Products</a>
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
  <div  style="width:100%; ">
      <?php adminProducts(); ?>
    </div>
    </div>
  </div>
</body>
</html>