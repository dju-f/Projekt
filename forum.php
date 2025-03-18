<!DOCTYPE html>
<!-- Dieses Dokument zeigt alle Kommentare. -->
<html>
    <!-- Im Head-Teil ist der code für das Favicon, das Styledokument für alle CSS-Teile und den Namen des Tabs. -->
    <head>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <link rel="stylesheet" href="style.css">
        <title>Produkte</title>
    </head>
    <body>
        <!-- Der folgende Teil ist die Navigationsleiste. -->
        <div class="div_navigation_bar">
            <ul>
                <li><a style="color:rgb(129, 224, 145);"class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
                <li><a class="navigation_bar" href="articles.php">WEB-ARTIKEL</a></li>
                <li><a class="navigation_bar" href="products.php">PRODUKTE</a></li>
                <li><a class="navigation_bar_selected" href="forum.php">FORUM</a></li>    
            </ul> 
        </div>
        <!-- Hier wird der Titel der Seite angezeigt. -->
        <h1 class="title">Forum</h1>
        <!-- Hier ist der Knopf, der zum  Kommentarformular.-->
        <a class="button_comment" href="forum_input.html">KOMMENTAR VERFASSEN</a>
    </body>
</html>
<!-- Der PHP-Teil ist für das Herunterladen der Web-Artikel aus der Datenbank und für das Anzeigen zuständig. -->
<?php
    // Zuerst wird die Verbindung zur Datenbank hergestellt.
    include("connection.php");
        // Hier wird die Tabelle in der Datenbank ausgewählt.
        $sql = "SELECT * FROM forum ORDER BY forum_id DESC";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            // Hier werden alle Kommentare mit all ihren Atributen angezeigt und danach hört die Schlaufe auf.
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class=\"comment\">";
                echo "<span class=\"comment_author\">" . $row["forum_author"] . " &nbsp;  &nbsp;</span>";
                echo "<span class=\"comment_title\">" . $row["forum_title"] . "<br></span>";
                echo "<span class=\"comment_text\">" . nl2br($row["forum_text"]) . "</span>";
                echo "</div>";
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