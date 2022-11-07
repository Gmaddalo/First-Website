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
            $amount = $_POST['amount'];
            $id = $_POST['id'];
            $date = $_POST['date'];
            $type=$_POST['type'];

            //Insert Statement
            $sql = "INSERT INTO Budget (Amount, Admin_ID, Type_ID, Week_quarter_ID) VALUES ('$amount', '$id', '$type', '$date')";
            
            //What do do if statement works or does not
             if ($conn->query($sql) === TRUE) {
                echo "It has been entered";
                header('Location:inputBudget.php');
            } else {
                echo "Error " . $conn->error;
            }

mysqli_close($conn);

?>