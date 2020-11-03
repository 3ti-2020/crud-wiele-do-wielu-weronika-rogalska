<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Weronika Rogalska</title>
</head>
<body>

<header class="header">
<div class="imie"><h1>Weronika Rogalska</h1></div>
<div class="menu"><a href="index.php">POWRÓT</a></div>
</header>

<sidebar class="sidebar2">
<h3>MENU</h3>
<ul>
<li><a href='index.php'>index</a>
<li><a href='plik2.php'>plik2</a>
</ul>
</sidebar>
<main class="main">

<?php
session_start();

if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj'){
    unset($_SESSION['zalogowany']);
};
if(!isset($_SESSION['zalogowany'])){
?>
<form action='index2.php' method='POST'>
    <input type='text' placeholder='login' name='login' placehold='login'>
    <input type='password' placeholder='password' name='pass' placehold='pass'>
    <input class='btn' type='submit' value='zaloguj'>
</form>
<?php
}else{
    echo'<li>ZALOGOWANY';
    echo'<br><a href="logowanie.php?akcja=wyloguj">WYLOGUJ</a>';
}
?>

</main>
</body>
</html>