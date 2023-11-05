<?php
session_start();
$username = $_SESSION['user'];

if (isset($_GET['login'])) {
    $failed = true;
} else {
    $failed = false;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
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

    <div
      id="featured-collection"
      style="
        background-image: url('../resource/contactus.png');
        height: 100vh;
        bottom: 0;
      "
    >
      <div class="layout">
        <div class="title">User Login</div>
        <br />
        <div
          class="box"
          style="display: flex; justify-content: center; align-items: center;"
        >
          <form method="post" action="../php/loginPost.php" id="form">
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
                <?php if ($failed) {
                    echo "<tr><td style='color: red'>Username or Password is incorrect</td></tr>";
                } ?>
              <tr>
                <td style="text-align: center;">
                  <input
                    type="submit"
                    class="btn"
                    style="height: auto; margin-top: 48px;"
                    value="Login"
                  />
                </td>
              </tr>
              <tr>
                <td style="text-align: center; height: 100px;">
                  <a
                    href="register.php"
                    style="
                      color: var(--primary);
                      text-align: center;
                      cursor: pointer;
                    "
                  >
                    <u>
                      Register an account with us
                    </u>
                  </a>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
