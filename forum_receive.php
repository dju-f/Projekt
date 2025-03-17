<?php 
        $author = $_POST["author"];
        $title = $_POST["title"];
        $text = $_POST["text"];
        
        if ($author == "" and $title != "" and $text != "") {
            $author = "Anonym";
        }

        include("connection.php");
        
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            $sql = "INSERT INTO forum (forum_author, forum_title, forum_text)
            VALUES ('$author', '$title', '$text')";

            mysqli_query($conn, $sql);
                
        mysqli_close($conn); 


    header("Location: forum.php");
    die();
?>