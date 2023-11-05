<?php

function connectDB($user, $password)
{
    @$db = new mysqli('localhost', $user, $password, 'EleganceMaison');

    // Check if connection has been established
    if (mysqli_connect_errno()) {
        echo 'Error: could not connect to database. Please try again.';
        exit();
    }

    return $db;
}

function registerUser($username, $password, $check, $email)
{
    //Check if passwords match
    if ($password != $check) {
        echo '<p>Passwords do not match, please try again</p>';
    } else {
        //Establish connection with the db
        $db = connectDB('root', '');

        //Encrypt password
        $password = md5($password);

        //Form the sql statement
        $sql = "INSERT INTO Users VALUES ('$username', '$password', '$email')";

        //Query the db
        $result = $db->query($sql);

        if (!$result) {
            echo '<p>The query failed</p>';
        }
        //Close the db Connection
        $db->close();
    }
}

function loginUser($username, $password)
{
    // Establish connection with db
    $db = connectDB('root', '');

    //Encrypt given password
    $password = md5($password);

    //Form sql statement
    $sql = "SELECT * FROM Users WHERE Username='$username'";

    //Query db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    }

    //Get the result
    $row = $result->fetch_assoc();
    $checkUser = $row['Username'];
    $checkPass = $row['Password'];
    $email = $row['Email'];

    //Check if match
    if ($checkUser == $username && $checkPass == $password) {
        // Start Session and store session variables
        session_start();
        $_SESSION['user'] = $username;
        $_SESSION['email'] = $email;

        header('Location: ../index.php');

        // echo "<a href='../index.html'>Home Page</a>";
    } else {
        header('Location: ../pages/login.php?login=failed');
    }
    //Close the db Connection
    $db->close();
}

function submitQuery($name, $email, $queryItem, $des)
{
    // Establish connection with db
    $db = connectDB('root', '');

    //Form the sql statement
    $sql = "INSERT INTO Queries (Name, Email, QueryItem, Description) VALUES ('$name', '$email', '$queryItem', '$des')";

    //Query the db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    } else {
        echo '<p>Query has been successfully submitted, we will get back to you in 3 working days.</p>';
        echo '<a href=../index.html>Home</a>';
    }
    //Close the db Connection
    $db->close();
}

function createDelivery($address, $name, $email, $phoneNo)
{
    // Establish connection with db
    $db = connectDB('root', '');

    //Form the sql statement
    $sql = "INSERT INTO Delivery_detail (Address, Name, Email, PhoneNo) VALUES ('$address', '$name', '$email', '$phoneNo')";

    //Query the db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    }
    //Close the db Connection
    $db->close();
}

function createOrder($orderID, $productIDs, $quantArray)
{
    // Establish connection with db
    $db = connectDB('root', '');

    foreach ($productIDs as $productID) {
        //Form the sql statement
        $sql = "INSERT INTO Orders VALUES ('$orderID', '$productID', '$quantArray[$productID]')";

        //Query the db
        $result = $db->query($sql);

        if (!$result) {
            echo '<p>The query failed</p>';
        }

        subtractProductQuantity($productID, $quantArray[$productID]);
    }
    //Close the db Connection
    $db->close();
}

function getOrderID($name)
{
    // Establish connection with db
    $db = connectDB('root', '');

    //Form the sql statement
    $sql = "SELECT MAX(Order_id) FROM Delivery_detail WHERE Name='$name'";

    //Query the db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    }

    //Get the result
    $row = $result->fetch_assoc();
    $orderID = $row['MAX(Order_id)'];

    //Close the db Connection
    $db->close();

    return $orderID;
}

