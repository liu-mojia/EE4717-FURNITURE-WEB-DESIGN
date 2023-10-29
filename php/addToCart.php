<?php
include 'dbFunctions.php';

//Load session variables
session_start();

$productID = $_SESSION['productID'];

$rows = getProductDetails($productID);

$name = $rows['Name'];
$des = $rows['Description'];
$price = $rows['Price'];
$quant = $rows['Quantity'];

$item = array('name' => $name, 'des' => $des, 'price' => $price, 'quantity' => $quant, 'productID' => $productID);

if (!isset($_SESSION['items'])) {
    $_SESSION['items'] = array();
    array_push($_SESSION['items'], $item);
} else {
    if (!in_array($item, $_SESSION['items'])) {
        array_push($_SESSION['items'], $item);
    }
}

//echo var_dump($_SESSION['items']);
//Redirect to productDetailsPage
header("Location: ../pages/productDetailsPage.php?productID=$productID");
