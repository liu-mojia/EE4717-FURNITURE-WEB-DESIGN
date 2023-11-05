<?php
session_start();

if (
    isset($_POST['itemId'], $_POST['newQuantity']) &&
    isset($_SESSION['items'])
) {
    $itemId = $_POST['itemId'];
    $newQuantity = $_POST['newQuantity'];

    foreach ($_SESSION['items'] as &$item) {
        if ($item['productID'] == $itemId) {
            $item['quantitySelected'] = $newQuantity;
            break;
        }
    }

    // Output a success message here, if needed
    echo 'Received newQuantity: ' . $newQuantity;
} else {
    // Handle the case where itemId or newQuantity is not set in the POST request
    echo 'itemId or newQuantity not provided in the POST request';
}

header('Location: ../index.php');
