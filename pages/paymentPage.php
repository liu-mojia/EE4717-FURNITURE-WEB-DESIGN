<?php
//Load session variables
session_start();

$username = $_SESSION['user'];

//Purchase Now selected
if (!isset($_SESSION['items'])) {
    $name = $_SESSION['buyNow'][0];
    $selectedQuantity = $_SESSION['buyNow'][1];
    $price = $_SESSION['buyNow'][2];
    $productID = $_SESSION['productID'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Payment Details</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/formStyle.css" />
    <link rel="stylesheet" href="../css/cart.css" />
    <script src="../scripts/confirmLogout.js"></script>


    <style>
        .container{
          display:flex;
          height:100%;
          align-content:center;
          justify-content:center;
        }

        .vertical-line {
            width: 1px; /* Width of the vertical line */
            margin:24px;
            height: 75%; /* Height as a percentage of the container's height */
            background-color: var(--primary); /* Color of the vertical line */
            position: absolute;
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

    <div id="featured-collection">
      <div class="layout">
        <div class="box" style="display:flex; flext-direction:row; width:100%">
          <div style="width:65%">
        <div class="title" style="margin:40px 0 0 148px">Payment Details</div>

        <form method="post" action="../php/payment.php" id="form">
          <table id="contact-table">
            <tr >
              <td ><label for="cardNo">Card Number</label></td>
            </tr>
            <tr>
              <td colspan="2"><input class='text-box' type="text" id="cardNo" /></td>
            </tr>
            <tr>
              <td colspan="2"><label for="cvv">CVV</label></td>
            </tr>
            <tr>
              <td><input class='text-box' type="text" id="cvv" /></td>
            </tr>
            <tr>
              <td><label for="expiry">Date of Expiry</label></td>
            </tr>
            <tr>
              <td><input type="date" id="expiry" /></td>
            </tr>
            <tr><td style="height:48px; width: 132px "></td></tr>
            <tr>
              <td colspan='1'>
                  <div class="secondary-btn" style="width: 82px">
                    <a href="#" onclick="history.back(); " style="color:var(--primary);">Back</a>
                  </div>
                  
                </td>
                <td colspan='1'>
                  <input type="submit" class="btn" style="height:48px; width: 132px;"/>
                </td>
            </tr>
          </table>
        </form>
      </div>
      <div class="container">
        <div class="vertical-line"></div>
      </div>

      <div style="width:35%; padding:50px">
          <div class="summary">
            <div class="title-s">Order Summary</div>
              <br>
              <div class='subTitle' style="width:100%">
                <?php
                if (isset($_SESSION['items'])) {
                    foreach ($_SESSION['items'] as $item) {
                        $name = $item['name'];
                        $des = $item['des'];
                        $price = $item['price'];
                        $maxQuantity = $item['quantity'];
                        $productID = $item['productID'];
                        $len = $item['length'];
                        $width = $item['width'];
                        $height = $item['height'];
                        $selectedQuantity = $item['quantitySelected'];
                        $total_price = 0;
                        foreach ($_SESSION['items'] as $item) {
                            $total_price += $item['price'];
                        }
                        $total_price = number_format($total_price + 10, 2);

                        echo '<div class="item-list" itemId="' .
                            $productID .
                            '">
                    <div class="item" itemId="' .
                            $productID .
                            '">
                        
                        <span class="name" itemId="' .
                            $productID .
                            '">' .
                            $name .
                            '</span>
                        (<span class="qty" itemId="' .
                            $productID .
                            '">'.$selectedQuantity.'</span>)
                    </div>
                    <div class="price" itemId="' .
                            $productID .
                            '">$' .
                            number_format($price, 2) .
                            '</div>
                </div>

                <br>';
                    }
                } else {
                    echo '<div class="item-list" itemId="' .
                        $productID .
                        '">
                    <div class="item" itemId="' .
                        $productID .
                        '">
                        
                        <span class="name" itemId="' .
                        $productID .
                        '">' .
                        $name .
                        '</span>
                        (<span class="qty" itemId="' .
                        $productID .
                        '">'.$selectedQuantity.'</span>)
                    </div>
                    <div class="price" itemId="' .
                        $productID .
                        '">$' .
                        number_format($price, 2) .
                        '</div>
                </div>

                <br>';

                } ?>
                <div class="item-list">
                    <div class="item">Delivery</div>
                    <div class="price">$10.00</div>
                </div>
                <hr style="background: var(--primary);">
                <div class="item-list">
                    <div class="item"></div>
                    $<div class="price" id="totalPrice">
                        <?php
                        if (isset($_SESSION['items'])) {
                            echo $total_price;
                        } else {
                            echo number_format($price + 10, 2);
                        }
                        ?>
                    </div>
                </div>
                <br>
                <br>
                <br>
                
              </div>
            </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
