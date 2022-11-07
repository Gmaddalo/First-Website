<?php
session_start();
    // echo $_SESSION["loggedin"];
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
            $expense = $_POST['expense'];
            $id = $_POST['id'];
            $quarterid = $_POST['quarterDates'];
            $compare = $_POST['compare'];
            $viewer = $_SESSION['Viewer'];
            
         
?>
<html>
<title> Compare Graphs </title>
<head>
<!-- Including Everything -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=NTR&display=swap" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<style>
/* Styling Header */
.header {
  overflow: hidden;
  background-color: #FFFFFF;
  padding: 20px 10px;
  font-family: 'NTR', sans-serif;
}
/* Style  header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 20px;
  line-height: 25px;
  border-radius: 4px;
  font-family: 'NTR', sans-serif;
  text-transform: uppercase;
}
/* Change the color of links on hover*/
.header a:hover {
  color: #0a7997;
}
/* Float the link section to the left */
.header-left {
  float: left;
  padding: 19px;
}
/* Float the link section to the right */
.header-right {
  float: right;
  padding: 19px;
}

/* Creating First Section for the header */
.section {
	backgroud-color: white;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    margin-bottom: 5px;
    border-radius: 10px;
   	font-family: 'NTR', sans-serif;
}
/* Creating Second Section for Area Under Header*/
.section1 {
	background-color:#0D274D;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    margin-bottom: 10px;
   	font-family: 'NTR', sans-serif;
}
/* Styling the Link in Section1 */
.section1 a.link{
	color: white;
}
/* Styling the link when hovered */
.section1 a:hover{
  color: #0a7997;
}
/* Float the text in section1 */
.section1 h1{
	text-transform: uppercase;
    text-align: center;
    color: #FFFFFF;
    font-size: 20px;
  	line-height: 15px;
  	border-radius: 4px;
    padding: 25px;
}
/* Creating a new section for the carousel*/
.section2 {
	background-color:white;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    margin-bottom: 20px;
   	font-family: 'NTR', sans-serif;
}
/* Styling the body of section2*/
.section2 body {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 30px 10px;
  font-family: 'NTR', sans-serif;
  transition: background .4s ease-in;
  background-color: black;

  &.blue {
  background-color: #428aa6;
}
}

/* Footer Formating*/
.footer {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #0D274D;
  color: white;
  text-align: center;
  height: 6.7rem; 
}
/* Footer text moved to left*/
.footer-text-left {
  padding-left:40px;
  margin-top:10px;
  float:left;
  word-spacing:20px;   
}
/* Icons in footer*/
.icon-style {
  height:50px;
  margin-left:50px;
  margin-bottom:19px;
  margin-top: 20px;
}
/* Page */
#page-container {
  position: relative;
  min-height: 100vh;
}
/* For footer */
#content-wrap {
  padding-bottom: 2.5rem;   
}
/* When the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 550px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-left {
    float: none;
  }
  .header-right {
    float: none;
  }
}
/* heading one */
h1{
    font-family: 'NTR', sans-serif;
    font-size: 60px;
}
/* Links for inputs */
.links a{
    font-family: 'NTR', sans-serif;
    font-size: 30px;
    color: black;
    text-decoration: none;  
}
.links a:hover{
     color: #0a7997;
     text-decoration: none;
}
/* Main image dimensions */
#inputimage{
    width: 400px;
    height: 400px;
}
/* button */
.btn {
  background-color: #0a7997;
  border: none;
  color: white;
  padding: 1px 25px;
  text-align: center;
  font-size: 2px;
  margin: 1px 1px;
  opacity: 0.6;
  transition: 0.3s;
}
.btn:hover {opacity: 1}
/* Link in button */
.links2 a{
    font-family: 'NTR', sans-serif;
    font-size: 30px;
    color: white;
    text-decoration: none;
}
.img1 img{
    width: 300px;
    height: 300px;
    border-radius: 25px 45px 25px 25px;

}
</style>



