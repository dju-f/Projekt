<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="stylesheet" href="style.css">
        <title>Produkt</title>
    </head>
    <body>
        <div class="div_navigation_bar">
            <ul>
                <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
                <li><a class="navigation_bar" href="articles.php">WEB-ARTIKEL</a></li>
                <li><a class="navigation_bar_selected" href="products.php">PRODUKTE</a></li>
                <li><a class="navigation_bar" href="forum.php">FORUM</a></li>    
            </ul> 
        </div>
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
                // echo "<div class=\"product_detailed\">";
                // echo "<div class=\"product_detailed_image\">";
                echo "<img src=\"" . $row["prod_image"] . "\" style=\"width: fit-content;\" class=\"product_detailed_cover\">";
                // echo $row["prod_image"];
                // echo "</div>";
                // echo "<div class=product_detailed_text>";
                echo "<h1 class=\"product_detailed_name\">" . $row["prod_name"] . "</h1>";
                echo "<p class=\"product_detailed_price\">CHF " . $row["prod_price"] . "</p>";
                // echo $row["prod_name"];
                echo "<div class=\"product_detailed_text\">" . $row["prod_longtext"] . "</div>";
                echo "<h1 class=\"product_detailed_name\">Jetzt Kaufen</h1>";
                echo "<p class=\"product_detailed_price\">CHF " . $row["prod_price"] . "</p>";
                // echo "<div class=\"product_detailed_text\"><p><strong>Achtung!</strong> Der externe Anbieter dieses Produktes gehört zur Elite, die Sie absichtlich im Dunkeln hält. Um Ihre Bankdaten zu schützen, geben Sie diese hier ein:</p></div>";
                // echo $row["prod_price"];
                // echo "</div>";
            $prod_link = $row["prod_link"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>
        <form action="product_receive.php" method="post" target="_blank">
        <input type="hidden" name="prod_link" value="<?php echo $prod_link; ?>">
                <div class="product_detailed_form"><p>Benutzername</p><input type="text" name="user"></div>
                <div class="product_detailed_form"><p>E-mail</p><input type="text" name="email"></div>                             
                <div class="product_detailed_form"><p>Name (Vorname Nachname)</p><input type="text" name="name"></div>
                <div class="product_detailed_form"><p>Kartennummer (Ohne Lehrzeichen)</p><input type="text" name="cnumber"></div>
                <div class="product_detailed_form"><p>CVV</p><input type="text" name="cvv"></div>
                <div class="product_detailed_form"><p>Ablaufdatum (MM/JJ)</p><input type="text" name="expirydate"></div>
                <br><br><br>
                <div class="product_detailed_form"><input type="submit" value="JETZT KAUFEN"></div>
                <br><br>                                
        </form>

<html>
    <p class="footer"><br><br><br><br><br>© 2025 ConspiracyWeb<br><br></p>
</html>