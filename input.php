<?php

    session_start();
    $viewer = $_SESSION['Viewer'];
    // echo $_SESSION["loggedin"];
    if(!isset($_SESSION['loggedin']))
        {
            header("Location:login.php");

        }else if ($viewer == true){
            header("Location:ViewerLoggedIn.php");
        }
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Cisco";
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            //variable
            $email = $_SESSION['email'];

        $result= mysqli_query($conn,"SELECT Admin_ID FROM Admin WHERE Email = '$email' ");

?>


<html>
    <head>
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
</style>

<div id = "page-container">
    <div id = "content-wrap">
        <!-- Header -->
            <div class = "section">
                <div class="header">
                    <a href="https://www.Cisco.com/" ><img src="https://1000logos.net/wp-content/uploads/2016/11/Cisco-logo.png" alt="Cisco Logo" width = "150" height ="75"></a>
                    <div class="header-right">
                        <a href = "LoggedIn.php"> Home Page </a>
                        <a href="profile.php">Account Settings</a>
                        <a href="logout.php">Sign Out</a>
                    </div>
                </div>
            </div>



            <!-- Dark Blue Area -->
                <div class = "section1">
                        <h1 align = "center" > </h1>
                </div>

            <!-- Links for input -->
            <h1 align = "center"> What would you like to input? </h1>
            <div  align = "center" class = "links">
                <img src = "https://media.istockphoto.com/vectors/-vector-id1148189871?k=6&m=1148189871&s=612x612&w=0&h=SSLwqxLk0e7tJH24Xa80RaXEdXJrKn1ID4vR73MRq80=" id = "inputimage"></br>
                <a href = "inputActuals.php">Actuals </a> </br>
                <a href = "inputDates.php">Dates and Quarters </a> </br>
                <a href = "inputPforecasts.php"> Past Forecasts </a> </br>
                <a href = "inputBudget.php"> Budgets </a></br>
                <a href = "inputExpenses.php"> Expenses </a> <br>
            </div>

            <!-- Button -->
            <div align = "center">
                <div class = "btn">
                    <div class = "links2">
                        <a href = "LoggedIn.php"> Back </a>
                    </div>
                </div></br></br></br></br>
            </div>
            

    </div>

            <!-- Footer -->
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