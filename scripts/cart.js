

document.addEventListener('DOMContentLoaded', function() {
  const plusMinusInputs = document.querySelectorAll('.plus-minus-input');
  const totalSubPrice = document.querySelectorAll('#productPrice');
  const totalPriceElement = document.getElementById('totalPrice');

  calculateTotalPrice();


  plusMinusInputs.forEach(function(plusMinusInput) {
    //vvv important
    const productItem = plusMinusInput.parentElement.parentElement.parentElement;
    const productId =productItem.getAttribute('productId');
    const productPrice=productItem.querySelector('.product-price').querySelector('.title-s');
    const productPriceQtyOne=productItem.querySelector('.product-price').querySelector('.productPriceQtyOne').textContent;

    const summaryProductElement=document.querySelectorAll(`[itemId="${productId}"]`);
    const summaryPrice=summaryProductElement[0].querySelector('.price');
    const summaryQty=summaryProductElement[0].querySelector('.item').querySelector('.qty');

    const quantityInput = plusMinusInput.querySelector('.quantity');
    const plusButton = plusMinusInput.querySelector('.plus');
    const minusButton = plusMinusInput.querySelector('.minus');
    const removeButton = plusMinusInput.querySelector('.removeBtn');

    removeButton.addEventListener('click',()=>{
      const elements = document.querySelectorAll(`[productId="${productId}"]`);
      elements.forEach((e)=>{
        console.log(e);
        summaryProductElement.forEach((item)=>{
          item.remove();
        })

        e.remove();
      })
      calculateTotalPrice();


    })

    plusButton.addEventListener('click', function() {
      quantityInput.value = parseInt(quantityInput.value) + 1;
      //change the first value to be price from db
      const currPrice=calculateItemPrice(productPriceQtyOne,quantityInput.value).toFixed(2);
      productPrice.textContent=currPrice;
      summaryPrice.textContent="$"+currPrice;
      summaryQty.textContent=quantityInput.value;
      updateItemQuantity(productId, quantityInput.value);
      calculateTotalPrice();

    });

    minusButton.addEventListener('click', function() {
      const currentValue = parseInt(quantityInput.value);

      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
      const currPrice=calculateItemPrice(productPriceQtyOne,quantityInput.value).toFixed(2);

      productPrice.textContent=currPrice;
      summaryPrice.textContent="$"+currPrice;
      summaryQty.textContent=quantityInput.value;
      updateItemQuantity(productId, quantityInput.value);
      
      calculateTotalPrice();
    });
  });

  function calculateItemPrice(price,qty){
    return parseFloat(price)*parseFloat(qty).toFixed(2);
  }

  function calculateTotalPrice(){
    let total=10;
    totalSubPrice.forEach((subPrice)=>{
      total+=parseFloat(subPrice.textContent);
      
    })

    // console.log("called",totalSubPrice);

    total=total.toFixed(2);
    totalPriceElement.textContent=`${total}`;
  }
});

function updateItemQuantity(itemId, newQuantity) {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '../php/update_session.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send(`itemId=${itemId}&newQuantity=${newQuantity}`);

  // Handle the response if needed
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
    }
  };
}




