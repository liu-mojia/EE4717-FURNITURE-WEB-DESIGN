<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Add New Item</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/formStyle.css" />
  </head>
  <body>
    <div class="top-bar">
      <div class="logo">
        <img src="../resource/logo.png" alt="Logo" height="35" />
      </div>
      <div class="right-elements">
        <a href="/">HOME</a>
        <a href="#">DINING</a>
        <a href="#">LIVING</a>
        <a href="#">WORKSPACE</a>
        <a href="#">CONTACT US</a>
      </div>
    </div>

    <div id="featured-collection" style="background-image: url('../resource/bg2.png'); bottom:0;
">
    <div class="layout">

      <div class="title">
        Add New Item
      </div>
    </br>
      <div class="box">
        <div >
            <!-- TODO:  add new item -->
          <form method="post" action="" id="form">
            <table id="contact-table">
              <tr>
                <td><label for="name">Name *</label></td>
              </tr>
              <tr>
                <td><input type="text" class="text-box" id="name" name="name" required/></td>
              </tr>
              <tr>
                <td><label for="description" required>Description *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="description" name="description"/></td>
              </tr>
              <tr>
                <td><label for="quantity">Quantity *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="quantity" name="quantity"/></td>
              </tr>
              <tr>
                <td><label for="">Diamension *</label></td>
              </tr>
              <tr>
                <td>
                    <div class="box-layout">

                        <input required type="text" class="sm-box" id="length" name="length" placeholder="Length" required/>
                        <input required type="text" class="sm-box" id="height" name="height" placeholder="Height" required/>
                        <input required type="text" class="sm-box" id="width" name="width" placeholder="Width" required/>
                    </div>
                </td>
              </tr>
              <tr>
                <td><label for="material">Material *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="material" name="material"/></td>
              </tr>
              <tr>
                <td><label for="category">Category *</label></td>
              </tr>
              <tr>
                <td><input required type="text" class="text-box" id="category" name="category"/></td>
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