
<?php
session_start();
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
}

if (!isset($_SESSION['items'])) {
    header('Location: ../pages/emptyCart.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/cart.css" />
    <script src="../scripts/cart.js"></script>
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
        <img src="../resource/cartIcon.svg" height="26px" width="26px" style="fill:var(--primary)" />
      </a>
    </div>
  </div>

  <div id="featured-collection">
      <div class="layout" style="flex-direction: row; align-content:center; align-items:center; justify-content:center">
      <div class="content" style="flex-direction: column; align-content:center; align-items:center; justify-content:center" >
      <div
        class="img-container">
        <img src="../resource/empty-cart.svg" height="240px" >

      </div>
      <br>
      <br>
      <div
        style="display:flex;flex-direction: column; align-content:center; align-items:center; justify-content:center; margin-left:48px" 
      >
        <div class="title">Empty Cart</div>
          <br>
        <button onclick="window.location.href = '../index.php';" class='btn'>
            Discover More Products
        </button>
      </div>
    </div>
    </div>
  </div>



</body>
</html>