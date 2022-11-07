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
            
            //Varibles
            $email = $_SESSION['email'];
            $id = $_POST['id'];
            $date= $_POST['date'];
            $expense = $_POST['type'];
            

?>

<html>
<title> Forecast Amount </title>
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
<body id = "grad">

<style>
/* Gradient Background */
#grad {
  background-image: linear-gradient(#0D274D, #624AF2);
}
/* Rounded Box*/
.rcorners {
  position:absolute; 
  top:0; left:0; right:0; bottom:0; 
  margin:auto;
  border-radius: 25px 80px 25px 25px;
  border: 5px solid black;
  padding: 20px; 
  width: 460px;
  height: 400px;  
  background: white;
  font-family: 'NTR', sans-serif;
}
/* Heading Styling*/
h1 {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  font-size: 30px;
  margin-top: 12px;
  font-weight: bold;
}
/* Styling The Form */
form {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  color: #b5aaad;
}
/* Styling The Input */
input{
text-align:center;
 color: #b5aaad;
 font-size: 25px;
 line-height: 15px;
}
/* Styling amount Input */
input[type=number]{
  width: 65%;
  padding: 5px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #b5aaad;
  color: #b5aaad;
  padding-right: 3px;
}
/* Styling Amount When clicked in */
input[type=number]:focus {
  border: none;
  border-bottom: 2px solid #b5aaad;
  outline-color: transparent;
}
/* Styling text Input */
input[type=text]{
  width: 65%;
  padding: 5px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #b5aaad;
  color: #b5aaad;
  padding-right: 3px;
}
/* Styling text When clicked in */
input[type=text]:focus {
  border: none;
  border-bottom: 2px solid #b5aaad;
  outline-color: transparent;
}
/* Styling Placeholder text when clicked in*/
input:focus::placeholder {
  color: transparent;
}
/* Styling placeholder color */
::placeholder { 
  color: #b5aaad;
  opacity: 1; 
}
/* Styling placeholder color */
:-ms-input-placeholder { 
  color: #b5aaad;
}
/* Styling placeholder color */
::-ms-input-placeholder { 
  color: #b5aaad;
}
/* Styling submit button */
input[type=submit]{
  border-radius: 20px 20px 20px 20px;
  width: 140px;
  height: 50px;  
  color: white;
  background-color: #049fd9;
  border:  #049fd9;
}
/* Styling button when hovered */
input[type=submit]:hover{
  background-color: #0f8abe;
  border:  #0f8abe;
}
/* unvisited link */
a:link {
  color: #5993ba;
}
/* Styling visited link*/
a:visited {
  color: #5993ba;
}
/* mouse over link */
a:hover {
  color: #005073;
  text-decoration: none;
}
.bottom{
    font-size: 18px;
}
</style>

<?php
        //$result = mysqli_query($conn,"SELECT * FROM Expenses WHERE Admin_ID = '$id' AND Type_ID = '$expense' AND Week_quarter_ID = '$date' ");
        // echo "<table  border='1' align ='center'>
        // <tr>
        // <th>Name</th>
        // <th>Amount</th>
        // </tr>";

        // while($row = mysqli_fetch_array($result))
        // {
        // echo "<tr>";
        // echo "<td>" . $row['Expense_name'] . "</td>";
        // echo "<td>" . $row['Amount'] . "</td>";


        // echo "</tr>";
        // }
        // echo "</table>";

        $sql_qry = "SELECT SUM(Amount) AS Amount_sum FROM Expenses WHERE  Admin_ID = '$id' AND Type_ID = '$expense' AND Week_quarter_ID = '$date'  ";
            $amount = $conn->query($sql_qry);
                $record = $amount->fetch_array();
                    $total = $record['Amount_sum'];
                        //echo $total;
                        if(!isset($total)){

                            echo 'Insert an Amount';
                            
                                header('Location:insertNewExpenses.php');

                        
                        
                        }else{
?>
        <div class = "rcorners">
            <!--
                <table  border='1' align ='center'>
                    <tr>
                        <th>Total Amount </th>
                    </tr>
                    <tr>
                        <th> <?php echo $total; ?> </th>
                    </tr>
                </table>
            -->
        
            <h1> Calculated value for this month </h1>
                <form action = "checkForecast.php" method = "post">
                    Amount (USD):<input name = "total" id = "total" value = <?php echo $total; ?> readonly>
                    <input type= "hidden" name = "id" id = "id" value = <?php echo $id; ?> readonly>
                    Date: <input name = "date" id = "date" value = <?php 
                        $date1 = mysqli_query($conn,"SELECT * FROM Week_in_quarters WHERE Week_quarter_ID = '$date' ");
                            while($row = mysqli_fetch_array($date1))
                                {
                                    echo $row['Day_due'];
                                }
                        ?> readonly>
                    <input type= "hidden" name = "expense" id = "expense" value = <?php echo $expense; ?> readonly>
                    <input type= "hidden"  name = "dateID" id = "dateID" value = <?php echo $date; ?> readonly><br>
                    <input type="submit" name="submit" value = "Next"/>
                </form><br>
            <a href = "createForecast.php"> Back </a>
        </div>

<?php
}
?>


</body>
</html>