<?php

function db_connect($dbname, $sql)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    // $dbname = "mmtravel";
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
    //extract($_POST);
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
function db_create($dbname)
{
    $quarry_text = "CREATE Database $dbname";
    db_connect(null, $quarry_text);
}
