<?php
require_once('connect.php');

$login = $_POST['login_in'];
$tytul = $_POST['tytul'];
$data = $_POST['date_odd'];

$sql = "INSERT INTO lib_wyp VALUES (null, '$tytul', '$login', CURRENT_DATE, '$data')";

echo($sql);

mysqli_query($conn, $sql);

// header('Location: index2.php');

?>