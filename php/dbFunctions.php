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

function registerUser($username, $password, $check, $email) {
    //Check if passwords match
    if ($password != $check) {
        echo "<p>Passwords do not match, please try again</p>";
    } else {
        //Establish connection with the db
        $db = connectDB('root', '');

        //Encrypt password
        $password = md5($password);

        //Form the sql statement
        $sql = "INSERT INTO Users VALUES ('$username', '$password', '$email')";

        //Query the db
        $result = $db->query($sql);

        if (!$result) {
            echo "<p>The query failed</p>";
        }
        //Close the db Connection
        $db->close();
    }
}

function loginUser($username, $password) {
    // Establish connection with db
    $db = connectDB('root', '');

    //Encrypt given password
    $password = md5($password);

    //Form sql statement
    $sql = "SELECT * FROM Users WHERE Username='$username'";

    //Query db
    $result = $db->query($sql);

    if (!$result) {
        echo "<p>The query failed</p>";
    }

    //Get the result
    $row = $result->fetch_assoc();
    $checkUser = $row['Username'];
    $checkPass = $row['Password'];
    $email = $row['Email'];

    //Check if match
    if ($checkUser == $username && $checkPass == $password) {
        // Start Session and store session variables
        session_start();
        $_SESSION['user'] = $username;
        $_SESSION['email'] = $email;
        echo "<p>Welcome ".$_SESSION['user']." you have successfully login.</p>";
        echo "<a href='../index.html'>Home Page</a>";
    } else {
        echo "<p>Please try again</p>";
        echo "<a href='../pages/login.html'>Login</p>";
    }
}