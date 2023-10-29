
<?php print 'test'; ?>

<?php include '../php/dbFunctions.php'; ?>
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
                photos
            </div>
            <div class="right-column" style="padding:36px">
                <div class="">
                    <div class="title">
                    APPLARYD, 3-seat sofa
                    </div>
                    <div class="subTitle">
                    Beige and Blue Macrocannage Embroidery (36 x 27.5 x 16.5 cm)
                    </div>
                </br>

                    <div class="title">
                        $1099.99
                    </div>
                </div>
                </br>
                </br>
                <div class="btn" style="margin-bottom:12px">
                    Purchase Now
                </div>
                <div class="secondary-btn">
                    Add to Cart
                </div>
                </br>
                </br>
                </br>


                <div class="feature">
                    <div class="subtitle" style="margin-bottom:12px">
                        Features
                    </div>
                    <div class=""> 
                        <li>size</li>
                        <li>size</li>
                        <li>size</li>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>

  
</body>
</html>