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
            $id = $_POST['id'];
            $date = $_POST['date'];
            $type = $_POST['type'];
            $expenseName = $_POST['expenseName'];
            $newamount = $_POST['newamount'];
            
            //Update statement
            $sql = " UPDATE Expenses SET `Amount` = $newamount WHERE `Admin_ID` = $id AND `Type_ID` = $type AND `Week_quarter_ID` = $date AND `Expense_name` = '$expenseName' ";
            
            //What to do if works or not
             if ($conn->query($sql) === TRUE) {
                echo "It has been entered";
                header('Location:editData.php');
            } else {
                echo "Error " . $conn->error;
            }

mysqli_close($conn);
?>