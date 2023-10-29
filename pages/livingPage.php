<html></html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Living</title>
    <link rel="stylesheet" href="../css/index.css" />
    <style>
        #text-container{
          display:flex;
          flex-direction: row;
          align-items: center;
          justify-content:flex-start;
        }

        .left{
          width:10%;
          font-size: 40px;
          font-weight: 400;
          margin-right: 25px;
        }

        .right{
          font-size: 15px;
          width:72%;
          margin-left: 25px;
          text-align:left;
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
      <a href="#">DINING</a>
      <a href="./livingPage.php">LIVING</a>
      <a href="#">WORKSPACE</a>
      <a href="#">CONTACT US</a>
      <a>
          <img src="../resource/cartIcon.svg" height="26px" width="26px" />
        </a>
    </div>
  </div>

  <div class="content" >
  <div class="banner" >
        <img src="../resource/livingbanner.png" />
        <div class="image-overlay"></div>
        <div class="image-text" >
            <div id="text-container">
              <div class="left">Living</div>
              <div style="width: 3px; height: 65px;flex-shrink: 0; background: var(--secondary, #1B0A05);"></div>
              <div class="right">Update the heart of your home with our living room masterpieces. No matter your theme, you’ll find luxury, well-made sofas, lounge chairs, coffee tables, TV consoles and more in every style.</div>
            </div>
        </div>
    </div>
    
  </div>
</body>
</html>