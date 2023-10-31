

document.addEventListener('DOMContentLoaded', function() {
  const plusMinusInputs = document.querySelectorAll('.plus-minus-input');
  const totalSubPrice = document.querySelectorAll('#productPrice');
  const totalPriceElement = document.getElementById('totalPrice');



  plusMinusInputs.forEach(function(plusMinusInput) {
    //vvv important
    const productItem = plusMinusInput.parentElement.parentElement.parentElement;
    const productId =productItem.getAttribute('productId');
    const productPrice=productItem.querySelector('.product-price').querySelector('.title-s');
    console.log(productPrice);

    const quantityInput = plusMinusInput.querySelector('.quantity');
    const plusButton = plusMinusInput.querySelector('.plus');
    const minusButton = plusMinusInput.querySelector('.minus');
    const removeButton = plusMinusInput.querySelector('.removeBtn');

    removeButton.addEventListener('click',()=>{
      const elements = document.querySelectorAll(`[productId="${productId}"]`);
      if (elements.length > 0) {
        elements[0].remove();
      }
    })

    plusButton.addEventListener('click', function() {
      quantityInput.value = parseInt(quantityInput.value) + 1;

      //change the first value to be price from db
      productPrice.textContent=calculateItemPrice(2,quantityInput.value);
      calculateTotalPrice();

    });

    minusButton.addEventListener('click', function() {
      const currentValue = parseInt(quantityInput.value);

      //change the first value to be price from db**
      productPrice.textContent=calculateItemPrice(2,currentValue);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
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

    total=total.toFixed(2);
    totalPriceElement.textContent=`${total}`;
  }
});




