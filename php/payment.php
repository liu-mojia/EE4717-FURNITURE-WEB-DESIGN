<?php
include 'dbFunctions.php';

//Load session variables
session_start();

$name = $_SESSION['orderName'];
$email = $_SESSION['orderEmail'];
$address = $_SESSION['orderAddress'];
$phoneNo = $_SESSION['orderPhoneNo'];
$productIDs = $_SESSION['productIDs'];
$quantArray = $_SESSION['quantityArray'];

// Create delivery
createDelivery($address, $name, $email, $phoneNo);

// Get the orderID
$orderID = getOrderID($name);

// Create order
createOrder($orderID, $productIDs, $quantArray);

//Redirect to success page
header("Location: ../pages/success.php");
