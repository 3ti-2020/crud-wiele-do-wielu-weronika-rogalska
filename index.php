<?php
session_start();

if((isset($_POST['pass'])) && (isset($_POST['login'])) && $_POST['login']=='a' && $_POST['pass'] == 'a'){
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
    <div><a href="https://github.com/3ti-2020/crud-wiele-do-wielu-weronika-rogalska">POWRÓT DO GITHUB<img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands-1/512/142_Github_logo_logos-512.png" height='30px' width='30px'></a></div>
<div class="imie"><h1>Weronika Rogalska</h1></div>
<div class="imie"><h3>zalogowano admin</h3></div>
<div class="menu">
    <div><a href='logowanie.php?akcja=wyloguj'>WYLOGUJ</a></div>
</div>
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
    
    $sql = "SELECT login, tytul, date_wyp, date_odd FROM wypozyczenia";
    $result = $conn -> query($sql);

    echo("<table class='tab'>");
    echo("<tr>
    <th>login</th>
    <th>tytuł</th>
    <th>data wypożyczenia</th>
    <th>data oddania</th>
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['login']."</td>
        <td>".$row['tytul']."</td>
        <td>".$row['date_wyp']."</td>
        <td>".$row['date_odd']."</td>");
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
    <div><a href="https://github.com/3ti-2020/crud-wiele-do-wielu-weronika-rogalska">POWRÓT DO GITHUB<img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands-1/512/142_Github_logo_logos-512.png" height='30px' width='30px'></a></div>
<div class="imie"><h1>Weronika Rogalska</h1></div>
<div class="menu">
    <div><a href="logowanie.php">ZALOGUJ</a></div>
</div>
</header>
<sidebar class="sidebar">
    <h2>MENU</h2>
    <ul>
    <li><a href="card/card.html"> KARTA</a>
    <li><a href='index.php'>index2</a>
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

    $sql = "SELECT login, tytul, date_wyp, date_odd FROM wypozyczenia";
    $result = $conn -> query($sql);

    echo("<table class='tab'>");
    echo("<tr>
    <th>login</th>
    <th>tytuł</th>
    <th>data wypożyczenia</th>
    <th>data oddania</th>
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['login']."</td>
        <td>".$row['tytul']."</td>
        <td>".$row['date_wyp']."</td>
        <td>".$row['date_odd']."</td>");
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