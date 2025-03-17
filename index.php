<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Willkommen</title>

    </head>
    <body class="homepage">
        <!-- <div style="z-index: 10; background-color: black; height: 120px; position: absolute;">
        </div> -->
        <div class="div_navigation_bar">
            <ul>
                <li><a style="color:rgb(129, 224, 145);" class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
                <li><a class="navigation_bar" href="articles.php">WEB-ARTIKEL</a></li>
                <li><a class="navigation_bar" href="products.php">PRODUKTE</a></li>
                <li><a class="navigation_bar" href="forum.php">FORUM</a></li>    
            </ul>
        </div>
        <video autoplay muted loop id="matrix">
            <source src="matrix-rain-codes.3840x2160.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
        </video>
        <!-- <img src="Übergang 1.png"> -->
    </body>
</html>
<?php
    include("connection.php");

        $sql = "SELECT * FROM articles ORDER BY RAND() LIMIT 0, 1";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                // echo $row["article_id"];
                echo $row["article_image"];
                echo $row["article_title"];
                echo $row["article_subtitle"];
                // echo $row["article_text"];
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
                // echo $row["prod_id"];
                echo $row["prod_image"];
                echo $row["prod_name"];
                echo $row["prod_shorttext"];
                // echo $row["prod_longtext"];
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
                echo $row["forum_author"];
                echo $row["forum_text"];
                echo $row["forum_title"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>