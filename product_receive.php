<?php 
    $user = $_POST["user"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $cnumber = $_POST["cnumber"];
    $cvv = $_POST["cvv"];
    $expirydate = $_POST["expirydate"];
    
    include("connection.php");
    
      mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

      $sql = "INSERT INTO user (user_username, user_email, bank_cardholder, bank_cardnumber, bank_cvv, bank_expdate)
        VALUES ('$user', '$email', '$name', '$cnumber', '$cvv', '$expirydate')";

          mysqli_query($conn, $sql);

    mysqli_close($conn); 
    // echo $GLOBALS["prod_link"];
    header("Location: " . $GLOBALS["prod_link"]);
    die();
?>