function adminProducts()
{
    $db = connectDB('root', '');
    $sql = 'SELECT * FROM Product ';

    //Query the db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    }

    //Process each result
    foreach ($result as $row) {
        //Obtain the relevant results
        $len = $row['Length'];
        $width = $row['Width'];
        $height = $row['Height'];
        $name = $row['Name'];
        $des = $row['Description'];
        $price = $row['Price'];
        $productID = $row['Product_id'];
        $category = $row['Category'];
        $quantity = $row['Quantity'];

        echo "<div class='cart-item' productId=" . $productID . '>';
        echo '<div class="product-frame" ><img src="../resource/' .
            $category .
            '/' .
            $productID .
            '.jpg" onerror="this.src=\'../resource/defaultProduct.jpeg\' "
            ></div>';
        echo '<div class="product-details" id="productID" productId=' .
            $productID .
            '  >';
        echo "<div class='title-s'>" . $name . ', ' . $des . '</div>';
        echo '<div class="subTitle">(' .
            $len .
            ' x' .
            $width .
            ' x' .
            $height .
            'cm)</div>
            <div style="display:flex; flex-direction:row; align-items:center;margin-top:12px" > Instock: ' .
            $quantity .
            '
                </div>
            <div class="secondary-btn">edit</div>
            </div>
        <div class="product-price">
            <span>$</span>
            <div class="title-s" id="productPrice" productId=' .
            $productID .
            '>' .
            number_format($price, 2) .
            '</div></div>
        </div>
        </div></div></div>';
    }

    //Close the db Connection
    $db->close();
}

function displayProducts($category, $sort)
{
    // Establish connection with db
    $db = connectDB('root', '');

    //Form the sql statement based on sorting function
    if ($sort == 'price_accending') {
        $sql = "SELECT * FROM Product WHERE Category = '$category' ORDER BY Price ASC";
    } elseif ($sort == 'price_descending') {
        $sql = "SELECT * FROM Product WHERE Category = '$category' ORDER BY Price DESC ";
    } elseif ($sort == 'name_accending') {
        $sql = "SELECT * FROM Product WHERE Category = '$category' ORDER BY Name ASC";
    } elseif ($sort == 'name_descending') {
        $sql = "SELECT * FROM Product WHERE Category = '$category' ORDER BY Name DESC ";
    } else {
        $sql = "SELECT * FROM Product WHERE Category = '$category'";
    }

    //Query the db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    }

    //Process each result
    foreach ($result as $row) {
        //Obtain the relevant results
        $productName = $row['Name'];
        $productDes = $row['Description'];
        $productPrice = number_format($row['Price'], 2);
        $productID = $row['Product_id'];

        //HTML output
        echo "<div class=product-display id= '$productID'>";
        echo "<img src='../resource/$category/$productID.jpg' alt='Product Image' onerror='this.src=\"../resource/defaultProduct.jpeg\"' />";
        echo "<a href='../pages/productDetailsPage.php?productID=$productID'>";
        echo "<div class='product-details'>";
        echo "<span>
          $productName $productDes
        </br>
           <span> $ $productPrice</span>
        </span></div></a></div>"; //TODO
    }

    //Close the db Connection
    $db->close();
}

function getProductDetails($productID)
{
    // Establish connection with db
    $db = connectDB('root', '');

    //Form the sql statement
    $sql = "SELECT * FROM Product WHERE Product_id = '$productID'";

    //Query the db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    }

    $row = $result->fetch_assoc();

    //Close the db Connection
    $db->close();

    return $row;
}

function addProduct(
    $name,
    $des,
    $quant,
    $length,
    $height,
    $width,
    $weight,
    $material,
    $category,
    $price
) {
    // Establish connection with db
    $db = connectDB('root', '');

    //Form the sql statement
    $sql = "INSERT INTO Product(Name, Description, Quantity, Length, Height, Width, Weight, Material, Category, Price) 
VALUES ('$name', '$des', '$quant', '$length', '$height', '$width', '$weight', '$material', '$category', '$price')";

    //Query the db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    }

    //Close the db Connection
    $db->close();
}

function addProductQuantity($productID, $additionalQuantity)
{
    // Establish connection with db
    $db = connectDB('root', '');

    //Form the sql statement
    $sql = "UPDATE Product SET Quantity = Quantity + $additionalQuantity WHERE Product_id = '$productID'";

    //Query the db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    }

    //Close the db Connection
    $db->close();
}

function subtractProductQuantity($productID, $quantity)
{
    // Establish connection with db
    $db = connectDB('root', '');

    //Form the sql statement
    $sql = "UPDATE Product SET Quantity = Quantity - '$quantity' WHERE Product_id = '$productID'";

    //Query the db
    $result = $db->query($sql);

    if (!$result) {
        echo '<p>The query failed</p>';
    }

    //Close the db Connection
    $db->close();
}
