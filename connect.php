<?php
$servername = 'sql7.freemysqlhosting.net';
$username = 'sql7373152';
$password = 'N8MUhbgFCC';
$dbname = 'sql7373152';

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>