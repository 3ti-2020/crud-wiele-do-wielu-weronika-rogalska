<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style5.css'>
    <title>CRUD - wiele do wielu</title>
</head>
<body>
<h1>Weronika Rogalska</h1>
    <?php
    require_once('conect.php');
    
    $sql = "SELECT * FROM ksiazki";
    $result = $conn -> query($sql);

    while($row = $result->fetch_assoc()){
        echo("id: ".$row['name']." <br>");
    }

    ?>
</body>
<script src="main.js"></script>
</html>