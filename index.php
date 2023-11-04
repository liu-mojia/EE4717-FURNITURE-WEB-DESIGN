<?php
session_start();
$username = $_SESSION['user'];
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>Élégance Maison</title>
    <link rel="stylesheet" href="css/index.css" />
    <style>
      #featured-collection {
        padding: 380px 60px 250px 60px;
        min-width: 300px;
      }
    </style>
        <script src="scripts/confirmLogout.js"></script>

  </head>
 

  <body>
    <div class="top-bar">
      <div class="logo">
        <img src="resource/logo.png" alt="Logo" height="35" />
      </div>
      <div class="right-elements">
        <a href="index.php">HOME</a>
        <a href="pages/diningPage.php">DINING</a>
        <a href="pages/livingPage.php">LIVING</a>
        <a href="pages/workspacePage.php">WORKSPACE</a>
        <a href="pages/contact.php">CONTACT US</a>
        <?php if (isset($_SESSION['user']) && $username == 'admin') {
            echo '<div class="menu-item">
            <a href="pages/adminPage.php">ADMIN</a>
            <div class="options">
              <a href="pages/addNewItemPage.html">Add New Item</a>
              <a href="#">Edit Item</a>
            </div>
          </div>';
        } ?>

        <?php if (isset($_SESSION['user'])) {
            echo '<a style="font-size:14px;" onclick="confirmLogout()">Hi! ' .
                $username .
                '</a>';
        } else {
            echo '<a style="font-size:14px;"  href="pages/login.php">LOGIN</a>';
        } ?>
        

        <a href="pages/cart.php">
          <img src="./resource/cartIcon.svg" height="26px" width="26px" />
        </a>
      </div>
    </div>
    

    <div class="content">
      <div class="left-column">
        <div class="img-container" style="min-width: 550px;">
          <img src="resource/coverpage.png" height="100%" />
        </div>
      </div>

      <div
        class="right-column"
        style="display: flex; justify-content: center; align-items: center;"
      >
        <div id="featured-collection">
          <div style="font-size: 40px;">
            FEATURED COLLECTION
          </div>
          <br>
          <p>
            Discover curated elegance at our luxury furniture store. Explore
            handpicked collections that define opulence, style, and
            sophistication. Elevate your living space with the finest in
            contemporary design.
          </p>
          <br>
          <br>
          <hr class="hr-line" />
        </div>
      </div>
    </div>

    <div style="background-color: var(--secondary); width: 100%;">
      <div class="content" style="padding: 80px;">
        <div class="left-column" >
          <div
            style="font-size: 40px; color: #fff; width: fit-content;padding: 120px;"
          >
            <div>
              <div>
                Exquisite Styles
              </div>
              <br/>
              <hr class="hr-line" />
              <br/>
              <br/>

              <div>
                Discover Opulence
              </div>
              <br/>

              <hr class="hr-line" />
              <br/>
              <br/>

              <div>
                Experience Elegance
              </div>
              
            </div>
          </div>
        </div>
        <div class="right-column">
            <div
              class="img-container"
              style="border-radius: 286px; height: 634px; width: 427px;"
            >
              <img src="./resource/homepage2.png" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div>
        <small>
          Contact us at:
          <a href="mailto: contact@elegancemaison.com">
            <i>contact@elegancemaison.com</i>
          </a>
        </small>
      </div>
    </footer>
  </body>
</html>
