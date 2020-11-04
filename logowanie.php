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
<div class="menu"><div><a href="index.php">POWRÓT</a></div></div>
</header>

<sidebar class="sidebar">
<h2>MENU</h2>
<ul>
<li><a href="card/card.html"> KARTA</a>
<li><a href='index2.php'>index2</a>
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
    <input type='text' placeholder='login' name='login'>
    <input type='password' placeholder='password' name='pass'>
    hasło: a
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