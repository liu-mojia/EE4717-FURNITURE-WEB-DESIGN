<?php
include "dbFunctions.php";

//Server side validation
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['check']) || empty($_POST['email'])) {
    echo "<p>All Records should be filled in</p>";
    exit();
} else {
    //Assign superglobal variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check = $_POST['check'];
    $email = $_POST['email'];

    //Call db Function
    registerUser($username, $password, $check, $email);

    //Redirect to login page
    header('Location: ../pages/login.php');
}
