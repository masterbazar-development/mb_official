<?php 
if(isset($_SESSION['message'])){
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<h3 class="text-center"><b>Hey!</b> <?= $_SESSION['message']?> </h3>
<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
unset($_SESSION['message']);

}
?>