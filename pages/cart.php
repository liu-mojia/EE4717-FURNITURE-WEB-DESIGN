
<?php print 'test'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Living</title>
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
            <div class="box" style="height:80vh" >
            <div style="padding:40px 70px 40px 70px">
                <div class="cart-item" productId='test1'>
                    <div class="product-frame" >
                        <img src="../resource/living-products/test.png">
                    </div>
                    <div class="product-details" id='productID' productId='test1'  >
                        <div class="title-s">APPLARYD, 3-seat sofa</div>
                        <div class="subTitle">Description</div>
                        <div style="display:flex; flex-direction:row; align-items:center;margin-top:12px" >
                            <div class="plus-minus-input">
                                <button class="minus" onclick="">-</button>
                                <input type="text" class="quantity" value="1">
                                <button class="plus">+</button>
                                <div class="removeBtn" style="color:var(--primary); cursor:pointer;  margin-left: 12px;">
                            REMOVE</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-price">
                        <span>$</span>
                        <div class="title-s" id="productPrice" productId="test1">
                            1088.90    
                        </div>    
                    </div>
                </div>
                
                <div class="cart-item" productId='test2'>
                    <div class="product-frame" >
                        <img src="../resource/living-products/test.png">
                    </div>
                    <div class="product-details" id='productID' productId='test2'  >
                        <div class="title-s">APPLARYD, 3-seat sofa</div>
                        <div class="subTitle">Description</div>
                        <div style="display:flex; flex-direction:row; align-items:center;margin-top:12px" >
                            <div class="plus-minus-input">
                                <button class="minus" onclick="">-</button>
                                <input type="text" class="quantity" value="1">
                                <button class="plus">+</button>
                                <div class="removeBtn" style="color:var(--primary); cursor:pointer;  margin-left: 12px;">
                            REMOVE</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-price">
                        <span>$</span>
                        <div class="title-s" id="productPrice" productId="test2">
                           90   
                        </div>    
                    </div>
                </div>
                
                
                
            </div>




            </div>
        </div>
        <div style="width:25%; padding:50px">
            <div class="">
                <div class="title-s">Order Summary</div>
                <br>
                <div class='subTitle' style="width:100%">
                    <div class="item-list">
                        <div class="item">testtesttesttesttesttesttest</div>
                        <div class="price">$1099,99</div>
                    </div>
                    <div class="item-list">
                        <div class="item">testtesttesttesttesttesttest</div>
                        <div class="price">$1099,99</div>
                    </div>
                    <br>
                    <div class="item-list">
                        <div class="item">Delivery</div>
                        <div class="price">$10.00</div>
                    </div>
                    <hr style="background: var(--primary);">
                    <div class="item-list">
                        <div class="item"></div>
                        <div class="price">$1099,99</div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="btn">
                    Checkout
                </div>
                

            </div>
        </div>
    </div>
  </div>



</body>
</html>