<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='blog.css'>
    <title>Document</title>
</head>
<body>
    
    <header class="header">
        <div class='github'><a class='github' href="https://github.com/3ti-2020/crud-wiele-do-wielu-weronika-rogalska">POWRÓT DO GITHUB<img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands-1/512/142_Github_logo_logos-512.png" height='30px' width='30px'></a></div>
        <div class='blog'><h1>BLOG</h1></div>
        <div class='back'><b><a href="../index.php">POWRÓT</a></b></div>
    </header>
    <main class="main">
        <?php
        require_once('../connect.php');

        if(isset($_GET['tag'])){ 
            $zmienna = $_GET['tag'];
            $result = $conn->query("SELECT Distinct tytul, tresc, posty.id_post, czas FROM `posty_tagi`, posty, tagi WHERE posty_tagi.id_posty = posty.id_post AND posty_tagi.id_tagi = tagi.id_tagi AND tagi = '$zmienna'"); 
            echo("<div><a href='blog.php'>Wszystkie posty</a></div>");
        }else{
            $result = $conn->query("SELECT Distinct tytul, tresc, id_post, czas FROM posty");  
        } 

        while($row = $result -> fetch_assoc()){
            echo("<div class='container'>");
                echo("<div class='czas'>".$row['czas']."</div>");
                echo("<div class='tytul'><h2>".$row['tytul']."</h2></div>");
                echo("<div class='tresc'>".$row['tresc']."</div>");
                $id = $row['id_post'];
                $sql2 = "SELECT tagi FROM posty_tagi, posty, tagi WHERE posty_tagi.id_posty = posty.id_post AND posty_tagi.id_tagi=tagi.id_tagi AND posty_tagi.id_posty = $id";
                $result2 = $conn -> query($sql2);
                while($row2 = $result2 -> fetch_assoc()){
                    echo("<tr class='tagi'><a href='?tag=".$row2['tagi']."'>".$row2['tagi']."</a></tr>,");
                }
            echo("</div>");
        }

        ?>
    </main>
</body>
</html>