<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Forum</title>
    </head>
    <body>
        <ul>
            <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.html"><strong>CONSPIRACY.WEB</strong></a></li>
            <li><a class="navigation_bar" href="articles.php">WEB-ARTIKEL</a></li>
            <li><a class="navigation_bar" href="products.php">PRODUKTE</a></li>
            <li><a class="navigation_bar_selected" href="forum.php">FORUM</a></li>    
        </ul>
          
    </body>
</html>
<?php
    include("connection.php");

        $sql = "SELECT * FROM forum";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
            echo $row["forum_author"];
            echo $row["forum_title"];
            echo $row["forum_text"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>