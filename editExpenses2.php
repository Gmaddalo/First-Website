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
            ?>

<html>
<title> Edit Expenses </title>
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
<body id ="grad">

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
  width: 440px;
  height: 370px;  
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
            //If no values
            $amount = mysqli_query($conn,"SELECT Amount FROM Expenses WHERE `Week_quarter_ID` = '$date' AND Type_ID = '$type' AND Expense_name = '$expenseName' AND Admin_ID = '$id'");
                $row_cnt = $amount->num_rows;
                    if($row_cnt == 0){ ?>
                        <div class = "rcorners" align = "center">
                            <h1 align = "center"> There is no input for this </h1> 
                            <h1 align = "center"> Redirecting You to Input Data</h1>                           
                        </div>
                        <?php
                        header( "Refresh:2; url=inputExpenses.php"); 
                    }else{ ?>

            <div class = "rcorners">
                <h1> Edit The Expense Amount </h1>
                    <form action = "editExpensesCheck.php" method = "post">
                        <input type = "hidden" name="expenseName" id = "expenseName" value = <?php echo $expenseName ?> readonly>
                        Amount (USD): <input type="number" name="newamount" id = "newamount" value = 
                            <?php
                                while($row = mysqli_fetch_array($amount))
                                    {
                                        echo  $row['Amount'] ;
                                    }
                            ?> step=".01" required>
                        <input type = "hidden" name  = "id" value = <?php 
                            $id = mysqli_query($conn,"SELECT * FROM Admin WHERE Email = '$email' ");
                                while($row = mysqli_fetch_array($id))
                                    {
                                        echo   $row['Admin_ID'] ;
                                    }
                            ?> readonly>
                        <input  type = "hidden" name="type" id = "type" value = <?php echo $type ?> readonly>
                        <input type ="hidden" name = "date" id = "date" value = <?php echo $date ?> readonly>
                        <input type="submit">
                    </form><br><br><br>
                <a href = "editExpenses.php"> Back </a>
            </div>


<?php } ?>







</body>
</html>
