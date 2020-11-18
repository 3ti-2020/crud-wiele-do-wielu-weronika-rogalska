<?php
$servername = 'remotemysql.com';
$username = 'HCQrQTLU5R';
$password = 'LwUB5PqRHW';
$dbname = 'HCQrQTLU5R';

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
