
<?php print 'test'; ?>
<?php include '../php/dbFunctions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workspace</title>
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
      <?php displayProducts('workspace'); ?>
  </div>
</body>
</html>