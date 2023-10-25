<?php

function connectDB($user, $password)
{
    @ $db = new mysqli('localhost', $user, $password, 'EleganceMaison');

    // Check if connection has been established
    if (mysqli_connect_errno()) {
        echo 'Error: could not connect to database. Please try again.';
        exit;
    }

    return $db;
}

function registerUser($username, $password, $check) {
    //Check if passwords match
    if ($password != $check) {
        echo "<p>Passwords do not match, please try again</p>";
    } else {
        //Establish connection with the db
        $db = connectDB('root', '');

        //Encrypt password
        $password = md5($password);

        //Form the sql statement
        $sql = "INSERT INTO Users VALUES ('$username', '$password')";

        //Query the db
        $result = $db->query($sql);

        if (!$result) {
            echo "<p>The query failed</p>";
        } else { //Print page here
            echo "<p>Welcome ".$username.".You have been registered</p>";
            echo "<a href='loginPage'>login</a>";
        }
    }
}