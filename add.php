<?php
include "view/header.php";
include "script/script.php";

?>
<div style="height: 100px;"></div>
<form class="row g-3 mx-auto" style="width: 500px;" method="post" action="script/config.php" enctype="multipart/form-data">
    <?php
    if (isset($_GET['msg'])) {
        $msg = "New record created successfully";
        include "view/alert.php";
    }
    // $check = isset($_GET['msg']);
    // $msg = $check ? "New record created successfully" : "Error creating record";
    // $check ? include "view/alert.php" : "";

    input("pid", "Product ID", "col-md-6", null);
    input("title", "Product Name", "col-md-6", null);
    input("des", "Description", null, null);
    upload(3);
    input("price", "Price", null, null);
    button("Add Database", null, "btn btn-dark");
    ?>
</form>