<?php
include 'dbFunctions.php';

$productID = $_GET['productID'];
$quanity = $_GET['quantity'];
$price = $_GET['price'];

addProductQuantity($productID, $quanity);
updatePrice($productID, $price);

header("Location: ../pages/adminPage.php");