<?php
    session_start();
    $viewer = $_SESSION["Viewer"];
    // echo $_SESSION["loggedin"];
    if(!isset($_SESSION['loggedin']))
        {
            header("Location:login.php");

        }else if ($viewer == true){
            header("Location:ViewerLoggedIn.php");
        }
?>
<html>
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
  	line-height: 25px;
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
/* Styling the body of the Carousel*/
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
  height: 115px; 
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
/* Rounded Box*/
.rcorners {
  position:relative; 
  top:0; left:0; right:0; bottom:0; 
  margin:auto;
  border-radius: 10px 50px 50px 50px;
  padding: 30px; 
  width: 96%;
  height:270px;  
  background: linear-gradient(to bottom right, #4618C9, #c2b6e5);
  font-family: 'NTR', sans-serif;
  display: flex;

}
/* Rounded Box Heading */
.rcorners h1 {
   font-family: 'NTR', sans-serif;
   font-weight: bold;
   font-size: 40px;
   line-height: 110px;
}
/* Rounded Box Imaage */
.rcorners img{
  width: 900px;
  height: 240px;
  max-width: 100%;
  padding-left: 170px;
}
}
/* Rounded Box Imaage */
.rcorners image {
  flex-basis: 80%
}
/* Page Format */
#page-container {
  position: relative;
  min-height: 100vh;
}
/* Padding Bottom */
#content-wrap {
  padding-bottom: 2.5rem;    /* Footer height */
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
/* Container for Image */
.container1 > img {
  height: 100%;
  width: auto;
}
/* How images look */
.container1 {
  height: 340px;
  display: flex;
  justify-content: center;
  z-index: -1;
}
/* Image Spacing */
.leagues {
  height: 340px;
  width: auto;
  padding:5px;
  border-radius: 50px 50px 50px 50px;
  z-index: -1;
}
/* Second Row of Images */
.container2 > img {
  height: 100%;
  width: auto;
}
/* Second row of images */
.container2 {
  height: 340px;
  display: flex;
  justify-content: center;
}
/* Formating for second row */
.leagues2 {
  height: 340px;
  width: auto;
  padding:5px;
  border-radius: 50px 50px 50px 50px;
}
/* Words over images */
.part {
border-radius: 50px 50px 50px 50px; 
}
/* Formating Words over images */
.part h1{
    font-size: 35px;
    position:absolute;
    padding-top: 20px;
    padding-left: 40px;
    font-weight: bold;
    font-family: 'NTR', sans-serif;
}
/* Formating Words over images */
.part h2{
    font-size: 35px;
    position:absolute;
    padding-top: 20px;
    padding-left: 465px;
    font-weight: bold;
    font-family: 'NTR', sans-serif;
}
/* Formating Words over images */
.part h3{
    font-size: 35px;
    position:absolute;
    padding-top: 287px;
    padding-left: 328px;
    font-weight: bold;
    font-family: 'NTR', sans-serif;
}
/* Formating Words over images */
.part h4{
    font-size: 35px;
    color: black;
    position:absolute;
    padding-top: 287px;
    padding-left: 355px;
    font-weight: bold;
    font-family: 'NTR', sans-serif;
}
/* Formating Words over images */
.part h5{
    font-size: 35px;
    position:absolute;
    padding-top: 20px;
    padding-left: 30px;
    font-weight: bold;
    font-family: 'NTR', sans-serif;
}
/* Formating Words over images */
.part h6{
    font-size: 35px;
    position:absolute;
    padding-top: 20px;
    padding-left: 30px;
    font-weight: bold;
    font-family: 'NTR', sans-serif;
}
/* Formating Words over images */
.part h1 a{
    color: black;
    text-decoration: none;
}
/* Formating Words over images */
.part h1 a:hover {
  color: black;
  font-size: 40px;
}
/* Formating Words over images */
.part h2 a{
    color: black;
    text-decoration: none;
}
/* Formating Words over images */
.part h2 a:hover {
  color: black;
  font-size: 40px;
}
/* Formating Words over images */
.part h3 a{
    color: black;
    text-decoration: none;
}
/* Formating Words over images */
.part h3 a:hover {
  color: black;
  font-size: 40px;
}
/* Formating Words over images */
.part h4 a{
    color: black;
    text-decoration: none;
}
/* Formating Words over images */
.part h4 a:hover {
  color: black;
  font-size: 40px;
}
/* Formating Words over images */
.part h5 a{
    color: black;
    text-decoration: none;
}
/* Formating Words over images */
.part h5 a:hover {
  color: black;
  font-size: 40px;
}
/* Formating Words over images */
.part h6 a{
    color: black;
    text-decoration: none;
}
/* Formating Words over images */
.part h6 a:hover {
  color: black;
  font-size: 40px;
}

