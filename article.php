<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="stylesheet" href="style.css">
        <title>Artikel</title>
    </head>
    <body>
        <div class="div_navigation_bar">
            <ul>
                <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
                <li><a class="navigation_bar_selected" href="articles.php">WEB-ARTIKEL</a></li>
                <li><a class="navigation_bar" href="products.php">PRODUKTE</a></li>
                <li><a class="navigation_bar" href="forum.php">FORUM</a></li>    
            </ul> 
        </div>




<?php
    $article_id = isset($_GET['id']) ?
    intval($_GET['id']) : 0;

    include("connection.php");

        $sql = "SELECT * FROM articles WHERE article_id=$article_id";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo "<img src=\"" . $row["article_image"] . "\" class=\"cover_image\">";
                echo "<h1 class=\"article\">" . $row["article_title"] . "</h1>";
                // echo $row["article_subtitle"];
                // echo $row["article_id"];
                echo "<div class=\"article\">" . $row["article_text"] . "</div>";
                // echo $row["article_text"];
                echo "<div class=\"article\"><a class=\"button_test\" href=\"forum.php\" target=_blank>Schreibe deine Meinung in unserem unzensierten Forum der Wahrheit!</a></div>";
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>

    </body>
</html>
<html>
    <p class="footer"><br><br><br><br><br>© 2025 ConspiracyWeb<br><br></p>
</html>