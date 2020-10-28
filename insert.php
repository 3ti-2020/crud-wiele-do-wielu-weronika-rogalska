<?php
require_once('connect.php');

$name = $_POST['name'];
$tytul = $_POST['tytul'];

$sql = "INSERT INTO lib_autor VALUES (null, '$name')";
// $sql2 = "INSERT INTO lib_tytul VALUES(null, '$tytul')";

mysqli_query($conn, $sql);
// mysqli_query($conn, $sql2);

header('Location: index.php');

?>