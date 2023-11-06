<?php
include 'dbFunctions.php';

$productID = $_GET['productID'];

echo 'removed';
echo $productID;

removeProduct($productID);
?>

<script>
    window.location.href = '../pages/adminPage.php';
  alert('Product deleted successfully!');
</script>
