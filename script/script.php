<?php
function cards($y, $ptitle)
{
    $y = $y + 1;
    for ($x = 1; $x < $y; $x++) {
        $id = "p$x";
        $title = "$ptitle $x";
        $text = "loran loranloranloranloranloranloran$x";
        $img1 = "img/banner1.jpg";
        $img2 = "img/banner2.jpg";
        $img3 = "img/banner3.jpg";
        include "view/scard.php";
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
        $id = "pi$x";
        input($id, "Image $x", null, "file", true);
    }
}
