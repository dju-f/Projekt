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