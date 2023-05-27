<?php 
include "view/header.php";
include "view/hero.php";
include "script/script.php";
?>
<div class="p-3 text-center">
    <h1 class="pb-2 border-bottom">Latest Product</h1>
    <p class="text-sm font-weight-normal">Our Products are here!</p>
</div>
<div class="row row-cols-1 row-cols-md-3 g-5 p-5">
    <?php
    cards(3, " Products");
    ?>
</div>
<div class="mx-auto p-2" style="width: 200px;">
    <button type="button" class="btn btn-light">Light</button>
</div>
<?php include "view/footer.php"; ?>