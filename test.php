<?php
//include "script/connection.php";
include "script/script.php";
$products_data = db_get();
while ($row = $products_data->fetch_assoc()) {
    $image1 = $row["image1"];
    $image = base64_decode($image1);
} ?>
<img src="data:image/png;base64,<?php echo $image1 ?>">