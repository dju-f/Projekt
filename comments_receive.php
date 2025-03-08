<html>
    <body>
        <?php 
            try{
                $author = $_POST["author"];
                $title = $_POST["title"];
                $text = $_POST["text"];
                
                if ($author == "" and $title != "" and $text != "") {
                    $author = "Anonym";
                }

                elseif ($author != ""){

                    include("connection.php");
                    
                        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                        $sql = "INSERT INTO forum (forum_author, forum_title, forum_text)
                        VALUES ('$author', '$title', '$text')";

                        try {
                            mysqli_query($conn, $sql);
                        } 
                        catch (mysqli_sql_exception $e) {
                            echo "Verbindung zum Server fehlgeschlagen!" . $e->getMessage();
                        }

                    mysqli_close($conn);
                } 

                else{};
            }
            finally{
                include("connection.php");

                    $sql = "SELECT * FROM forum";            
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)){
                        echo $row["forum_author"];
                        echo $row["forum_title"];
                        echo $row["forum_text"];
                        };
                    }
                    else{
                        echo "Ladefehler!";
                    }

                mysqli_close($conn);
            };
        ?>
    
    </body>
</html>