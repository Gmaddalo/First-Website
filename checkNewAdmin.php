<?php
session_start();
    $viewer = $_SESSION['Viewer'];
    //Constaints to login
    if(!isset($_SESSION['loggedin'])){
        header("Location:login.php");
    }else if ($viewer == true){
        header("Location:ViewerLoggedIn.php");
    }
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Cisco";
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            //Variables
            $email = $_SESSION['email'];
            $Fname= $_POST['Fname'];
            $Lname= $_POST['Lname'];
            $Password= $_POST['Password'];
            //Hashed Password
            $npword = password_hash($Password, PASSWORD_DEFAULT);
            $NewEmail = $_POST['Email'];

            //Insert Statement
            $sql = " INSERT INTO Admin (Fname, Lname, Email, Password) VALUES ('$Fname', '$Lname', '$NewEmail', '$npword')";

            // What to do if it works or does not
            if ($conn->query($sql) === TRUE) {
                echo "It has been entered";
                header("Location:LoggedIn.php");
            }else {
                echo "Error " . $conn->error;
            }
mysqli_close($conn);
?>           