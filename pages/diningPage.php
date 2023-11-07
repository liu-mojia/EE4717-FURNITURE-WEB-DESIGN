
<?php
print 'test';
session_start();
if (isset($_SESSION['user'])) { $username = $_SESSION['user']; }
?>
<?php include '../php/dbFunctions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dining</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet"  href="../css/productPage.css">
    <script src="../scripts/sort.js"></script>
    <script src="../scripts/dropdown.js"></script>
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

    <div class="banner" >
        <img src="../resource/livingbanner.png" />
        <div class="image-overlay"></div>
        <div class="image-text" >
            <div id="text-container">
              <div class="left">Dining</div>
              <div style="width: 3px; height: 65px;flex-shrink: 0; background: var(--secondary, #1B0A05);"></div>
              <div class="right">Enhance your dining experience with our luxury range of dining room furniture. Discover designer dining tables, dining chairs, sideboards and more that boast elegance and class - ideal for everyday dining and special occasions alike.</div>
            </div>
        </div>
    </div>
    <div class="filter">
      <div class="filter-btn" onclick="toggleDropdown()">
        Sort
      </div>
        <ul class="filter-dropdown" id="filterDropdown">
            <li onclick="getSort('price_accending', 'diningPage')">Price Ascending</li>
            <li onclick="getSort('price_descending', 'diningPage')">Price Descending</li>
            <li onclick="getSort('name_accending', 'diningPage')">Name Ascending</li>
            <li onclick="getSort('name_descending', 'diningPage')">Name Descending</li>
        </ul>
  </div>
    <div class="product-list">
        <?php if (isset($_GET['sort'])) {
            displayProducts('dining', $_GET['sort']);
        } else {
            displayProducts('dining', '');
        } ?>
    </div>
</body>
</html>