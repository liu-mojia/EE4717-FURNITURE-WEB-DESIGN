<?php
include "dbFunctions.php";

//Server side validation
if (empty($_POST['username']) || empty($_POST['password'])) {
    echo "<p>All Records should be filled in</p>";
    exit();
} else {
    //Assign superglobal variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Call db Function
    loginUser($username, $password);
}