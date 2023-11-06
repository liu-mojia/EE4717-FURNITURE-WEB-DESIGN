
<?php
print 'test';

include '../php/dbFunctions.php';

//Load session variables
session_start();

$username = $_SESSION['user'];

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet"  href="../css/productPage.css">
    <link rel="stylesheet"  href="../css/formStyle.css">
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

  <div id="featured-collection">
  <div class="product-content">
            <div class="product-details-display" >
                <?php echo '<div class="product-frame" >
                        <img src="../resource/' .
                    $category .
                    '/' .
                    $productID .
                    '.jpg">
                        </div>'; ?>
            </div>
            <div class="layout">
                <div class="">
                    <div class="">

                    <form action="../php/editProduct.php" method="POST">
                    <input type="hidden" name="productID" value="<?php echo $productID; ?>">

                        <div class="edit-product" >
                            <label for="name" >Product Name </label>
                            <input required  type="text" name="name" id="name" value="<?php echo $name; ?>"/>
                            <label for="des" >Product Description </label>
                            <input required  type="text" name="des" id="des" value="<?php echo $des; ?>"/>
                            <label for="material" >Material </label>
                            <input required  type="text" name="material" id="material" value="<?php echo $material; ?>"/>
                            <div class="diamension">
                                <div class="edit-diamension">
                                    <label for="height"  >Height </label>
                                    <input required  type="text" name="height" id="height" value="<?php echo $height; ?>"/>
                                </div>
                                <div class="edit-diamension">
                                    <label for="width" >Width </label>
                                    <input required  name="width" type="text" id="width" value="<?php echo $width; ?>"/>
                                </div>
                                <div class="edit-diamension">
                                    <label for="len" >Length </label>
                                    <input required  name="len" type="text" id="len" value="<?php echo $len; ?>"/>
                                </div>
                            </div>
                            <label for="price"  >Price </label>
                            <input required name="price" type="text" id="price" value="<?php echo $price; ?>"/>
                            <label for="quant" >Quantity </label>
                            <input required name="quant" type="text" id="quant" value="<?php echo $quant; ?>"/>
                        </div>
                        <br>
                        <div  style="margin-bottom: 12px; width:100%; display:flex; flex-direction: column" >
                            <input type="submit" class="btn" value="Update Product details">
                        </div>
                    </form>

                    <div  style="margin-bottom: 12px; width:100%; display:flex; flex-direction: column" >
                            <!-- <input type="submit" class="secondary-btn" value="Remove Product"> -->
                            <?php echo '<a href="../php/removeProduct.php?productID=' .
                                $productID .
                                '" class="secondary-btn">Remove Product</a>'; ?>
                    </div>
                    </div>
                </br>
                </div>
                </br>
               
                </br>
                </br>
                </br>
            </div>
        </div>
      </div>
  </div>

  
</body>
</html>