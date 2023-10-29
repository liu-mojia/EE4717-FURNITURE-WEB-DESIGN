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
        padding: 50px;
        min-width: 300px;
        display: flex;
        align-content:center;
        justify-content:center;
      }
      .text-box {
        width: 500px;
      }
   
      td input{
        height:36px;
        border-radius: 5px;
        border: 0.25px solid var(--primary);
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

  <div id="featured-collection" style="background-image: url('../resource/contactus.png');height:100vh; bottom:0;
">
    <div class="layout">

      <div class="title">
        Contact Us
      </div>
    </br>
      <div class="box">
        <div >
          <form method="post" action="../php/submitQuery.php" id="form">
            <table id="contact-table">
              <tr>
                <td><label for="name">Name *</label></td>
              </tr>
              <tr>
                <td><input type="text" class="text-box" id="name" name="name" required/></td>
              </tr>
              <tr>
                <td><label for="email" required>Email *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="email" value="<?php echo $userEmail; ?>" name="email"/></td>
              </tr>
              <tr>
                <td><label for="queryItem">Product Name *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="queryItem" name="queryItem"/></td>
              </tr>
              <tr>
                <td><label for="description">Description *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="description" name="description"/></td>
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
