<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "fineclothes";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect!");
}

return $con;

function isEmpty($value){
    return empty($value);
}

function isValidEmail($value){
    $cleaned = filter_var($value, FILTER_SANITIZE_EMAIL);
    if($cleaned == false){
        return false;
    }
    return filter_var($cleaned, FILTER_VALIDATE_EMAIL);
}

function hasMinLength($value, $min_length){
    $length = strlen($value);
    if($length >= $min_length){
        return true;
    }
    return false;
}

