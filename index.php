<?php
session_start();

if(isset($_POST['pass']) && $_POST['pass'] == 'a'){
    $_SESSION['zalogowany'] = 1;
}

if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] = 1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style2.css'>
    <title>Weronika Rogalska gr2</title>
</head>
<body>
<header class="header">
    <div><a href="https://github.com/3ti-2020/crud-wiele-do-wielu-weronika-rogalska">POWRÓT DO GITHUB</a></div>
<div class="imie"><h1>Weronika Rogalska</h1></div>
<div class="menu">
    <div><a href='logowanie.php?akcja=wyloguj'>WYLOGUJ</a></div>
    <div><a href="card/card.html"> KARTA</a></div>
</div>
</header>
<sidebar class="sidebar">
    <h2>MENU</h2>
    <ul>
    <li><a href='index.php'>index</a>
    <li><a href='index2.php'>index2</a>
    </ul>
</sidebar>
<main class="main">
    <?php
    require_once('connect.php');

    $sql = "SELECT * FROM ksiazki";
    $result = $conn -> query($sql);

    echo("<table class='tab'>");
    echo("<tr>
    <th>id</th>
    <th>autor</th>
    <th>tytul</th>
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_autor_tytul']."</td>
        <td>".$row['name']."</td>
        <td>".$row['tytul']."</td>");
        echo("</tr>");
    }
    echo("</table>");

    $conn->close();
    ?>

</main>
</body>
</html>
<?php
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style2.css'>
    <title>Weronika Rogalska gr2</title>
</head>
<body>
<header class="header">
    <div><a href="https://github.com/3ti-2020/crud-wiele-do-wielu-weronika-rogalska">POWRÓT DO GITHUB</a></div>
<div class="imie"><h1>Weronika Rogalska</h1></div>
<div class="menu">
    <div><a href="logowanie.php">ZALOGUJ</a></div>
    <div><a href="card/card.html">KARTA</a></div>
</div>
</header>
<sidebar class="sidebar">
    <h2>MENU</h2>
    <ul>
    <li><a href='index.php'>index</a>
    <li><a href='index2.php'>index2</a>
    </ul>
</sidebar>
<main class="main">
    <?php
    require_once('connect.php');

    $sql = "SELECT * FROM ksiazki";
    $result = $conn -> query($sql);

    echo("<table class='tab'>");
    echo("<tr>
    <th>id</th>
    <th>autor</th>
    <th>tytul</th>
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_autor_tytul']."</td>
        <td>".$row['name']."</td>
        <td>".$row['tytul']."</td>");
        echo("</tr>");
    }
    echo("</table>");

    $conn->close();
    ?>

</main>
</body>
</html>

<?php
}

?>