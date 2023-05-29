<?php
include "connection.php";
function cards($y)
{
    $products_data = db_get();
    $x = 0;
    while ($row = $products_data->fetch_assoc()) {
        if ($x < $y) {
            $id = $row["productid"];
            $title = $row["productname"];
            $text = $row["description"];
            $img1 = $row["image1"];
            $img2 = $row["image2"];
            $img3 = $row["image3"];
            $price = $row["price"];
            include "view/scard.php";
            $x++;
        }
    }
}

function input($id, $label, $class, $type)
{

    if ($class == null) {
        $class = "col-12";
    }
    if ($type == null) {
        $type = "text";
    }
    include "view/input.php";
}
function button($text, $type, $class)
{
    if ($class == null) {
        $class = "col-12";
    }
    if ($type == null) {
        $type = "submit";
    }
    include "view/button.php";
}

function upload($y)
{
    $y = $y + 1;
    for ($x = 1; $x < $y; $x++) {
        $id = "img$x";
        input($id, "Image $x", null, "file", true);
    }
}
function table()
{
    $products_data = db_get();
    include "view/table.php";
}
