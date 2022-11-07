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
            $date = $_POST['date'];
            $due = $_POST['due'];

            //Insert Statement
            $sql = "INSERT INTO Week_in_quarters (Quarter_ID, Day_due) VALUES ('$date', '$due')";

            //What to do if the statement is successful or not successful 
            if ($conn->query($sql) === TRUE) {
                echo "It has been entered";
                header('Location:inputWeeks.php');
            } else {
                echo "Error " . $conn->error;
            }

mysqli_close($conn);

?>