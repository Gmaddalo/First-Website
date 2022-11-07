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
            $viewer = $_SESSION['Viewer'];     
         
?>
<html>
<title> Choose Expense Graph </title>
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
  width: 430px;
  height: 520px;  
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
.placement{
    padding-left: 50px;
}
</style>


        <!-- Stuff in the box -->
        <div class = "rcorners">
            <h1 align = "center"> Choose Your Graph </h1>
                <form action = "ExpensesGraph.php" method ="post" >
                    What type of Expense? <select id = "expense" name ="expense">
                        <option value = "Headcount"> Headcount </option>
                        <option value = "Discretionary"> Discretionary </option>
                        <option value = "Controllable"> Controllable </option>
                        <option value = "Outsource"> Outsource </option>
                        <option value = "Total"> Total of all expenses </option>
                    </select>
                    <input type = "hidden" id = "id" name = "id" value =  <?php
                        $id = mysqli_query($conn,"SELECT * FROM Admin WHERE `Email` = '$email' ");
                            while($row = mysqli_fetch_array($id))
                                {  
                                    echo   $row['Admin_ID'] ;
                                }
                        ?> readonly>
                    Admin Name:  
                        <div class ="placement">
                            <div class="drop-down">
                                <div id="Dropdown" class="dropdown-content">
                                    <input type="text"  id="userInput" onkeyup="Func()">   
                                        <select placeholder = "Search.." id = "id" name = "id">
                                            <option value = ""> Select </option>
                                                <?php
                                                    $name = mysqli_query($conn,"SELECT * FROM Admin  ");
                                                        while($row = mysqli_fetch_array($name))
                                                            {
                                                                echo "<option value = ".$row['Admin_ID']." >"  .$row['Fname']. " " .$row['Lname']. "</option>";
                                                            }
                                                ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                    Quarter Start:  
                        <div class ="placement">
                            <div class="drop-down">
                                <div id="Dropdown" class="dropdown-content">
                                    <input type="text"  id="userInput" onkeyup="Func()">   
                                        <select placeholder = "Search.." id = "quarterDates" name = "quarterDates">
                                            <option value = ""> Select </option>
                                                <?php
                                                    $name = mysqli_query($conn,"SELECT * FROM Quarters  ");
                                                        while($row = mysqli_fetch_array($name))
                                                            {
                                                                echo "<option value = ".$row['Quarter_ID']." >"  .$row['Quarter_start']. "</option>";
                                                            }
                                                ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                    <p> Date does not exist? Click <a href = "inputDates.php"> here </a> to insert new dates </p>
                    <input type = "submit">
                </form><br>
                <a href ="viewGraphs.php"> Back </a>
        </div>

<script>



function Func() {
  var input, filter, a;

  // take user input
  input = document.getElementById("userInput");
  
  // convert the input to upper case letter for easy comparison
  filter = input.value.toUpperCase();

  div = document.getElementById("Dropdown");

  // get all the options as a list
  a = div.getElementsByTagName("option");

  // iterate through the entire list and output relevant results if found
  for (var i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
        

