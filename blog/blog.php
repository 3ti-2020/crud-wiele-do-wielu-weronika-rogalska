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

        echo("<div class='container'>");

        $sql = "SELECT tytul, tresc, tagi FROM posty_tagi, posty, tagi WHERE posty_tagi.id_posty=posty.id_post AND posty_tagi.id_tagi=tagi.id_tagi";
        $sql2 = "SELECT tagi FROM posty_tagi, posty, tagi WHERE posty_tagi.id_posty = posty.id_post AND posty_tagi.id_tagi=tagi.id_tagi ";
        $result = $conn -> query($sql);
        $result2 = $conn -> query($sql2);

            echo("<table class='tab'>");
            while($row = $result -> fetch_assoc()){
                echo("<td class='tytul'><h2>".$row['tytul']."</h2></tr>");
                echo("<td class='tresc'>".$row['tresc']."</tr>");
                while($row = $result2 -> fetch_assoc()){
                    echo("<td class='tagi'>".$row['tagi']."</td>");
                }

                // echo("<td>".$row['tytul']."</td>");
                // echo("<td>".$row['tresc']."</td>");
                // echo("</tr>");
            }
            echo("</table>");
        echo("</div>");

        ?>
    </main>
</body>
</html>