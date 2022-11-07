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
            $date= $_POST['date'];
            $expense = $_POST['expense'];
            $total = $_POST['total'];
            $dateID = $_POST['dateID'];


            //Sql staement 
            $sql = "SELECT * FROM Actuals 
            JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Actuals.Week_quarter_ID) 
            JOIN Quarters ON (Quarters.Quarter_ID = Week_in_quarters.Quarter_ID)
            WHERE Week_in_quarters.Day_due < '$date' AND Type_ID = '$expense' AND Admin_ID = '$id'
            ORDER BY Week_in_quarters.Day_due ASC";
            
            $result = $conn->query($sql); 


// One month into the quarter
if($result->num_rows == 0) {

    //Calculating Forecast amount for whole quarter
    $newtotal = $total * 3.25;
    //Insert Into statement
    $sql= "INSERT INTO `Year_Forecast`( `Amount`, `Admin_ID`, `Type_ID`, `Week_quarter_ID`) VALUES ('$newtotal' , '$id', '$expense' , '$dateID') ";

    //What to do if it is succesful or not
    if ($conn->query($sql) === TRUE) {
        echo "Your forecase for this section of the quarter has been created";
        header('Location:createForecast.php');
    } else {
        echo "Error " . $conn->error;
    }

//Two months into quarter
}else if ($result->num_rows == 1){

    //Need to get actual amount from month 1
    $sql_qry  = mysqli_query($conn,"SELECT Amount FROM Actuals 
    JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Actuals.Week_quarter_ID) 
    JOIN Quarters ON (Quarters.Quarter_ID = Week_in_quarters.Quarter_ID)
    WHERE Week_in_quarters.Day_due = '$date' AND Type_ID = '$expense' AND Admin_ID = '$id'
    ORDER BY Week_in_quarters.Day_due ASC");

    while($row = mysqli_fetch_array($sql_qry))
    {
        $amount= $row['Amount'];
        $newtotal = $amount + ($total *1.25);
    }

    //Sql Insert Amount
    $sql= "INSERT INTO `Year_Forecast`( `Amount`, `Admin_ID`, `Type_ID`, `Week_quarter_ID`) VALUES ('$newtotal' , '$id', '$expense' , '$dateID') ";

    //What to do if it is succesful or not
    if ($conn->query($sql) === TRUE) {
        echo "Your forecase for this section of the quarter has been created";
        header('Location:createForecast.php');
    } else {
        echo "Error " . $conn->error;
    }

//Three months in
}else if($result->num_rows == 2){

    //Need to get actual amount from month 3
    $sql_qry  = mysqli_query($conn,"SELECT Amount FROM Actuals 
    JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Actuals.Week_quarter_ID) 
    JOIN Quarters ON (Quarters.Quarter_ID = Week_in_quarters.Quarter_ID)
    WHERE Week_in_quarters.Day_due = '$date' AND Type_ID = '$expense' AND Admin_ID = '$id'
    ORDER BY Week_in_quarters.Day_due ASC");

    while($row = mysqli_fetch_array($sql_qry))
    {
        $amount= $row['Amount'];
        $newtotal = $amount + ($total *.25);
    }

    //Insert
    $sql= "INSERT INTO `Year_Forecast`( `Amount`, `Admin_ID`, `Type_ID`, `Week_quarter_ID`) VALUES ('$newtotal' , '$id', '$expense' , '$dateID') ";

    //What to do if it is succesful or not
    if ($conn->query($sql) === TRUE) {
        echo "Your forecast for this section of the quarter has been created";
        header('Location:createForecast.php');
    } else {
        echo "Error " . $conn->error;
    }

//Extra week 
}else if($result->num_rows == 3){
    
    //Getting Actual because this will be final month forecast
    $sql_qry  = "SELECT Amount FROM Actuals 
    JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Actuals.Week_quarter_ID) 
    JOIN Quarters ON (Quarters.Quarter_ID = Week_in_quarters.Quarter_ID)
    WHERE Week_in_quarters.Day_due = '$date' AND Type_ID = '$expense' AND Admin_ID = '$id'
    ORDER BY Week_in_quarters.Day_due ASC";


    //Getting sum
    $amount = $conn->query($sql_qry);
    $record = $amount->fetch_array();
    $total1 = $record['Amount'];

    //New total
    $newtotal = $total1;

    //Insert
    $sql= "INSERT INTO `Year_Forecast`( `Amount`, `Admin_ID`, `Type_ID`, `Week_quarter_ID`) VALUES ('$newtotal' , '$id', '$expense' , '$dateID') ";

    if ($conn->query($sql) === TRUE) {
        echo "Your forecase for this section of the quarter has been created";
        header('Location:createForecast.php');
    } else {
        echo "Error " . $conn->error;
    }

// If doens't wok
}else{
    echo "error";
}



mysqli_close($conn);
?>

<html>
<body>

</body>
</html>