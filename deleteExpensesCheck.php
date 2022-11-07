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
            
            //Variable
            $email = $_SESSION['email'];
            $id = $_POST['id'];
            $date = $_POST['date'];
            $type = $_POST['type'];
            $expenseName = $_POST['expenseName'];
  
            
            //Delete Statement
            $sql = " DELETE FROM Expenses WHERE `Admin_ID` = $id AND `Type_ID` = $type AND `Week_quarter_ID` = $date AND `Expense_name` = '$expenseName' ";
            
            //What to do if it works or if it doesn't
            if ($conn->query($sql) === TRUE) {
                echo "It has been entered";
                header('Location:editData.php');
            } else {
                echo "Error " . $conn->error;
            }

mysqli_close($conn);
?>