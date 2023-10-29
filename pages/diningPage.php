
<?php print 'test'; ?>
<?php include '../php/dbFunctions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dining</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet"  href="../css/productPage.css">
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
      <a>
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
        <li>Price Ascending</li>
        <li>Price Descending</li>
        <li>Name Ascending</li>
        <li>Name Descending</li>
      </ul>

      <script>
        function toggleDropdown() {
          var dropdown = document.getElementById("filterDropdown");
          if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
          } else {
            dropdown.style.display = "block";
          }
        }
      </script>
  </div>
    <div class="product-list">
        <?php displayProducts('dining'); ?>
    </div>
</body>
</html>