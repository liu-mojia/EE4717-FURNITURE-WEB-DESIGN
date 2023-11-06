<?php
// include 'dbFunctions.php';

// $productID = $_GET['productID'];
// $quanity = $_GET['quantity'];
// $price = $_GET['price'];

// addProductQuantity($productID, $quanity);
// updatePrice($productID, $price);

// header('Location: ../pages/adminPage.php');
// header('Location: ../php/editProducts.php?productID=' . $productID);

include 'dbFunctions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST); // Debugging: Print the POST data to check if it's correct

    $name = $_POST['name'];
    $des = $_POST['des'];
    $material = $_POST['material'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $len = $_POST['len'];
    $price = $_POST['price'];
    $quant = $_POST['quant'];

    echo "Name: $name<br>";
    echo "Description: $des<br>";

    $productID = $_POST['productID'];

    echo "Product ID: $productID<br>";
    updateProduct(
        $productID,
        $name,
        $des,
        $material,
        $height,
        $width,
        $len,
        $price,
        $quant
    );

    header(
        'Location: ../pages/editProductDetailsPage.php?productID=' . $productID
    );
} else {
    echo 'Invalid request.';
}
?>
