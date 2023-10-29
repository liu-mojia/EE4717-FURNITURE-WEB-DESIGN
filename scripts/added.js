document.addEventListener('DOMContentLoaded', function() {
    // Get the plus-minus input container
    const plusMinusInput = document.querySelector('.plus-minus-input');
  
    // Get the quantity input element
    const quantityInput = plusMinusInput.querySelector('.quantity');
  
    // Get the plus and minus buttons
    const plusButton = plusMinusInput.querySelector('.plus');
    const minusButton = plusMinusInput.querySelector('.minus');
  
    // Add event listener for the plus button
    plusButton.addEventListener('click', () => {
      quantityInput.value = parseInt(quantityInput.value) + 1;
    });
  
    // Add event listener for the minus button
    minusButton.addEventListener('click', () => {
      const currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
    });
  });
  