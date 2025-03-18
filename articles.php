<!DOCTYPE html>
<!-- Dieses Dokument zeigt alle Web-Artikel. -->
<html>
     <!-- Im Head-Teil ist der code für das Favicon, das Styledokument für alle CSS-Teile und den Namen des Tabs. -->
    <head>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <link rel="stylesheet" href="style.css">
        <title>Artikel</title>
    </head>
    <body>
        <!-- Der folgende Teil ist die Navigationsleiste. -->
        <div class="div_navigation_bar">
            <ul>
                <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
                <li><a class="navigation_bar_selected" href="articles.php">WEB-ARTIKEL</a></li>
                <li><a class="navigation_bar" href="products.php">PRODUKTE</a></li>
                <li><a class="navigation_bar" href="forum.php">FORUM</a></li>    
            </ul> 
        </div>
        <!-- Hier wird der Titel der Seite angezeigt. -->
        <h1 class="title">Web-Artikel</h1>
<!-- Der PHP-Teil ist für das Herunterladen der Artikel aus der Datenbank und für das Anzeigen zuständig. -->
<?php
    // Zuerst wird die Verbindung zur Datenbank hergestellt.
    include("connection.php");
        // Hier wird die Tabelle in der Datenbank ausgewählt.
        $sql = "SELECT * FROM articles";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            // Hier werden alle Artikel mit all ihren Atributen angezeigt und danach hört die Schlaufe auf.
            while($row = mysqli_fetch_assoc($result)){
                // Hier liegt der Link zu einem einzelnen Artikel in article.php.
                echo "<a href=article.php?id=".$row["article_id"]." class=\"clickable_div\" style=\"all:inherit\">";
                echo "<div class=\"product_list_item\">";
                echo "<img src=\"" . $row["article_image"] . "\"/>";
                echo "<h1 class=\"product_list_item\">" . $row["article_title"] . "</h1>";
                echo "<p class=\"product_list_item_description\">" . $row["article_subtitle"] . "</p>";
                echo "</div>";
                echo "</a>";
            };
        }
        // Hier werden eventuelle Fehler behandelt.
        else{
            echo "Ladefehler!";
        }
    // Hier wird die Verbindung zur Datenbank geschlossen.
    mysqli_close($conn);
?>
<html>
        <!-- Hier befindet sich die Fusszeile. -->
    <p class="footer"><br><br><br><br><br>© 2025 ConspiracyWeb<br><br></p>
</html>