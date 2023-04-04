
</div>
<div class="footer py-4 d-flex flex-lg-column ">
	<div class=" container  d-flex flex-column flex-md-row align-items-center justify-content-between">
		<div class="text-dark order-2 order-md-1">
			<span class="text-secondary fw-semibold me-1"><?php echo date("Y"); ?>©</span>
			<a href="index.php" target="_blank" class="text-white">Cartrade</a>
		</div>
	</div>
</div>

<!-- <script scr = "assets/js/jquery.min.js"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script scr = "assets/js/bootstrap5.bundle.min.js"></script>
<script scr = "assets/js/script.js"></script>
<!-- <script scr = "assets/js/custom.js"></script> -->

<script>
        $(document).ready(function (){
            $('#increment-btn').click(function (e) {
                e.preventDefault();
                var qty = $(this).closest('#product_data').find('#input-qty').val();

                var value = parseInt(qty,10);
                value = isNaN(value) ? 0 : value;
                if(value<10)
                {
                    value ++;
                     $(this).closest('#product_data').find('#input-qty').val(value);
                }
            })

                $('#decrement-btn').click(function (e) {
                e.preventDefault();
                var qty = $(this).closest('#product_data').find('#input-qty').val();

                var value = parseInt(qty,10);
                value = isNaN(value) ? 0 : value;
                if(value > 1)
                {
                    value --;
                     $(this).closest('#product_data').find('#input-qty').val(value);
                }
            })

        $('#addToCartBtn').click(function(e){
            e.preventDefault();

            var qty = $(this).closest('#product_data').find('#input-qty').val();
            var prod_id = $(this).val();

            $.ajax({
                method: "POST",
                url: "functions/handlecart.php",
                data:{
                    "prod_id": prod_id,
                    "prod_qty": qty,
                    "scope": "add"
                },
                success: function(response){
                    if(response == 201)
                    {
                        alert("product added to cart");
                    }
                    else if(response == "existing")
                    {  
                        alert("product already in cart");
                    }
                    else if(response == 401)
                    {  
                        alert("login to continue");
                    }
                    else if(response == 500)
                    {
                        alert("something went wrong");
                    }

                }

            })
        })

        $(document).on('click','.updateQty', function (){
            alert("hello");
        });
}) 
 </script>


</body>
</html>