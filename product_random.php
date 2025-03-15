<?php
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
?>