<div id = "page-container">
    <div id = "content-wrap">
        <!-- Header -->
        <div class = "section">
            <div class="header">
                <a href="https://www.cisco.com/" ><img src="https://1000logos.net/wp-content/uploads/2016/11/Cisco-logo.png" alt="Cisco Logo" width = "150" height ="75"></a>
                    <div class="header-right">
                         <?php 
                            if($viewer == true){ ?>
                                <a href="ViewerLoggedIn.php">Home Page </a> <?php
                            }else{ ?>
                                <a href="LoggedIn.php">Home Page </a> <?php
                            } ?>
                        <a href="profile.php">Account Settings</a>
                        <a href="logout.php">Sign Out</a>
                    </div>
            </div>
        </div>

        <!-- Dark Blue Area -->
        <div class = "section1">
            <h1 align = "center" > </h1>
        </div>
<?php  

// If choosing to compare forecasts, actuals, and budgets
if($compare == '1'){

    //Headcount Expense
    if($expense == "Headcount"){
        //Select Statment
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Actuals.Amount, Budget.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Budget On (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Actuals.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Year_Forecast.Type_ID = '2' AND Actuals.Type_ID = '2' AND Budget.Type_ID = '2' AND Week_in_quarters.Quarter_ID = '$quarterid'  "))
            {
                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><</tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }
                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budget Amount');
		
        //How chart looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2]),parseInt(my_2d[i][3])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Headcount Forecasts, Actuals, and Budgets </h1>
<!-- chart -->
<div id="curve_chart"></div>

<?php
    //Discretionary exepense
    }else if($expense == "Discretionary"){

        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Actuals.Amount, Budget.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Budget On (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Actuals.Type_ID)
        WHERE Year_Forecast.Admin_ID = '6' AND Year_Forecast.Type_ID = '1' AND Actuals.Type_ID = '1' AND Budget.Type_ID = '1' AND Week_in_quarters.Quarter_ID = '4' "))
        {

            //echo "No of records : ".$stmt->num_rows."<br>";
            $php_data_array = Array(); // create PHP array
            //echo "<table>
            //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
            while ($row = $stmt->fetch_row()) {
                //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><</tr>";
                $php_data_array[] = $row; // Adding to array
            }
                //echo "</table>";
            }else{
                //echo $connection->error;
            }

            //echo json_encode($php_data_array);

            echo "<script>
                    var my_2d = ".json_encode($php_data_array)."
            </script>";
?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budget Amount');
		
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2]),parseInt(my_2d[i][3])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
</script>

<!-- Title -->
<h1 align ="center">Comparing Discretionary Forecasts, Actuals, and Budgets </h1>
<!-- Chart -->
<div id="curve_chart"></div>

<?php

    //Controllable
    }else if($expense == "Controllable"){
        //Sql select query 
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Actuals.Amount, Budget.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Budget On (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Actuals.Type_ID)
        WHERE Year_Forecast.Admin_ID = '6' AND Year_Forecast.Type_ID = '3' AND Actuals.Type_ID = '3' AND Budget.Type_ID = '3' AND Week_in_quarters.Quarter_ID = '4' "))
            {
                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><</tr>";
                    //$php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }
                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
  
?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budget Amount');
		
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2]),parseInt(my_2d[i][3])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align = "center"> Comparing Controllable Forecasts, Actuals, and Budgets </h1>
<!-- Chart -->
<div id="curve_chart"></div>