@media screen and (max-width: 1600px) {
.container1 > img {
  height: 100%;
  width: auto;
}
.container1 {
  height: 300px;
  display: flex;
  justify-content: center;
  z-index: -1;
}
.leagues {
  height: 300px;
  width: auto;
  padding:5px;
  border-radius: 50px 50px 50px 50px;
  z-index: -1;
}
.container2 > img {
  height: 100%;
  width: auto;
}
.container2 {
  height: 300px;
  display: flex;
  justify-content: center;
}
/* formating the images */
.leagues2 {
  height: 300px;
  width: auto;
  padding:5px;
  border-radius: 50px 50px 50px 50px;
}
/* Formating the box */
.rcorners h1 {
   font-family: 'NTR', sans-serif;
   font-weight: bold;
   font-size: 30px;
   line-height: 110px;
}
/* Formating Words over images */
.part h2{
    font-size: 35px;
    position:absolute;
    padding-top: 20px;
    padding-left: 390px;
    font-weight: bold;
    font-family: 'NTR', sans-serif;
}
/* Formating Words over images */
.part h3{
    font-size: 35px;
    position:absolute;
    padding-top: 240px;
    padding-left: 275px;
    font-weight: bold;
    font-family: 'NTR', sans-serif;
}
/* Formating Words over images */
.part h4{
    font-size: 35px;
    color: black;
    position:absolute;
    padding-top: 250px;
    padding-left: 300px;
    font-weight: bold;
    font-family: 'NTR', sans-serif;
}
}


</style>
<?php
    
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Cisco";
            $conn = new mysqli($servername, $username, $password, $dbname);
            

            $email = $_SESSION['email'];
        
            
           
// $first_name = mysqli_query($conn, "SELECT Fname FROM User WHERE Email = '$email' AND Password = '$pword'");
//     while($name = mysqli_fetch_assoc($first_name)) {
//             echo "<h1><strong> Welcome ".$name['Fname']."! </strong></h1>";
//     }
        
 mysqli_close($conn);
   
?>
<div id = "page-container">
    <div id = "content-wrap">
<!-- Header -->
<div class = "section">
    <div class="header">
        <a href="https://www.Cisco.com/" ><img src="https://1000logos.net/wp-content/uploads/2016/11/Cisco-logo.png" alt="Cisco Logo" width = "150" height ="75"></a>
            <div class="header-right">
                <a href="profile.php">Account Settings</a>
                <a href="logout.php">Sign Out</a>
            </div>
    </div>
</div>

<!-- Dark Blue Area -->
<div class = "section1">
    <h1 align = "center" > </h1>
</div>

<!-- Firs Section -->
<div class = "rcorners">
    <div class ="text">
    <h1> Welcome!</h1>
    <h1> This is the Cisco Forecasting Website!</h1>
    </div>
    <div class = "image">
    <img src="https://pngimg.com/uploads/welcome/welcome_PNG98.png" >
    </div>
</div>
</br>


<div class="container1">


    <div class = "part">
    <h1><a href = "input.php">Input Data</a></h1>
    <a href = "input.php"><img class="leagues" id="l1" src="https://www.valentinaiannaco.com/wp-content/uploads/2019/07/mani-tastiera.jpg" alt=""></a>
    </div>
    <div class = "part">
    <h2><a href = "viewGraphs.php"> View Graphs </a> </h2>
    <a href = "viewGraphs.php"><img class="leagues" id="pl" src="https://www.cambridgemaths.org/Images/The-trouble-with-graphs.jpg" alt=""></a>
    </div>
    <div class = "part">
    <h3><a href = "createForecast.php"> Forecasts </a></h3>
    <a href = "createForecast.php"><img class="leagues" id="pl" src="https://www.ranksense.com/wp-content/uploads/2019/06/Blog-Image-5-1200x817.png" alt=""></a>
    </div>
   
</div>

<div class="container2">
    <div class = "part">
    <h4> <a href = "viewData.php">View Data </a> </h4>
    <a href = "viewData.php"><img class="leagues2" id="l1" src="https://lh3.googleusercontent.com/xq2X8Poqtwu_uH3DfBFTYhwiX4E8awiGxR_N8OByjELZQ7ajYCObKDAe7FMUDw0kYtxGr-tCj2AkNOQssKb5SkFulQzNSOsp0WJUdnRgJLlYGLBUp5EcnNcHPjmyFiT4nnGrf9Ep" alt=""></a>
    </div>
    <div class = "part">
    <h5> <a href = "editData.php">Edit Data </a></h5>
    <a href = "editData.php"><img class="leagues2" id="pl" src="https://blog.chartmogul.com/wp-content/uploads/2017/10/data_editing.jpg" alt=""></a>
    </div>
    <div class = "part">
    <h6> <a href = "profile.php">Profile </a></h6>
    <a href = "profile.php"><img class="leagues2" id="pl" src="https://deleesclubvanalles.nl/wp-content/uploads/2019/10/no-placeholderperson.png" alt=""></a>
   </div>
</div>


</br></br></br></br></br>





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
</div>
</body>
</html>