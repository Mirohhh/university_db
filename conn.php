<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$dp = "university_db";
$port = 3306;

$conn = mysqli_connect($host,$user,$pass,$dp,$port);

if (!$conn) {
    echo "Connection faild";
}