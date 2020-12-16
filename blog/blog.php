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
        <div class='dodaj_post'><a href="#">Dodaj nowy post</a></div>
    </header>
    <main class="main">
        <?php
        require_once('../connect.php');

        $result = $conn->query("SELECT Distinct tytul, tresc, id_post FROM posty"); 

        while($row = $result -> fetch_assoc()){
            echo("<div class='container'>");
                echo("<div class='tytul'><h2>".$row['tytul']."</h2></div>");
                echo("<div class='tresc'>".$row['tresc']."</div>");
                $id = $row['id_post'];
                $sql2 = "SELECT tagi FROM posty_tagi, posty, tagi WHERE posty_tagi.id_posty = posty.id_post AND posty_tagi.id_tagi=tagi.id_tagi AND posty_tagi.id_posty = $id";
                $result2 = $conn -> query($sql2);
                while($row2 = $result2 -> fetch_assoc()){
                    echo("<tr class='tagi'>".$row2['tagi']."</tr>,");
                }
            echo("</div>");
        }

        ?>
    </main>
    <div class="post_container">
        <div class="post_content">

            <div class="post_close"><b>+</b></div>

            <div><h1>Nowy post</h1></div>

            <div class="input_book">
            <form action='insert_post.php' method='POST'>
                <input class='in_post' type='text' name='tytul' placeholder='Tytuł'>
                <?php
                $sql3 = "SELECT * FROM tagi";
                $result3 = $conn -> query($sql3);
                
                echo("<select name='tagi'>");
                while($row3 = $result3 -> fetch_assoc()){
                    echo("<option name='tagi' value=".$row3['id_tagi']." >".$row3['tagi']."</option>");
                }
                echo("</select>");
                ?>
                <!-- <input class='in_post' type='text' name='tresc' placeholder='Treść'> -->
                <br><input class='btn' type='submit' value='Dodaj'>
            </form>
            <div><h2>Dodaj tag</h2></div>
            <form action="insert_tag.php" method='POST'>
                <input class='in_post' type="text" name='tagi' placeholder='Tag'>
                <input class='btn' type='submit' value='Dodaj'>
            </form>
            </div>
        </div>
    </div>
<script src="blog.js"></script>
</body>
</html>