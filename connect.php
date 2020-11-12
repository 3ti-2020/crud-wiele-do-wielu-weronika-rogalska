<?php
$servername = 'sql7.freemysqlhosting.net';
$username = 'sql7376163';
$password = 'VwlDwmwFbG';
$dbname = 'sql7376163';

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
