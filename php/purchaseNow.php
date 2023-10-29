<?php
// Load session variables
session_start();

if (isset($_SESSION['items'])) {
    unset($_SESSION['items']);
    //Redirect to delivery.php
    header("Location: ../pages/delivery.php");
}

if (!isset($_SESSION['buyNow'])) {
    //Redirect to delivery.php
    header("Location: ../pages/productDetailsPage.php");
}



