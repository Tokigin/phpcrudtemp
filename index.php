<?php
include "view/header.php";
include "view/hero.php";
include "script/script.php";
?>
<div class="p-3 text-center container-fluid">
    <h1 class="pb-2 border-bottom">Latest Product</h1>
    <p class="text-sm font-weight-normal">Our Products are here! XD</p>
</div>

<div class="row row-cols-1 row-cols-md-3 g-5 p-5 container-fluid">
    <?php
    cards(6);
    ?>
</div>

<?php include "view/footer.php"; ?>