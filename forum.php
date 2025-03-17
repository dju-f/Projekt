<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Produkte</title>
    </head>
    <body>
        <!-- <div class="div_navigation_bar"> -->
            <ul>
                <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
                <li><a class="navigation_bar" href="articles.php">WEB-ARTIKEL</a></li>
                <li><a class="navigation_bar" href="products.php">PRODUKTE</a></li>
                <li><a class="navigation_bar_selected" href="forum.php">FORUM</a></li>    
            </ul> 
        <!-- </div> -->
        <h1 class="title">Forum</h1>    
        <a class="button_comment" href="forum_input.html" target="_blank">KOMMENTAR VERFASSEN</a>
    </body>
</html>
<?php
    include("connection.php");

        $sql = "SELECT * FROM forum";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class=\"comment\">";
                echo "<span class=\"comment_author\">" . $row["forum_author"] . " &nbsp;  &nbsp;</span>";
                echo "<span class=\"comment_title\">" . $row["forum_title"] . "<br></span>";
                echo "<span class=\"comment_text\">" . nl2br($row["forum_text"]) . "</span>";
                echo "</div>";
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>