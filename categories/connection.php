<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "fineclothes";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect!");
}

return $con;