<?php
    function userRegistartion()
    {
        if(isset($_POST['create'])){
            // Assuming you have a database connection object $con
            // Make sure to replace 'your_table_name' with the actual table name
            $query = "INSERT INTO users (username, firstname, lastname, email, phonenumber, password) VALUES (?, ?, ?, ?, ?, ?)";
            $stmtinsert = $con->prepare($query);
    
            $username = $_POST['username'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['password'];
    
            $result = $stmtinsert->execute([$username, $firstname, $lastname, $email, $phonenumber, $password]);
    
            if($result){
                echo 'Data successfully saved.';
                // Use single quotes in the console.log argument
                echo '<script>';
                echo 'console.log("PHP: Data received - ' . $firstname . ' ' . $lastname . '");';
                echo '</script>';
            } else {
                echo 'There was an error.';
            }
        }
    }

   function register()
   {
    
   }
?>