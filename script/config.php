<?php
include "connection.php";
$dbname = $_POST["dbname"];
db_create($dbname);
