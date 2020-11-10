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
    <div><a href="https://github.com/3ti-2020/crud-wiele-do-wielu-weronika-rogalska">POWRÓT DO GITHUB <img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands-1/512/142_Github_logo_logos-512.png" height='30px' width='30px'></a></div>
<div class="imie"><h1>Weronika Rogalska</h1></div>
<div class="imie"><h3>zalogowano admin</h3></div>
<div class="menu">
    <div><a href='logowanie.php?akcja=wyloguj'>WYLOGUJ</a></div>
    <div><a href="card/card.html"> KARTA</a></div>
</div>
</header>
<sidebar class="sidebar">
    <li class="sidebar_a"><a class="btn_dat" href="#">Dodaj autora i książkę</a></li>
    <li class="sidebar_a"><a class="btn_du" href="#">Dodaj użytkownika</a></li>
</sidebar>

<main class="main">
    <?php
    require_once('connect.php');

    $sql = "SELECT * FROM ksiazki";
    $result = $conn -> query($sql);

    echo("<table class='tab'>");
    echo("<tr>
    <th>autor</th>
    <th>tytul</th> 
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['name']."</td>
        <td>".$row['tytul']."</td>

        <td class='td_del' ><form action='delete.php' method='POST'>
        <input style='display: none' value=".$row['id_autor_tytul']." name='id_autor_tytul'>
        <input class='del' type='submit' value='X'>
        </form></td>");
        echo("</tr>");
    }
    ?>
    

    <?php
    echo("</table>");

    ?>
    <div>
    <form action="wyp.php" method="POST">
        <p>Książka:</p>
        <?php
            $result = $conn -> query("SELECT id_autor_tytul, tytul FROM lib_tytul, lib_autor_tytul, lib_autor WHERE lib_tytul.id_tytul = lib_autor_tytul.id_tytul AND lib_autor.id_autor=lib_autor_tytul.id_autor");
            echo("<select name='tytul'>");
            while($row = $result->fetch_assoc()){
                echo("<option name='tytul' value=".$row['id_autor_tytul'].">".$row['tytul']."</option>");
            }
            echo("</select>");
        ?>
        <p>Użytkownik:</p> 
        <?php
            $result = $conn->query("SELECT id, login FROM lib_user");
            echo("<select name='login'>");
            while($row = $result -> fetch_assoc()){
                echo("<option value='".$row['id']."' name='login'>".$row['login']."</option>");
            }
            echo("</select>");
            ?>
            <input type="date" name='date_odd'>
            <input class='btn' type="submit" value="dodaj">
        </form>
        </div>
    <?php


    $sql = "SELECT * from wypozyczenia";
    $result = $conn -> query($sql);

    echo("<table class='tab'>");
    echo("<tr>
    <th>login</th>
    <th>tytul</th>
    <th>wypożyczenie</th>
    <th>oddanie</th>
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


    $sql = "SELECT * from lib_user";
    $result = $conn -> query($sql);

    echo("<table class='tab'>");
    echo("<tr>
    <th>login</th>
    <th>hasło</th>
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['login']."</td>
        <td>".$row['password']."</td>");
        echo("</tr>");
    }
    echo("</table>");
    
    $conn->close();
    ?>

</main>



<div class="user_container">
    <div class="user_content">

    <div class="user_close"><b>+</b></div>

    <div><h1>Dodaj użytkownika</h1></div>

    <div class="input_user">
        <form action="">
            <input class="user" type="text" placeholder="login">
            <input class="user" type="text"placeholder="password">
            <input class="btn" type="submit" value="DODAJ">
        </form>
    </div>

    </div>
</div>



<div class="book_container">
    <div class="book_content">

    <div class="book_close"><b>+</b></div>

    <div><h1>Dodaj autora i książkę</h1></div>

    <div class="input_book">
    <form action='insert.php' method='POST'>
        <input class='book' type='text' name='name' placeholder='autor'>
        <input class='book' type='text' name='tytul' placeholder='tytuł'>
        <br><input class='btn' type='submit' value='DODAJ'>
    </form>
    </div>

    </div>
</div>



<script src="main.js"></script>
</body>
</html>
<?php
}else{
echo("<div style='text-align: center;
background-color: #e8e8e8;
padding: 5rem;
height: 100%'>");
echo"<div style='padding: 2rem;'>NIE zalogowano</div>";
echo"<div><a style='text-decoration:none;
color: black' href='logowanie.php'>-->ZALOGUJ<--</a></div>";
echo("</div>");
}

?>
