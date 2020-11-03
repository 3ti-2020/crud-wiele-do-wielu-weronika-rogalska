<?php
require_once('connect.php');

$del = "DELETE from lib_autor_tytul where id_autor_tytul=".$_POST['id_autor_tytul'];

mysqli_query($conn, $del);

header('Location: index.php');

?>