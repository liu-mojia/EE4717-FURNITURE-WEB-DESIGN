document.addEventListener('DOMContentLoaded', function() {
  const plusMinusInputs = document.querySelectorAll('.plus-minus-input');


  plusMinusInputs.forEach(function(plusMinusInput) {
    console.log(plusMinusInput);
    //vvv important
    const productId = plusMinusInput.parentElement.parentElement.parentElement.getAttribute('productId');
    const quantityInput = plusMinusInput.querySelector('.quantity');
    const plusButton = plusMinusInput.querySelector('.plus');
    const minusButton = plusMinusInput.querySelector('.minus');
    const removeButton = plusMinusInput.querySelector('.removeBtn');

    removeButton.addEventListener('click',()=>{
      const elements = document.querySelectorAll(`[productId="${productId}"]`);
      console.log(productId);
      if (elements.length > 0) {
        elements[0].remove();
      }
    })

    plusButton.addEventListener('click', function() {
      console.log(productId);

      quantityInput.value = parseInt(quantityInput.value) + 1;
    });

    minusButton.addEventListener('click', function() {
      const currentValue = parseInt(quantityInput.value);
      
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
    });
  });
});
