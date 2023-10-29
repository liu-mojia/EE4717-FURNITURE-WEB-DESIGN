
<?php print 'test'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Living</title>
    <link rel="stylesheet" href="../css/index.css" />
    <style>
        #text-container{
          display:flex;
          flex-direction: row;
          align-items: center;
          justify-content:flex-start;
        }

        .left{
          width:10%;
          font-size: 40px;
          font-weight: 400;
          margin-right: 25px;
        }

        .right{
          font-size: 15px;
          width:72%;
          margin-left: 25px;
          text-align:left;
        }

        .filter-btn{
          padding:5px 8px 5px 8px;
          border-radius: 5px;
          width:fit-content;
          border: 0.75px solid #000;
          cursor: pointer;
        }

        .filter-dropdown {
          display: none;
          border-radius: 5px;
          position: absolute;
          background-color: #fff;
          border: 0.5px solid #000;
          list-style: none;
          margin-top:40px;
          padding: 0;
        }

        .filter-dropdown li {
          padding: 8px;
        }

        .filter-dropdown li:hover {
          background-color: #ccc;
        }

        .product-list{
          padding: 60px;
          flex-wrap: wrap; 
          gap: 20px; 
          display: flex;
          flex-direction: row;

        }

        .product-display{
          width: 218px;
          height: 218px;
          border-radius: 5px;
          background-color: #eee552;
        }

    </style>
</head>
<body>
  <div class="top-bar">
    <div class="logo">
      <img src="../resource/logo.png" alt="Logo" height="35" />
    </div>
    <div class="right-elements">
      <a href="../">HOME</a>
      <a href="#">DINING</a>
      <a href="./livingPage.php">LIVING</a>
      <a href="#">WORKSPACE</a>
      <a href="#">CONTACT US</a>
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
      products here!
    </div>
    <div class="product-display">
      products here!
    </div>
    <div class="product-display">
      products here!
    </div>
    <div class="product-display">
      products here!
    </div>
    <div class="product-display">
      products here!
    </div>
    <div class="product-display">
      products here!
    </div>
  </div>
</body>
</html>