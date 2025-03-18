<!DOCTYPE html>
<!-- Hier wird ein einzelner Web-Artikel auf dessen link in articles.php gedrückt wurde, angezeigt. -->
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
<!-- Der PHP-Teil ist für das Herunterladen des Web-Artikels aus der Datenbank und für das Anzeigen zuständig. -->
<?php
    // Hier wird die ID aus dem URL übertragen.
    $article_id = isset($_GET['id']) ?
    intval($_GET['id']) : 0;
    // Zuerst wird die Verbindung zur Datenbank hergestellt.
    include("connection.php");
        // Hier wird die Tabelle und der Web-Artikel anhand der ID in der Datenbank ausgewählt.
        $sql = "SELECT * FROM articles WHERE article_id=$article_id";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            // Hier wird der ganze Artikel angezeigt.
            while($row = mysqli_fetch_assoc($result)){
                echo "<img src=\"" . $row["article_image"] . "\" class=\"cover_image\">";
                echo "<h1 class=\"article\">" . $row["article_title"] . "</h1>";
                echo "<div class=\"article\">" . $row["article_text"] . "</div>";
                echo "<div class=\"article\"><a class=\"button_test\" href=\"forum.php\" target=_blank>Schreibe deine Meinung in unserem unzensierten Forum der Wahrheit!</a></div>";
            };
        }
        // Hier werden eventuelle Fehler behandelt.
        else{
            echo "Ladefehler!";
        }
    // Hier wird die Verbindung zur Datenbank geschlossen.
    mysqli_close($conn);
?>

    </body>
</html>
<html>
    <!-- Hier befindet sich die Fusszeile. -->
    <p class="footer"><br><br><br><br><br>© 2025 ConspiracyWeb<br><br></p>
</html>