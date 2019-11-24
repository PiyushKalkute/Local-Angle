<?php
$server="127.0.0.1";
$user="root";
$pass="root@123";
$db="sakila";

$con = mysqli_connect($server,$user,$pass,$db) or die("Connection Failed");
echo "Connection Made";
?>