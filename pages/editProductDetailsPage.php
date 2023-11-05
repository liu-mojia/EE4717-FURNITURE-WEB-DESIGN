
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
    <link rel="stylesheet"  href="../css/formStyle.css">
</head>

<body>
<div class="top-bar">
    <div class="logo">
      <img src="../resource/logo.png" alt="Logo" height="35" />
    </div>
    <div class="right-elements">
      <a href="index.php">HOME</a>
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
          echo '<a style="font-size:14px;"  href="pages/login.php">LOGIN</a>';
      } ?>
      <a href="./cart.php">
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
                    '.jpg "  onerror="this.src=\"../resource/defaultProduct.jpeg\"">
                </div>'; ?>
            </div>
            <div class="right-column" >
                <div class="">
                    <div class="">
                    <form action="">
                        <div class="edit-product" >
                            <label for="name" >Product Name </label>
                            <input required  type="text" id="name" value="<?php echo $name; ?>"/>
                            <label for="des" >Product Description </label>
                            <input required  type="text" id="des" value="<?php echo $des; ?>"/>
                            <label for="material" >Material </label>
                            <input required  type="text" id="material" value="<?php echo $material; ?>"/>
                            <div class="diamension">
                                <div class="edit-diamension">
                                    <label for="height" >Height </label>
                                    <input required  type="text" id="height" value="<?php echo $height; ?>"/>
                                </div>
                                <div class="edit-diamension">
                                    <label for="width" >Width </label>
                                    <input required  type="text" id="width" value="<?php echo $width; ?>"/>
                                </div>
                                <div class="edit-diamension">
                                    <label for="len" >Length </label>
                                    <input required  type="text" id="len" value="<?php echo $len; ?>"/>
                                </div>
                            </div>
                            <label for="price" >Price </label>
                            <input required  type="text" id="price" value="<?php echo $price; ?>"/>
                            <label for="quant" >Quantity </label>
                            <input required  type="text" id="quant" value="<?php echo $quant; ?>"/>
                        </div>

                    </form>
                    </div>
                   
                </br>
                </div>
                </br>
                <a href="../php/purchaseNow.php">
                    <div class="btn" style="margin-bottom:12px">
                        Update
                    </div>
                </a>
                <a href="../php/addToCart.php">
                    <div class="secondary-btn">
                       Remove Product
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