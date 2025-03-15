<?php
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