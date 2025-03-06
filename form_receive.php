<html>
    <body>
    Sie sind angemeldet!
        <?php 
            $user = $_POST["user"];
            $email = $_POST["email"];
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $cnumber = $_POST["cnumber"];
            $cvv = $_POST["cvv"];
            $expirydate = $_POST["expirydate"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Conspiracy_web";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "INSERT INTO User (User_Username, User_Email)
            VALUES ('$user', '$email')";
            
            if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $get = $conn->query("SELECT User_Username FROM User;");

            // Check if the query returned any rows
            if ($get->num_rows > 0) {
                // Output data for each row
                while($row = $get->fetch_assoc()) {
                    echo "Username: " . $row["User_Username"] . "<br>";
                }
            } else {
                echo "No users found.";
            }

            $conn->close(); 
        ?>
    
    </body>
</html>
