<?php
function db_connect($dbname, $sql, $type)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    if ($dbname == null) {
        $conn = new mysqli($servername, $username, $password);
    } else {
        $conn = new mysqli($servername, $username, $password, $dbname);
    }
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($type == 0) {
        // insert to db
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        //select from db
        $result = $conn->query($sql);
        return $result;
    }

    $conn->close();
}
function insert_db()
{
    extract($_POST);
    $image1 = $_FILES["img1"]["tmp_name"];
    $en_img1 = img_encode($image1);
    $image2 = $_FILES["img2"]["tmp_name"];
    $en_img2 = img_encode($image2);
    $image3 = $_FILES["img3"]["tmp_name"];
    $en_img3 = img_encode($image3);
    $sql = "INSERT INTO product VALUES ('" . $pid . "','" . $title . "','" . $des . "','" . $en_img1 . "','" . $en_img2 . "','" . $en_img3 . "','" . $price . "')";
    db_connect("kohtet", $sql, 0);
}
function db_create($dbname)
{
    $quarry_text = "CREATE Database $dbname";
    db_connect(null, $quarry_text, 0);
}

function db_get()
{
    $sql = "Select * from product";
    return db_connect("kohtet", $sql, 1);
}
function img_encode($image)
{
    $data = fopen($image, 'rb');
    $size = filesize($image);
    $contents = fread($data, $size);
    fclose($data);
    $encoded = base64_encode($contents);
    return $encoded;
}
