<?php
//Pass session variables
session_start();
if (isset($_SESSION['email'])) {
    $userEmail = $_SESSION['email'];
} else {
    $userEmail = '';
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/index.css" />
    <style>
      #contact-table {
        padding: 130px 30px 0 20px;
        min-width: 300px;
      }
      .text-box {
        width: 500px;
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
      <a href="./diningPage.php">DINING</a>
      <a href="./livingPage.php">LIVING</a>
      <a href="./workspacePage.php">WORKSPACE</a>
      <a href="./contact.php">CONTACT US</a>
      <a>
        <img src="../resource/cartIcon.svg" height="26px" width="26px" />
      </a>
    </div>
  </div>

    <div class="content">
      <form method="post" action="../php/submitQuery.php" id="form">
        <table id="contact-table">
          <tr>
            <td><label for="name">Name</label></td>
          </tr>
          <tr>
            <td><input type="text" class="text-box" id="name" name="name"/></td>
          </tr>
          <tr>
            <td><label for="email">Email</label></td>
          </tr>
          <tr>
            <td><input type="text" class="text-box" id="email" value="<?php echo $userEmail; ?>" name="email"/></td>
          </tr>
          <tr>
            <td><label for="queryItem">Product Name</label></td>
          </tr>
          <tr>
            <td><input type="text" class="text-box" id="queryItem" name="queryItem"/></td>
          </tr>
          <tr>
            <td><label for="description">Description</label></td>
          </tr>
          <tr>
            <td><input type="text" class="text-box" id="description" name="description"/></td>
          </tr>
        </table>
        <p style="padding: 0 0 0 250px;">
          <input type="submit" style="padding: 20px 20px 20px 20px;" />
        </p>
      </form>
    </div>

    <footer>
      <small><i>Copyright &copy; JavaJam Coffee</i></small>
      <br />
      <small>
        <a href="mailto: liumojia@liu.com"><i>liumojia@liu.com</i></a>
      </small>
    </footer>
  </body>
</html>
