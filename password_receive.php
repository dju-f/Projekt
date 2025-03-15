<?php 
        $password = $_POST["password"];
        
        if($password =="X @ A-Xii"){
            header("Location: admin_input.html");
        }
        else{
            header("Location: admin_password.html");
        }
            
?>