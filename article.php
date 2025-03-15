<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Produkte</title>
    </head>
    <body>
        <ul>
            <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
            <li><a class="navigation_bar_selected" href="articles.php">WEB-ARTIKEL</a></li>
            <li><a class="navigation_bar" href="products.php">PRODUKTE</a></li>
            <li><a class="navigation_bar" href="forum.php">FORUM</a></li>    
        </ul> 

    </body>
</html>

<?php
    $article_id = isset($_GET['id']) ?
    intval($_GET['id']) : 0;

    include("connection.php");

        $sql = "SELECT * FROM articles WHERE article_id=$article_id";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo $row["article_image"];
                echo $row["article_title"];
                echo $row["article_subtitle"];
                echo $row["article_id"];
                echo $row["article_text"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>