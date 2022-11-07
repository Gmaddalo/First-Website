<?php
session_start();
    //Viewing Constraints
    if(!isset($_SESSION['loggedin']))
        {
            header("Location:login.php");
        }
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Cisco";
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            //Variables
            $email = $_SESSION['email'];
            $date = $_POST['date'];
            $id = $_POST['id'];
            $type=  $_POST['type'];

            //Delete Statement
            $sql = " DELETE FROM Year_Forecast WHERE `Admin_ID` = $id AND `Type_ID` = $type AND `Week_quarter_ID` = $date";
            
            if ($conn->query($sql) === TRUE) {
                echo "It has been entered";
                header('Location:editData.php');
            } else {
                echo "Error " . $conn->error;
            }

    mysqli_close($conn);

?>