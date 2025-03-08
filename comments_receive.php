<html>
    <body>
        <?php 
            $author = $_POST["author"];
            $title = $_POST["title"];
            $text = $_POST["text"];
            
            include("connection.php");
            
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            $sql = "INSERT INTO user (forum_author, forum_title, forum_text)
              VALUES ('$author', '$title', '$text')";

            try {
                mysqli_query($conn, $sql);
            } 
            catch (mysqli_sql_exception $e) {
                echo "Verbindung zum Server fehlgeschlagen!" . $e->getMessage();
            }

            mysqli_close($conn); 
        ?>
    
    </body>
</html>