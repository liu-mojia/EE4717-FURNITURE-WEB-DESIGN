
<?php  ?>
<?php include '../php/dbFunctions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/cart.css" />
    <script src="../scripts/sort.js"></script>
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
      <a>
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