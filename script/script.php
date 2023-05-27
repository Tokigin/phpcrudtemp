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

function db_connect($connect_type, $db_name, $sql)
{
    //echo $sql;
    $servername = "localhost";
    $username = "root";
    $password = "";
    // $dbname = "mmtravel";
    // Create connection
    if ($connect_type == 0) {

        $conn = new mysqli($servername, $username, $password);
        echo "db crea";
    } else {
        $conn = new mysqli($servername, $username, $password, $db_name);
    }
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    extract($_POST);
    // $sql = "";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
// function insert_db($conn)
// {
//     extract($_POST);
//     $sql = "INSERT INTO db_enquiry (id,name,email,phone,from_date,to_date,note,package)
// VALUES ('1','" . $name . "','" . $email . "','" . $phone . "',' " . $from . "','" . $to . "','" . $message . "','package')";
//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
//     $conn->close();
// }
function db($task, $data)
{
    //echo "data>>>> $data";
    // 0=> create database
    // 1=> insert data

    if ($task == 0) {
        $quarry = "CREATE Database $data";
    }
    if ($task == 1) {
        $quarry = "INSERT INTO $data";
    }
    return $quarry;
}
