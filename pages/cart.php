
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/cart.css" />
    <script src="../scripts/cart.js"></script>

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
        <div style="width:70%">
            <div class="box" >
            <div style="padding:40px 70px 40px 70px">
                <?php foreach ($_SESSION['items'] as $item) {
                    $name = $item['name'];
                    $des = $item['des'];
                    $price = $item['price'];
                    $maxQuantity = $item['quantity'];
                    $productID = $item['productID'];
                    $len = $item['length'];
                    $width = $item['width'];
                    $height = $item['height'];
                    $category = $item['category'];

                    if (isset($item['quantitySelected'])) {
                        $quantitySelected = $item['quantity'];
                    } else {
                        $quantitySelected = 1;
                    }

                    echo '<div class="cart-item" productId=' . $productID . '>';
                    echo '<div class="product-frame" >
                        <img src="../resource/' .
                        $category .
                        '/' .
                        $productID .
                        '.jpg">
                        </div>';
                    echo '<div class="product-details" id="productID" productId=' .
                        $productID .
                        '  >';
                    echo '<div class="title-s">' .
                        $name .
                        ', ' .
                        $des .
                        '</div>';
                    echo '<div class="subTitle">' .
                        $len .
                        ' x' .
                        $width .
                        ' x' .
                        $height .
                        'cm</div>
                        <div style="display:flex; flex-direction:row; align-items:center;margin-top:12px" >
                            <div class="plus-minus-input">
                                <button class="minus" onclick="">-</button>
                                <input type="text" class="quantity" value=' .
                        $quantitySelected .
                        '>
                                <button class="plus">+</button>
                                <div class="removeBtn" style="color:var(--primary); cursor:pointer;  margin-left: 12px;">
                            REMOVE</div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-price">
                        <span>$</span>

                        <div class="title-s" id="productPrice" productId=' .
                        $productID .
                        '>
                            ' .
                        number_format($price, 2) .
                        '    
                        </div>    

                        <div class="productPriceQtyOne" hidden id="productPriceQtyOne" productId=' .
                        $productID .
                        '>
                            ' .
                        $price .
                        '    
                        </div>    
                          
                    </div>
                </div>';
                } ?>
            </div>
            </div>
        </div>
        <div style="width:25%; padding:50px">
            <div class="summary" onload="calculateTotalPrice()">
                <div class="title-s">Order Summary</div>
                <br>
                <div class='subTitle' style="width:100%">

                <!-- item-list is the loop, span name gets from session variable, itemid inside item list is product id -->
                    <?php foreach ($_SESSION['items'] as $item) {
                        $name = $item['name'];
                        $des = $item['des'];
                        $price = $item['price'];
                        $maxQuantity = $item['quantity'];
                        $productID = $item['productID'];
                        $len = $item['length'];
                        $width = $item['width'];
                        $height = $item['height'];

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
                            '">1</span>)
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
                        $<div class="price" id="totalPrice"></div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="btn">
                        <a href="delivery.php" id="checkout" class="">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>



</body>
</html>