
<?php
print 'test';

include '../php/dbFunctions.php';

//Load session variables
session_start();

// GET the product ID from the URL
$productID = $_GET['productID'];

// Store ProductID in session
$_SESSION['productID'] = $productID;
$_SESSION['buyNow'] = [];

$rows = getProductDetails($productID);

$name = $rows['Name'];
$des = $rows['Description'];
$material = $rows['Material'];
$len = $rows['Length'];
$width = $rows['Width'];
$height = $rows['Height'];
$price = $rows['Price'];
$quant = $rows['Quantity'];
$category = $rows['Category'];

if ($quant >= 1) {
    $_SESSION['buyNow'][0] = $name;
    $_SESSION['buyNow'][1] = 1;
    $_SESSION['buyNow'][2] = $price;
} else {
    unset($_SESSION['buyNow']);
}
//echo var_dump($_SESSION['items']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Living</title>
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

  <div id="featured-collection">
      <div class="layout">
        <div class="content">
            <div class="left-column">
                <?php echo '<div class="product-frame" >
                    <img src="../resource/' .
                    $category .
                    '/' .
                    $productID .
                    '.jpg">
                </div>'; ?>
            </div>
            <div class="right-column" style="padding:36px">
                <div class="">
                    <div class="title">
                    <?php echo "$name, $des"; ?>
                    </div>
                    <div class="subTitle">
                        <?php echo "$material ($len, $width, $height cm)"; ?>
                    </div>
                </br>

                    <div class="title">
                        <?php echo '$' . $price . ''; ?>
                    </div>
                </div>
                </br>
                </br>
                <a href="../php/purchaseNow.php">
                    <div class="btn" style="margin-bottom:12px">
                        Purchase Now
                    </div>
                </a>
                <a href="../php/addToCart.php">
                    <div class="secondary-btn">
                        Add to Cart
                    </div>
                </a>
                </br>
                </br>
                </br>
            </div>
        </div>
      </div>
  </div>

  
</body>
</html>