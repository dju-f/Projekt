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
        <h1 class="title">Web-Artikel</h1>

<?php

    include("connection.php");

        $sql = "SELECT * FROM articles";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href=article.php?id=".$row["article_id"]." class=\"clickable_div\" style=\"all:inherit\">";
                echo "<div class=\"product_list_item\">";
                echo "<img src=\"" . $row["article_image"] . "\"/>";
                echo "<h1 class=\"product_list_item\">" . $row["article_title"] . "</h1>";
                echo "<p class=\"product_list_item_description\">" . $row["article_subtitle"] . "</p>";
                // echo "<a href=google.com class=\"clickable_div\"></a>";
                echo "</div>";
                echo "</a>";
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>