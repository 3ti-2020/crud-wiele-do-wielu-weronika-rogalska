<?php
require_once('connect.php');

$login = $_POST['login'];
$tytul = $_POST['tytul'];
$data = $_POST['date_odd'];

$sql = "INSERT INTO lib_wyp VALUES (null, '$login', '$tytul', CURRENT_DATE, '$data')";

echo($sql);

mysqli_query($conn, $sql);

header('Location: index2.php');

?>