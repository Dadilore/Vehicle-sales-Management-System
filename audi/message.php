<?php
if (isset($_SESSION['message']))
 {
   ?>
    <div class="alert alert-warning alert-dissmissible fade show" role="alert">
         <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
<?php
    unset($_SESSION['message']);   
}

?>