<?php
//Load session variables
session_start();

//Server side validation
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['phoneNo'])) {
    echo "<p>All Records should be filled in</p>";
    exit();
} else {
    // Store session variables
    $_SESSION['orderName'] = $_POST['name'];
    $_SESSION['orderEmail'] = $_POST['email'];
    $_SESSION['orderAddress'] = $_POST['address'];
    $_SESSION['orderPhoneNo'] = $_POST['phoneNo'];

    //Redirect to payment page
    header("Location: payment.html");
}