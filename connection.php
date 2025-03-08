<?php
    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "conspiracy_web";
    $conn = "";

    try{$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname)}
    catch(mysqli_sql_exeption){echo "Verbindung zum Server fehlgeschlagen!"}
?>