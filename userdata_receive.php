<html>
    <body>
        <?php 
            $user = $_POST["user"];
            $email = $_POST["email"];
            $name = $_POST["fname"];
            $cnumber = $_POST["cnumber"];
            $cvv = $_POST["cvv"];
            $expirydate = $_POST["expirydate"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Conspiracy_web";
            
            include("connection.php");
            
            $sql = "INSERT INTO user (user_username, user_email, bank_cardholder, bank_cardnumber, bank_cvv, bank_expdate)
              VALUES ('$user', '$email', '$name', '$cnumber', '$cvv', '$expirydate');
            
            try{
              mysqli_query($conn, $sql);
            }
            catch(mysqli_sql_exception){
              echo "Verbindung zum Server fehlgeschlagen!";
            }

            mysqli_close($conn); 
        ?>
    
    </body>
</html>
