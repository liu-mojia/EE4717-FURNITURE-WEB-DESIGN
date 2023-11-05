<?php
session_start();

if (
    isset($_POST['itemId'], $_POST['newQuantity']) &&
    isset($_SESSION['items'])
) {
    $itemId = $_POST['itemId'];
    $newQuantity = $_POST['newQuantity'];

    foreach ($_SESSION['items'] as $key => &$item) {
        if ($item['productID'] == $itemId) {
            if ($newQuantity == 0) {
                unset($_SESSION['items'][$key]);
            } else {
                $item['quantitySelected'] = $newQuantity;
            }
            break;
        }
    }
    echo 'Received newQuantity: ' . $newQuantity;
} else {
    echo 'itemId or newQuantity not provided in the POST request';
}
