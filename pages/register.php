<?php
session_start();
$username = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/formStyle.css" />
    <script type ="text/javascript" src="../scripts/processRegister.js"></script>
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

    <div
      id="featured-collection"
      style="
        background-image: url('../resource/contactus.png');
        height: 100vh;
        bottom: 0;
      "
    >
      <div class="layout">
        <div class="title">Registration</div>
        <br />
        <div
          class="box"
          style="display: flex; justify-content: center; align-items: center;"
        >
          <form method="post" action="../php/registerPost.php" id="form">
            <table id="contact-table">
              <tr>
                <td><label for="username">Username *</label></td>
              </tr>
              <tr>
                <td>
                  <input
                    type="text"
                    class="text-box"
                    id="username"
                    name="username"
                    required
                  />
                </td>
              </tr>
              <tr>
                <td>
                  <p id="valName" style="color: red; padding: 0; margin: 0; font-size: small; display: none">Username need to be at least 5 characters and not more than 20 characters</p>
                </td>
              </tr>
              <tr>
                <td><label for="password">Password *</label></td>
              </tr>
              <tr>
                <td>
                  <input
                    type="password"
                    class="text-box"
                    id="password"
                    name="password"
                    required
                  />
                </td>
              </tr>
              <tr>
                <td>
                  <p id="valPassword" style="color: red; padding: 0; margin: 0; font-size: small; display: none">Passwords must be at least 8 characters long</p>
                </td>
              </tr>
              <tr>
                <td><label for="password">Reenter Password *</label></td>
              </tr>
              <tr>
                <td>
                  <input
                    type="password"
                    class="text-box"
                    id="check"
                    name="check"
                    required
                  />
                </td>
              </tr>
              <tr>
                <td>
                  <p id="valCheck" style="color: red; padding: 0; margin: 0; font-size: small; display: none">Passwords do not match</p>
                </td>
              </tr>
              <tr>
                <td><label for="email">Email *</label></td>
              </tr>
              <tr>
                <td>
                  <input
                    type="email"
                    class="text-box"
                    id="email"
                    name="email"
                    required
                  />
                </td>
              </tr>
              <tr>
                <td>
                  <p id="valEmail" style="color: red; padding: 0; margin: 0; font-size: small; display: none">Invalid Email...</p>
                </td>
              </tr>
              <tr>
                <td style="text-align: left;">
                  <input
                    type="submit"
                    class="btn"
                    style="height: auto; margin-top: 48px;"
                    value="Next"
                  />
                </td>
              <td style="text-align: center"><input type="reset" class="btn" style="height: auto; margin-top: 48px;" id="reset" value="reset"></td>
              </tr>
            </table>
          </form>
          <script type ="text/javascript" src="../scripts/processRegisterR.js"></script>
        </div>
      </div>
    </div>
  </body>
</html>
