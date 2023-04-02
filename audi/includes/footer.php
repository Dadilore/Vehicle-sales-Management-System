
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