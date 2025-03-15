<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Willkommen</title>
    </head>
    <body>
        <ul>
            <li><a style="color:rgb(129, 224, 145);" class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
            <li><a class="navigation_bar" href="articles.php">WEB-ARTIKEL</a></li>
            <li><a class="navigation_bar" href="products.php">PRODUKTE</a></li>
            <li><a class="navigation_bar" href="forum.php">FORUM</a></li>    
        </ul>
          
    </body>
</html>
<?php
    include("connection.php");

        $sql = "SELECT * FROM articles ORDER BY RAND() LIMIT 0, 1";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo $row["article_id"];
                echo $row["article_image"];
                echo $row["article_title"];
                echo $row["article_subtitle"];
                echo $row["article_text"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);

    include("connection.php");

        $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 0, 1";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo $row["prod_id"];
                echo $row["prod_image"];
                echo $row["prod_name"];
                echo $row["prod_shorttext"];
                echo $row["prod_longtext"];
                echo $row["prod_price"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);

    include("connection.php");

        $sql = "SELECT * FROM forum ORDER BY RAND() LIMIT 0, 1";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo $row["article_author"];
                echo $row["article_text"];
                echo $row["article_title"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>