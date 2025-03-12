<?php
    include("connection.php");

        $sql = "SELECT * FROM articles";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
            echo $row["article_title"];
            echo $row["article_subtitle"];
            echo $row["article_image"];
            echo $row["article_text"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>