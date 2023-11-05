
<?php print 'test'; ?>
<?php
session_start();
$username = $_SESSION['user'];
?>
<?php include '../php/dbFunctions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workspace</title>
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
              <div class="left">Workspace</div>
              <div style="width: 3px; height: 65px;flex-shrink: 0; background: var(--secondary, #1B0A05);"></div>
              <div class="right">Create an inspiring home office for remote working. Boost your productivity with our workspace furniture collection that is specially designed to to complement your work style. Discover our contemporary collection of writing desks and bookshelves now!</div>
            </div>
        </div>
    </div>
    <div class="filter">
      <div class="filter-btn" onclick="toggleDropdown()">
        Sort
      </div>
        <ul class="filter-dropdown" id="filterDropdown">
            <li onclick="getSort('price_accending', 'workspacePage')">Price Ascending</li>
            <li onclick="getSort('price_descending', 'workspacePage')">Price Descending</li>
            <li onclick="getSort('name_accending', 'workspacePage')">Name Ascending</li>
            <li onclick="getSort('name_descending', 'workspacePage')">Name Descending</li>
        </ul>

 
  </div>
  <div class="product-list">
      <?php if (isset($_GET['sort'])) {
          displayProducts('workspace', $_GET['sort']);
      } else {
          displayProducts('workspace', '');
      } ?>
  </div>
</body>
</html>