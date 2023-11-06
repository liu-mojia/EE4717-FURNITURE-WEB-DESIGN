function editProduct(productID) {
    let quantity = prompt("Enter the quantity to add");
    let price = prompt("Enter the new price");
    window.location.href = "../php/editProduct.php?productID=" + productID + "&quantity=" + quantity + "&price=" + price;
}