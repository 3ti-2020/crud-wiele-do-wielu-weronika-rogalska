<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style2.css'>
    <title>Weronika Rogalska</title>
</head>
<body>
<header class="header"><h1>Weronika Rogalska</h1></header>
<main class="main">
    <?php
    require_once('connect.php');
    
    $sql = "SELECT * FROM ksiazki";
    $result = $conn -> query($sql);

    echo("<table class='tab'>");
    echo("<tr>
    <th>autor</th>
    </tr>");

    echo("<br>");
    while($row = $result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['name']."</td>");
        echo("</tr>");
    }

    ?>
</main>
</body>
<script src="main.js"></script>
</html>