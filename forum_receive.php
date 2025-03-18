<?php
// Dieses Dokument empfängt die Inputs des Kommentarformulars und lädt sie in die Datenbank hoch.
        // Hier werden die emfangenen Inputs aus dem $_POST-Array ausgelesen und in normale Variabeln umgewandelt.
    $author = $_POST["author"];
    $title = $_POST["title"];
    $text = $_POST["text"];
    // Falls kein Autor angegeben wurde, wird hier "Anonym" eingesetzt.
    if ($author == "") {
        $author = "Anonym";
    }
    // Falls kein Titel angegeben wurde, wird hier "[Kein Titel]" eingesetzt.
    if ($title == "") {
        $title = "[Kein Titel]";
    }
    // Wenn der Kommentar kein Text enthällt, soll er auch nicht gespeichert werden.
    if ($text !== "") {
        // Zuerst wird die Verbindung zur Datenbank hergestellt.
        include("connection.php");
        // Etwaige Fehler werden erkannt und stoppen die Aktion.
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        // Hier werden die Inputs für den Upload vorbereitet.
        $sql = "INSERT INTO forum (forum_author, forum_title, forum_text)
        VALUES ('$author', '$title', '$text')";
        // Hier werden die Inputs hochgeladen.
        mysqli_query($conn, $sql);
        // Hier wird die Verbindung zur Datenbank geschlossen.
        mysqli_close($conn); 
    }
    // Sobald die Inputs hochgeladen sind wird der Benutzer sofort wieder aufs Forum zurückgeleitet.
    header("Location: forum.php");
    die();
?>