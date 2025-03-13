<?php
    $prod_id = isset($_GET['id']) ?
    intval($_GET['id']) : 0;

    include("connection.php");

        $sql = "SELECT * FROM products WHERE prod_id=$prod_id";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo $row["prod_image"];
                echo $row["prod_name"];
                echo $row["prod_shorttext"];
                echo $row["prod_id"];
                echo $row["prod_longtext"];
                echo $row["prod_price"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>