<?php
    //Outsource
    }else if($expense == "Outsource"){

        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Actuals.Amount, Budget.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Budget On (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Actuals.Type_ID)
        WHERE Year_Forecast.Admin_ID = '6' AND Year_Forecast.Type_ID = '4' AND Actuals.Type_ID = '4' AND Budget.Type_ID = '4' AND Week_in_quarters.Quarter_ID = '4'  "))
            {
                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><</tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }


                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budget Amount');
		
        //How the chart looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2]),parseInt(my_2d[i][3])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Outsource Forecasts, Actuals, and Budgets </h1>
<!-- Chart -->
<div id="curve_chart"></div>


<?php

    //Total
    }else if($expense == 'Total'){

        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, SUM(Year_Forecast.Amount) AS Famount, SUM(Actuals.Amount) AS Aamount, SUM(Budget.Amount) AS Bamount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Budget On (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id'  AND Week_in_quarters.Quarter_ID = '$quarterid' GROUP BY Week_in_quarters.Day_due  "))     
            {

                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><</tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }


                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
  
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budget Amount');
		
        //How the chart looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2]),parseInt(my_2d[i][3])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align = "center"> Comparing Total Expenses Forecasts, Actuals, and Budgets </h1>
<!-- Chart -->
<div id="curve_chart"></div>

<?php
    //Else
    }else{
        echo "Error";
    }

//Comparing forecasts and actuals
}else if($compare == '2'){
    //Headcount Expense
    if($expense == "Headcount"){
        //Sql select
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Actuals.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Year_Forecast.Type_ID = '2' AND Actuals.Type_ID = '2' AND Week_in_quarters.Quarter_ID = '$quarterid' "))
            {

                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }
                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";

?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		
		//How it looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }

    </script>

<!-- Title -->
<h1 align ="center"> Comparing Headcount Forecasts and Actuals </h1>
<!-- Chart -->
<div id="curve_chart"></div>

<?php
    //Discretionary
    }else if($expense == "Discretionary"){
        //sql select
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Actuals.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Year_Forecast.Type_ID = '1' AND Actuals.Type_ID = '1' AND Week_in_quarters.Quarter_ID = '$quarterid'"))
            {

                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }

                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		
		
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
        }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Headcount Forecasts and Actuals </h1>
<!-- Chart -->
<div id="curve_chart"></div>


<?php

    //Controllable
    }else if($expense == "Controllable"){
        //Sql statement
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Actuals.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Year_Forecast.Type_ID = '3' AND Actuals.Type_ID = '3' AND Week_in_quarters.Quarter_ID = '$quarterid' "))
            {
                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }

                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		
		//How chart looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Controllable Forecasts and Actuals </h1>
<!-- Chart -->
<div id="curve_chart"></div>


<?php
    //Outsource
    }else if($expense == "Outsource"){
        //SQL statement
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Actuals.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Year_Forecast.Type_ID = '4' AND Actuals.Type_ID = '4' AND Week_in_quarters.Quarter_ID = '$quarterid' "))
            {
                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }

            //echo json_encode($php_data_array);

            echo "<script>
                    var my_2d = ".json_encode($php_data_array)."
            </script>";
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		
		//How chart looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Outsource Forecasts and Actuals </h1>
<!-- Chart -->
<div id="curve_chart"></div>

<?php
    //Total
    }else if($expense = 'Total'){
        //Sql statement
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, SUM(Year_Forecast.Amount) AS Famount, SUM(Actuals.Amount) AS Aamount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Actuals ON (Actuals.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Week_in_quarters.Quarter_ID = '$quarterid' GROUP BY Week_in_quarters.Day_due "))
            {
                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Actuals_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    //$php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }

                //echo json_encode($php_data_array);
                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Actuals Amount');
		
		
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Total Amount for Forecasts and Actuals </h1>
<!-- chart -->
<div id="curve_chart"></div>

<?php
  
    }else{
        echo "Error";
    }
//Comparing Forecasts and Budgets
}else if ($compare == '3'){
    //Headcount
    if($expense == "Headcount"){
        //Select staement
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Budget.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Year_Forecast.Type_ID = '2' AND Budget.Type_ID = '2' AND Week_in_quarters.Quarter_ID = '$quarterid' ")) 
            {

                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }

                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";

?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Budgets Amount');
		
		// How the chart looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Headcount Forecasts and Budgets </h1>
<!-- chart -->
<div id="curve_chart"></div>


<?php
    //Discretionary
    }else if($expense == "Discretionary"){
        //Select statement
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Budget.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Year_Forecast.Type_ID = '1' AND Budget.Type_ID = '1' AND Week_in_quarters.Quarter_ID = '$quarterid' ")) 
            {

                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    //$php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }

                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";

?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Budgets Amount');
		
		
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- title -->
<h1 align ="center"> Comparing Discretionary Forecasts and Budgets </h1>
<!-- Chart -->
<div id="curve_chart"></div>


<?php
    //Controllable
    }else if($expense == "Controllable"){
        //Sql statement
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Budget.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Year_Forecast.Type_ID = '3' AND Budget.Type_ID = '3' AND Week_in_quarters.Quarter_ID = '$quarterid' ")) 
            {

                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                // echo "<table>
                // <tr> <th>Day</th><th>Forecast_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }
                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";

?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Budgets Amount');
		
		
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Controllable Forecasts and Budgets </h1>
<!-- Chart -->
<div id="curve_chart"></div>


<?php
    //Outsource
    }else if($expense == "Outsource"){
        //SQl statment
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Year_Forecast.Amount, Budget.Amount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Year_Forecast.Type_ID = '4' AND Budget.Type_ID = '4' AND Week_in_quarters.Quarter_ID = '$quarterid' ")) 
            {

                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Forecast_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    echo "</table>";
                }else{
                    echo $connection->error;
                }


                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Budgets Amount');
		
		//How chart looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: 'plus2net.com Sale Profit',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Outsource Forecasts and Budgets </h1>
<!-- Chart --> 
<div id="curve_chart"></div>


<?php


    //Total
    }else if($expense == "Total"){
        //Select Statement
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, SUM(Year_Forecast.Amount) AS Famount, SUM(Budget.Amount) AS Bamount FROM Year_Forecast 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Year_Forecast.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Year_Forecast.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Year_Forecast.Type_ID)
        WHERE Year_Forecast.Admin_ID = '$id' AND Week_in_quarters.Quarter_ID = '$quarterid' GROUP BY Week_in_quarters.Day_due ")) 
            {

            //echo "No of records : ".$stmt->num_rows."<br>";
            $php_data_array = Array(); // create PHP array
            //echo "<table>
            //<tr> <th>Day</th><th>Forecast_Amount</th><th>Budget_Amount</th></tr>";
            while ($row = $stmt->fetch_row()) {
                //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                $php_data_array[] = $row; // Adding to array
            }
                //echo "</table>";
            }else{
                echo $connection->error;
            }


            //echo json_encode($php_data_array);

            echo "<script>
                    var my_2d = ".json_encode($php_data_array)."
            </script>";

?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Forecast Amount');
		data.addColumn('number', 'Budgets Amount');
		
		//How it looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!--Title -->
<h1 align = "center"> Comparing Total Amount for Forecasts and Actuals </h1>
<!--chart -->
<div id="curve_chart"></div>

<?php
    //else
    }else{
        echo "Error";
    }
//Compare actuals and budgets
}else if ($compare == "4"){
    //Headcount
    if($expense == "Headcount"){
        //Select statement
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Actuals.Amount, Budget.Amount FROM Actuals 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Actuals.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Actuals.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Actuals.Type_ID)
        WHERE Actuals.Admin_ID = '$id' AND Actuals.Type_ID = '2' AND Budget.Type_ID = '2' AND Week_in_quarters.Quarter_ID = '$quarterid' ")) 
            {
                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }


                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budgets Amount');
		
		//how it looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
            };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>
<!-- Title -->
<h1 align ="center"> Comapring Headcount for budget and actuals </h1>
<!-- Chart -->
<div id="curve_chart"></div>


<?php
    //Discretionary
    }else if($expense == "Discretionary"){
        //Sql select
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Actuals.Amount, Budget.Amount FROM Actuals 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Actuals.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Actuals.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Actuals.Type_ID)
        WHERE Actuals.Admin_ID = '$id' AND Actuals.Type_ID = '1' AND Budget.Type_ID = '1' AND Week_in_quarters.Quarter_ID = '$quarterid' ")) 
            {
                // echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                // echo "<table>
                // <tr> <th>Day</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }


                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budgets Amount');
		
		
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
            };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Discretionary Actuals and Budgets </h1>
<!-- Chart -->
<div id="curve_chart"></div>


<?php
    //Controllable
    }else if($expense == "Controllable"){
    //select
    if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Actuals.Amount, Budget.Amount FROM Actuals 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Actuals.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Actuals.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Actuals.Type_ID)
        WHERE Actuals.Admin_ID = '$id' AND Actuals.Type_ID = '3' AND Budget.Type_ID = '3' AND Week_in_quarters.Quarter_ID = '$quarterid'")) 
        {
            //echo "No of records : ".$stmt->num_rows."<br>";
            $php_data_array = Array(); // create PHP array
            // echo "<table>
            // <tr> <th>Day</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
            while ($row = $stmt->fetch_row()) {
                //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                $php_data_array[] = $row; // Adding to array
            }
                //echo "</table>";
            }else{
                echo $connection->error;
            }


            //echo json_encode($php_data_array);

            echo "<script>
                    var my_2d = ".json_encode($php_data_array)."
            </script>";

