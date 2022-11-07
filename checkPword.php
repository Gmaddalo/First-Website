<?php
session_start();
    // Page Constraints (checking is logged in)
    if(!isset($_SESSION['loggedin'])){
            header("Location:login.php");
        }
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Cisco";
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            //Email variable
            $email = $_SESSION['email'];
            //New password Variable
            $npword = $_POST["new_password"];
            //Hashed Password Variable
            $new_password = password_hash($npword, PASSWORD_DEFAULT);
            

            // Update Password Sql Statement
            $sql = "UPDATE Viewer SET Password = '$new_password' WHERE Email = '$email'";
            //Sending user to a new page when password is updated if they are a viewer
            if($_SESSION["Viewer"]== true) {
                $result = $conn->query($sql);
                $_SESSION["pword"] = $new_password;
                header("Location: ViewerLoggedIn.php");
            // sending user to a new page when password is updated and they are an admin
            }else{
                $sql = mysqli_query($conn, "UPDATE Admin SET Password = '$new_password' WHERE Email = '$email'");
                if ($_SESSION["Viewer"]== false) {
                    $result = $conn->query($sql);
                    $_SESSION["pword"] = $new_password;
                    header("Location: LoggedIn.php");
                } 
                }
?>
