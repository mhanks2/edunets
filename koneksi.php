<?php
$host = "localhost";
$user = "root"; 
$pass = ""; 
$dbName = "edunet";
$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("" . mysqli_connect_error()) ;
}
echo "";

$sql = mysqli_select_db($conn, $dbName);
if (!$sql) {
    die ("" .mysqli_error($conn));
}
echo ("");
?>