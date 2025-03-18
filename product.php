<!DOCTYPE html>
<!-- Hier wird ein einzelnes Produkt auf dessen link in products.php gedrückt wurde, angezeigt. -->
<html>
    <!-- Im Head-Teil ist der code für das Favicon, das Styledokument für alle CSS-Teile und den Namen des Tabs. -->
    <head>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <link rel="stylesheet" href="style.css">
        <title>Produkt</title>
    </head>
    <body>
        <!-- Der folgende Teil ist die Navigationsleiste. -->
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
<!-- Der PHP-Teil ist für das Herunterladen des Produkts aus der Datenbank und für das Anzeigen zuständig. -->
<?php
    // Hier wird die ID aus dem URL übertragen.
    $prod_id = isset($_GET['id']) ?
    intval($_GET['id']) : 0;
    // Zuerst wird die Verbindung zur Datenbank hergestellt.
    include("connection.php");
        // Hier wird die Tabelle und der Produkte anhand der ID in der Datenbank ausgewählt.
        $sql = "SELECT * FROM products WHERE prod_id=$prod_id";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            // Hier wird das ganze Produkt angezeigt.
            while($row = mysqli_fetch_assoc($result)){
                echo "<img src=\"" . $row["prod_image"] . "\" style=\"width: fit-content;\" class=\"product_detailed_cover\">";
                echo "<h1 class=\"product_detailed_name\">" . $row["prod_name"] . "</h1>";
                echo "<p class=\"product_detailed_price\">CHF " . $row["prod_price"] . "</p>";
                echo "<div class=\"product_detailed_text\">" . $row["prod_longtext"] . "</div>";
                echo "<h1 class=\"product_detailed_name\">Jetzt Kaufen</h1>";
                echo "<p class=\"product_detailed_price\">CHF " . $row["prod_price"] . "</p>";
            $prod_link = $row["prod_link"];
            };
        }
        // Hier werden eventuelle Fehler behandelt.
        else{
            echo "Ladefehler!";
        }
    // Hier wird die Verbindung zur Datenbank geschlossen.
    mysqli_close($conn);
?>
<!-- Hier ist das Formular für die Bankdaten des Benutzers, welches den Input und den Benutzer mit der Post-Methode an forum_receive.php weiterleitet. -->
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
    <!-- Hier befindet sich die Fusszeile. -->
    <p class="footer"><br><br><br><br><br>© 2025 ConspiracyWeb<br><br></p>
</html>