<?php
include 'dbFunctions.php';

$name = $_POST['name'];
$des = $_POST['description'];
$quantity = $_POST['quantity'];
$length = $_POST['length'];
$height = $_POST['height'];
$width = $_POST['width'];
$material = $_POST['material'];
$category = $_POST['category'];
$price = $_POST['price'];

addProduct($name, $des, $quantity, $length, $height, $width, $material, $category, $price);

header("Location: ../pages/addNewItemPage.php");
