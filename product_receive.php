<?php
// Dieses Dokument empfängt die Inputs des Bankdatenformulars und lädt sie in die Datenbank hoch.
    // Hier werden die emfangenen Inputs aus dem $_POST-Array ausgelesen und in normale Variabeln umgewandelt.
    $user = $_POST["user"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $cnumber = $_POST["cnumber"];
    $cvv = $_POST["cvv"];
    $expirydate = $_POST["expirydate"];
    $prod_link = $_POST["prod_link"];
    // Zuerst wird die Verbindung zur Datenbank hergestellt.
    include("connection.php");
      // Etwaige Fehler werden erkannt und stoppen die Aktion.
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      // Hier werden die Inputs für den Upload vorbereitet.
      $sql = "INSERT INTO user (user_username, user_email, bank_cardholder, bank_cardnumber, bank_cvv, bank_expdate)
      VALUES ('$user', '$email', '$name', '$cnumber', '$cvv', '$expirydate')";
      // Hier werden die Inputs hochgeladen.
      mysqli_query($conn, $sql);
    // Hier wird die Verbindung zur Datenbank geschlossen.
    mysqli_close($conn);
    // Sobald die Inputs hochgeladen sind wird der Benutzer sofort wieder aufs Forum zurückgeleitet.
    header("Location: $prod_link");
    die();
?>