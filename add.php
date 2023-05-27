<?php
include "view/header.php";
include "script/script.php";
?>
<div style="height: 100px;"></div>
<form class="row g-3 mx-auto" style="width: 500px;" method="post" action="script/config.php">
    <?php
    // input("dbname", "Database Name", null, null);
    // input("name2", "Database Name2", "col-md-6", null);
    // input("pid", "Product ID", "col-md-6", null);
    // input("des", "Description", null, null);
    // upload(3);
    button("Add Database", null, "btn btn-dark");
    ?>
</form>