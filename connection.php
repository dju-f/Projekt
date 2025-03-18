<?php
// Diese Dokument stellt die Verbindung zur Datenbank her, wann immer es durch die Include-Funktion aufgerufen wird.
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "conspiracy_web";
    $conn = "";

    try {
        $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
    } 
    // Hier wird eine verständliche Fehlermeldung angezeigt, falls etwas schieflaufen würde.
    catch (mysqli_sql_exception $e) {
        echo "Verbindung zum Server fehlgeschlagen!" . $e->getMessage();
        exit();
    }
?>