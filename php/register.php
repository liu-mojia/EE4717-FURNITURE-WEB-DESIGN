<?php
include "dbFunctions.php";

//Server side validation
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['check'])) {
    echo "<p>All Records should be filled in</p>";
    exit();
} else {
    //Assign superglobal variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check = $_POST['check'];

    //Call db Function
    registerUser($username, $password, $check);
}
