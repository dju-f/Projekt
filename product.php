<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Produkte</title>
    </head>
    <body>
        <ul>
            <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
            <li><a class="navigation_bar" href="articles.php">WEB-ARTIKEL</a></li>
            <li><a class="navigation_bar_selected" href="products.php">PRODUKTE</a></li>
            <li><a class="navigation_bar" href="forum.php">FORUM</a></li>    
        </ul> 
    </body>
</html>


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
        <form action="product_receive.php" method="post">
            Personalien:<br>
                Benutzername:                       <input type="text" name="user"><br>
                E-mail:                             <input type="text" name="email"><br>
            Kontodaten:<br>
                Name (Vornahme Nachname):           <input type="text" name="name"><br>
                Kartennummer (Ohne Lehrzeichen):    <input type="text" name="cnumber"><br>
                CVV:                                <input type="text" name="cvv"><br>
                Ablaufdatum (MM/JJ):                <input type="text" name="expirydate"><br>
                                                    <input type="submit">
        </form>