<?php
require_once('connect.php');

$login = $_POST['login'];
$password = $_POST['password'];
$admin = $_POST['admin'];

$sql = "INSERT INTO lib_user VALUES (null, '$login', '$password', $admin)";

mysqli_query($conn, $sql);

//header('Location: index2.php');

?>
