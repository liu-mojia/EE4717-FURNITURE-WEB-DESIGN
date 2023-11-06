<?php
session_start();
$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Add New Item</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/formStyle.css" />
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

    <div id="featured-collection" style="background-image: url('../resource/bg2.png'); bottom:0;
">
    <div class="layout">

      <div class="title">
        Add New Item
      </div>
    </br>
      <div class="box">
        <div >
          <form method="post" action="../php/addItem.php" id="form">
            <table id="contact-table">
              <tr>
                <td><label for="name">Name *</label></td>
              </tr>
              <tr>
                <td><input type="text" class="text-box" id="name" name="name" required/></td>
              </tr>
              <tr>
                <td><label for="description">Description *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="description" name="description"/></td>
              </tr>
              <tr>
                <td><label for="quantity">Quantity *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="quantity" name="quantity"/></td>
              </tr>
              <tr>
                <td><label for="">Dimensions *</label></td>
              </tr>
              <tr>
                <td>
                    <div class="box-layout">

                        <input required type="text" class="sm-box" id="length" name="length" placeholder="Length" required/>
                        <input required type="text" class="sm-box" id="height" name="height" placeholder="Height" required/>
                        <input required type="text" class="sm-box" id="width" name="width" placeholder="Width" required/>
                    </div>
                </td>
              </tr>
              <tr>
                <td><label for="material">Material *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="material" name="material"/></td>
              </tr>
              <tr>
                <td><label for="category">Category *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="category" name="category"/></td>
              </tr>
                <tr>
                    <td><label for="price">Price *</label></td>
                </tr>
                <tr>
                    <td><input required type="text" class="text-box" id="price" name="price"/></td>
                </tr>
              <tr>
                <td style="text-align:center;">
                  <input type="submit" class="btn" style="height:auto; margin-top:48px"/>
                </td>
              </tr>
            </table>
          </form>
        </div>

      </div>
    </div>
  </div>
  </body>
</html>
