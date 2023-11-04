<?php
session_start();

if (
    isset($_POST['itemId'], $_POST['newQuantity']) &&
    isset($_SESSION['items'])
) {
    $itemId = $_POST['itemId'];
    $newQuantity = $_POST['newQuantity'];

    foreach ($_SESSION['items'] as $item) {
        if ($item['productID'] == $itemId) {
            $item['quantity'] = $newQuantity;
            break;
        }
    }
}
