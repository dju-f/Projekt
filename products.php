<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Produkte</title>
    </head>
    <body>
        <ul>
            <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.html"><strong>CONSPIRACY.WEB</strong></a></li>
            <li><a class="navigation_bar" href="articles.php">WEB-ARTIKEL</a></li>
            <li><a class="navigation_bar_selected" href="products.php">PRODUKTE</a></li>
            <li><a class="navigation_bar" href="forum.php">FORUM</a></li>    
        </ul> 
<?php
    include("connection.php");

        $sql = "SELECT * FROM products";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo "<a href=product.php?id=".$row["prod_id"]." class=\"clickable_div\" style=\"all: unset; cursor: pointer;\">";
                echo "<div class=\"product_list_item\">";
                echo "<img src=\"" . $row["prod_image"] . "\"/>";
                echo "<h1>" . $row["prod_name"] . "</h1>";
                echo "<p class=\"product_list_item_description\">" . $row["prod_shorttext"] . "</p>";
                echo "<p class=\"price_tag\">CHF <br> " . $row["prod_price"] . "</p>";
                // echo "link: <a href=product.php?id=".$row["prod_id"].">juhu</a>";
                echo "</div>";
                echo "</a>";

            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>


