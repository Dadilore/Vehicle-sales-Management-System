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
 </script>


</body>
</html>