?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budgets Amount');
		
		//How it looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
            };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
	
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Controllable Actuals and Budgets </h1>
<!--Chart -->
<div id="curve_chart"></div>


<?php
    //Outsource
    }else if($expense == "Outsource"){
        //Select statement
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, Actuals.Amount, Budget.Amount FROM Actuals 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Actuals.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Actuals.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Actuals.Type_ID)
        WHERE Actuals.Admin_ID = '$id' AND Actuals.Type_ID = '4' AND Budget.Type_ID = '4' AND Week_in_quarters.Quarter_ID = '$quarterid' ")) 
            {
                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                // echo "<table>
                // <tr> <th>Day</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }

                //echo json_encode($php_data_array);

                echo "<script>
                        var my_2d = ".json_encode($php_data_array)."
                </script>";
?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budgets Amount');
		
		
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Outsource Actuals and Budgets </h1>
<!-- Title -->
<div id="curve_chart"></div>


<?php
    //Total
    }else if($expense == "Total"){
        //Select
        if($stmt = $conn->query("SELECT Week_in_quarters.Day_due, SUM(Actuals.Amount) AS Aamount, SUM(Budget.Amount) AS Bamount FROM Actuals 
        JOIN Week_in_quarters ON (Week_in_quarters.Week_quarter_ID = Actuals.Week_quarter_ID) 
        JOIN Budget ON (Budget.Week_quarter_ID = Actuals.Week_Quarter_ID)
        JOIN Expense_Type ON(Expense_Type.Type_ID = Actuals.Type_ID)
        WHERE Actuals.Admin_ID = '$id'  AND Week_in_quarters.Quarter_ID = '$quarterid' GROUP BY Week_in_quarters.Day_due ")) 
            {
                //echo "No of records : ".$stmt->num_rows."<br>";
                $php_data_array = Array(); // create PHP array
                //echo "<table>
                //<tr> <th>Day</th><th>Actuals_Amount</th><th>Budget_Amount</th></tr>";
                while ($row = $stmt->fetch_row()) {
                    //echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                    $php_data_array[] = $row; // Adding to array
                }
                    //echo "</table>";
                }else{
                    echo $connection->error;
                }


            //echo json_encode($php_data_array);

            echo "<script>
                    var my_2d = ".json_encode($php_data_array)."
            </script>";

?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Day_due');
        data.addColumn('number', 'Actuals Amount');
		data.addColumn('number', 'Budgets Amount');
		
		//how chart looks
        for(i = 0; i < my_2d.length; i++)
        data.addRow([my_2d[i][0], parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);
        var options = {
            title: '',
            curveType: 'function',
            width: 1500,
            height: 1000,
            legend: { position: 'middle' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
       }
    </script>

<!-- Title -->
<h1 align ="center"> Comparing Total Expenses for Actuals and Budgets </h1>
<!-- Chart -->
<div id="curve_chart"></div>


<?php
    //else
    }else{
        echo "Error";
    }
//else
}else{
    echo "error";
}
?>


                <!-- Button -->
                <div align = "center">
                    <div class = "btn">
                        <div class = "links2">
                            <a href = "chooseCompareGraph.php"> Back </a>
                        </div>
                    </div></br> </br></br></br>
                </div>  

        </div>
            <div class="footer">
                <div class = "footer-text-left">
                    <div class = "icon-style">
                        <a href = "https://twitter.com/Cisco/" ><i class="fab fa-twitter" style="font-size:35px;color:white;"></i></a>
                        <a href = "https://www.facebook.com/Cisco/" ><i i class="fab fa-facebook-square" style="font-size:35px;color:white;"></i></a>
                        <a href = "https://www.instagram.com/cisco/"  ><i class="fab fa-instagram" style="font-size:35px;color:white;"></i></a>
                        <a href = "https://www.linkedin.com/company/cisco" ><i class="fab fa-linkedin" style="font-size:35px;color:white;"></i></a>
                        <a href = "https://www.youtube.com/user/cisco"  ><i class="fab fa-youtube" style="font-size:35px;color:white;"></i></a>
                    </div>
                </div>
            </div>
    </div>



</body>
</html>
