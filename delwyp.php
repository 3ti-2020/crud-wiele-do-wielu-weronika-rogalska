<?php
require_once('connect.php');

$sql = "DELETE FROM lib_wyp WHERE id=".$_POST['id'];

mysqli_query($conn, $sql);

header('Location: index2.php');

?>