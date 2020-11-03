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
<div class="imie"><h1>Weronika Rogalska</h1></div>
<div class="menu">
    <a href='logowanie.php?akcja=wyloguj'>WYLOGUJ</a>
    <a href="card/card.html"> KARTA</a>
</div>
</header>
<sidebar class="sidebar">
    <form action='insert.php' method='POST'>
        <br>Autor:
        <input type='text' name='name'>
        <br>Tytuł:
        <input type='text' name='tytul'>
        <br><input class='btn' type='submit' value='DODAJ'>
    </form>
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
    <th>delete</th> 
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_autor_tytul']."</td>
        <td>".$row['name']."</td>
        <td>".$row['tytul']."</td>
        <td><form action='delete.php' method='POST'>
        <input style='display: none' value=".$row['id_autor_tytul']." name='id_autor_tytul'>
        <input class='del' type='submit' value='X'>
        </form></td>");
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