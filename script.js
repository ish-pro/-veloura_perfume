document.addEventListener("DOMContentLoaded", function() {
    // Bootstrap tooltips / general interactive handlers
    console.log("Veloura Parfum loaded successfully.");

    // Quantity selector handlers in Cart / Product details
    const qtyPlus = document.querySelectorAll('.qty-plus');
    const qtyMinus = document.querySelectorAll('.qty-minus');

    qtyPlus.forEach(btn => {
        btn.addEventListener('click', function() {
            let input = this.parentElement.querySelector('input');
            input.value = parseInt(input.value) + 1;
        });
    });

    qtyMinus.forEach(btn => {
        btn.addEventListener('click', function() {
            let input = this.parentElement.querySelector('input');
            if(parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        });
    });
});