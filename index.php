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
<sidebar class="sidebar">s</sidebar>
<main class="main">
    <?php
    require_once('connect.php');
    
    $sql = "SELECT * FROM ksiazki";
    $result = $conn -> query($sql);

    while($row = $result->fetch_assoc()){
        echo("id: ".$row['name']." <br>");
    }

    ?>
</main>
</body>
<script src="main.js"></script>
</html>