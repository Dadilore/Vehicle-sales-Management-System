
$(document).ready(function (){
    $('#increment-btn').click(function (e) {
        e.preventDefault();
        var qty = $('#input-qty').val();

        alert(qty);
    })

    $('#addToCartBtn').click(function(e){
        e.preventDefault();

        var qty = $(this).closest('#product_data').find('#input-qty').val();
        var prod_id = $(this).val();

        alert(prod_id);
    })
})