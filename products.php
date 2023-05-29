<?php
include "view/header.php";
include "script/script.php";
?>
<div class="p-5 text-center">
    <h1 class="pb-2 border-bottom">Latest Product</h1>
    <p class="text-sm font-weight-normal">Our Products are here!</p>

    <div class="row row-cols-1 row-cols-md-4 g-5 p-5 container-fluid">
        <?php
        cards(20);
        ?>
    </div>