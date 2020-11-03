<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style2.css'>
    <title>Weronika Rogalska gr2</title>
</head>
<body>
<header class="header"><h1>Weronika Rogalska</h1></header>
<sidebar class="sidebar">
    <form action='insert.php' method='POST'>
        <br>Autor:
        <input type='text' name='name'>
        <br>Tytuł:
        <input type='text' name='tytul'>
        <br><input type='submit' value='wyslij'>
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
    
    $sql = "SELECT * FROM lib_tytul";
    $result = $conn -> query($sql);

    echo("<table class='tab'>");
    echo("<tr>
    <th>id</th>
    <th>tytul</th>
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_tytul']."</td>
        <td>".$row['tytul']."</td>");
        echo("</tr>");
    }
    echo("</table>");

    $sql2 = "SELECT * FROM lib_autor";
    $result = $conn -> query($sql2);

    echo("<table class='tab'>");
    echo("<tr>
    <th>id</th>
    <th>autor</th>
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_autor']."</td>
        <td>".$row['name']."</td>");
        echo("</tr>");
    }
    echo("</table>");

    $conn->close();
    ?>

</main>
</body>
<!-- <script src="main.js"></script> -->
</html>