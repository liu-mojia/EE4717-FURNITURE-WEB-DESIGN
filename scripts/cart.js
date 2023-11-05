

document.addEventListener('DOMContentLoaded', function() {
  const plusMinusInputs = document.querySelectorAll('.plus-minus-input');
  const totalSubPrice = document.querySelectorAll('#productPrice');
  const totalPriceElement = document.getElementById('totalPrice');

  calculateTotalPrice(0);


  plusMinusInputs.forEach(function(plusMinusInput) {
    //vvv important
    const productItem = plusMinusInput.parentElement.parentElement.parentElement;
    const productId =productItem.getAttribute('productId');
    const productPrice=productItem.querySelector('.product-price').querySelector('.title-s');
    const productPriceQtyOne=productItem.querySelector('.product-price').querySelector('.productPriceQtyOne').textContent;
    const maxQty= Number(productItem.querySelector('.product-price').querySelector('.maxQty').textContent);

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
      calculateTotalPrice(productPrice.textContent);
      updateItemQuantity(itemId, 0);



    })

    plusButton.addEventListener('click', function() {
      quantityInput.value<maxQty?(quantityInput.value = parseInt(quantityInput.value) + 1): window.alert('Max selection reached!');
      //change the first value to be price from db
      const currPrice=calculateItemPrice(productPriceQtyOne,quantityInput.value).toFixed(2);
      productPrice.textContent=currPrice;
      summaryPrice.textContent="$"+currPrice;
      summaryQty.textContent=quantityInput.value;
      updateItemQuantity(productId, quantityInput.value);
      calculateTotalPrice(0);

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
      
      calculateTotalPrice(0);
    });
  });

  function calculateItemPrice(price,qty){
    return parseFloat(price)*parseFloat(qty).toFixed(2);
  }

  function calculateTotalPrice(deduction){
    let total=10;
    totalSubPrice.forEach((subPrice)=>{
      total+=parseFloat(subPrice.textContent);
      
    })
    total=total-deduction;
    total=total.toFixed(2);
    totalPriceElement.textContent=`${total}`;
  }

  function updateItemQuantity(itemId, newQuantity) {
    fetch('../php/update_session.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `itemId=${itemId}&newQuantity=${newQuantity}`,
    })
    .then(response => {
      if (response.ok) {
        // Request was successful, you can handle the response here if needed
        return response.text(); // or response.json() if the response is JSON
      } else {
        // Handle the case where the request failed
        console.error('Request failed with status ' + response.status);
      }
    })
    .then(data => {
      // Handle the response data here if needed
      console.log('Received data: ' + data);
    })
    .catch(error => {
      // Handle any other errors that occurred
      console.error('An error occurred:', error);
    });
  }
  
});






