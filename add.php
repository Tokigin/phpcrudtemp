<?php
include "view/header.php";
include "script/script.php";
?>
<div style="height: 100px;"></div>
<form class="row g-3 mx-auto" style="width: 500px;" method="post" action="script/config.php" enctype="multipart/form-data">
    <?php
    input("pid", "Product ID", "col-md-6", null);
    input("title", "Product Name", "col-md-6", null);
    input("des", "Description", null, null);
    upload(3);
    input("price", "Price", null, null);
    button("Add Database", null, "btn btn-dark");
    ?>
</form>