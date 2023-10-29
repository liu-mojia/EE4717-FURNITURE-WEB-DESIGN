<?php
include 'dbFunctions.php';

//Server side validation
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['description']) || empty($_POST['queryItem'])) {
    echo "<p>All Records should be filled in</p>";
    exit();
} else {
    //Assign superglobal variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $queryItem = $_POST['queryItem'];
    $description = $_POST['description'];

    submitQuery($name, $email, $queryItem, $description);
}
