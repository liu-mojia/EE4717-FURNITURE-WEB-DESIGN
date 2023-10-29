
<?php print 'test'; ?>
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
              <div class="left">Living</div>
              <div style="width: 3px; height: 65px;flex-shrink: 0; background: var(--secondary, #1B0A05);"></div>
              <div class="right">Update the heart of your home with our living room masterpieces. No matter your theme, you’ll find luxury, well-made sofas, lounge chairs, coffee tables, TV consoles and more in every style.</div>
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
   
 
    <div class="product-display">
      <img src="../resource/living-products/test.png" alt="Product Image">

      <div class="product-details">
        <span id='name'>
          APPLARYD 3-seat sofa 
        </span>
        <span id='price'>
            $1099
        </span>
    
      </div>
    </div>
    <div class="product-display">
      <img src="../resource/living-products/test.png" alt="Product Image">

      <div class="product-details">
        <span id='name'>
          APPLARYD 3-seat sofa 
        </span>
        <span id='price'>
            $1099
        </span>
    
      </div>
    </div>
    
  </div>
</body>
</html>