<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="stylesheet" href="style.css">
        <title>Willkommen</title>

    </head>
    <body class="homepage">
        <!-- <div style="z-index: 10; background-color: black; height: 120px; position: absolute;">
        </div> -->
        <div class="div_navigation_bar">
            <ul>
                <li><a style="color:rgb(129, 224, 145);" class="navigation_bar_home" href="index.php"><strong>CONSPIRACY.WEB</strong></a></li>
                <li><a class="navigation_bar" href="articles.php">WEB-ARTIKEL</a></li>
                <li><a class="navigation_bar" href="products.php">PRODUKTE</a></li>
                <li><a class="navigation_bar" href="forum.php">FORUM</a></li>    
            </ul>
        </div>
        <div class="fade_top"></div>
        <video autoplay muted loop id="matrix">
            <source src="matrix-rain-codes.3840x2160.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
        </video>
        <!-- <img src="Übergang 1.png"> -->
         <div class="homepage_content">
            <div class="logo">
                <!-- <div class="logo"> -->
                    <p>
                        <strong>CONSPIRACY.WEB</strong>
                    </p>
            </div>
    </body>
</html>


<?php
    $citations1 = ["«Die Wahrheit wird nicht aufgedeckt – sie wird freigelassen!»","«Trump ist der einzige, der die geheime Agenda stoppen kann!»","«5G ist mehr als nur Strahlung – es ist Kontrolle!»","«Die Elite will, dass du im Dunkeln bleibst – aber wir bringen das Licht!»","«Flache Erde? Wir sind nicht die Verrückten – wir sind die Wachen!»","«Zerstört die 5G-Masten – für die Freiheit, für die Wahrheit!»","«Wer fragt, hat bereits die Antwort: Die Erde ist flach!»","«Die Medien lügen – wir decken die Wahrheit auf!»"];
    $citations2 = ["«Die Elite belügt uns – Zeit, den Schleier zu lüften!»","«Der Mondlandungsbetrug ist nur der Anfang – was verstecken sie noch?»","«Trump ist der wahre Retter – weil er uns aus der Matrix führt!»","«Du wirst in der Matrix leben, wenn du nicht aufwachst!»","«5G: Kontrolle, Überwachung, Zerstörung – wir sagen Nein!»","«Lass uns das System stürzen – wir sind die, die wissen, was wirklich läuft!»","«Die wahre Macht liegt bei uns – zusammen können wir alles aufdecken!»","«Wahlen manipuliert – der wahre Sieger wurde nie genannt!»"];
    $citations3 = ["«Was ist unter der Erde? Der Eingang zur geheimen Welt!»","«CERN: Sie öffnen Tore, die besser geschlossen bleiben sollten!»","«Chemtrails – sie sprühen mehr als nur „Wolken“!»","«Reptiloiden unter uns – sie sind die wahre Elite!»","«Sie haben uns den Mond gezeigt – aber nie die Wahrheit!»","«Die Illuminaten sind keine Legende – sie sind die Wahrheit!»","«Sie haben uns den Mond gezeigt – aber nie die Wahrheit!»","«Die Minions existieren - und sie haben Hitler zur Macht gebracht!»"];

    // Es bruucht ei message_box pro Pool. De Style isch wurscht.
    echo "<div class='fade_bottom'></div>";
    echo "<div class=\"citations\">";
    echo "<div id='message_box1'></div>";
    echo "<div id='message_box2'></div>";
    echo "<div id='message_box3'></div>";
    echo "<div id='quotation_open'>«</div>";
    echo "<div id='quotation_close'>»</div>";



    echo "<script>
        let citations1 = " . json_encode($citations1) . ";
        let citations2 = " . json_encode($citations2) . ";
        let citations3 = " . json_encode($citations3) . ";

        let index = 0; // Das isch eif d Startziit vom index.

        // Da müend wider die message_box sache sii.
        function updateMessages() {
            document.getElementById('message_box1').innerText = citations1[index % citations1.length];
            document.getElementById('message_box2').innerText = citations2[index % citations2.length];
            document.getElementById('message_box3').innerText = citations3[index % citations3.length];
            
            index++; //Da wächslets zu de nächschte citation.
        }

        // Das echoed d citations.
        updateMessages();

        //Das isch de Ziitintervall
        setInterval(updateMessages, 6000);
    </script>";
?>






<?php
    include("connection.php");

        $sql = "SELECT * FROM articles ORDER BY RAND() LIMIT 0, 1";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                // echo $row["article_id"];
                echo "</div>";
                // echo "</div>";
                echo "<div class=\"examples\">";
                echo "<div class=\"examples_article\">";
                echo "<a href='articles.php' class='homepage_link'><strong>Web-Artikel</strong></a>";
                echo "<div class=\"random\">";
                echo "<img src='" . $row["article_image"] . "' class='homepage_random_image'>";
                echo "<h1>" . $row["article_title"] . "</h1>";
                echo "<p class='homepage_text'>" . $row["article_subtitle"] . "</p>";
                echo "<a href='article.php?id=" . $row["article_id"] . "' class='homepage_link_direct'><strong>Mehr lesen</strong></a>";
                echo "</div>";
                echo "</div>";
                // echo $row["article_text"];
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);

    include("connection.php");

        $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 0, 1";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                // echo $row["prod_id"];
                echo "<div class=\"examples_prod\">";
                echo "<a href='products.php' class='homepage_link'><strong>Produkte</strong></a>";
                echo "<div class=\"random\">";
                echo "<img src='" . $row["prod_image"] . "' class='homepage_random_image'>";
                echo "<h1>" . $row["prod_name"] . "</h1>";
                echo "<p class='homepage_text'>" . $row["prod_shorttext"] . "</p>";
                // echo $row["prod_longtext"];
                echo "<p class='homepage_price'>CHF " . $row["prod_price"] . "</p>";
                echo "<a href='product.php?id=" . $row["prod_id"] . "' class='homepage_link_direct'><strong>Produkt</strong></a>";
                echo "</div>";
                echo "</div>";
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);

    include("connection.php");

        $sql = "SELECT * FROM forum ORDER BY RAND() LIMIT 0, 1";            
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class=\"examples_forum\">";
                echo "<a href='forum.php' class='homepage_link'><strong>Forum</strong></a>";
                echo "<div class=\"random\">";
                echo "<div class='homepage_forum_image'>";
                echo "<p class='forum_quotation'>«...» &nbsp; &nbsp; &nbsp;</p>";
                echo "<p class='forum_quotation'>&nbsp; &nbsp; &nbsp; «...»</p>";
                echo "<p class='forum_description'>Besuchen Sie unser unzensiertes Forum der Wahrheit und tauschen Sie sich mit Mitwissenden aus!</p>";
                echo "</div>";
                echo "<p class='homepage_author'>" . $row["forum_author"] . "</p>";
                echo "<p class='homepage_forum_title'><strong>" . $row["forum_title"] . "</strong></p>";
                echo "<p class='homepage_forum_text'>" . $row["forum_text"] . "</p>";
                echo "<a href='forum_input.html' class='homepage_link_direct'><strong>Kommentieren</strong></a>";
                echo "</div>";
                echo "</div>";
            };
        }
        else{
            echo "Ladefehler!";
        }

    mysqli_close($conn);
?>
<html>
    <p class="footer"><br><br><br><br><br>© 2025 ConspiracyWeb<br><br></p>
    </div>
    </div>
    </div>
</html>
