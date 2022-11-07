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
h1{
	text-transform: uppercase;
    text-align: center;
    color: #FFFFFF;
    font-size: 20px;
  	line-height: 25px;
  	border-radius: 4px;
    padding: 10px;
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
/* Styling section2 image */
.section2 img{
  width: 550px;
  height:350px;
  padding: 20px;
  clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);
}
/* Styling section2 h2 */
.section2 h2{
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 45px;
  font-weight: bold;
}
/* Creating container to put text next to image */
.container {
  display: flex;
  align-items: center;
  justify-content: center
}
/* Creating class image */
.image {
  flex-basis: 40%
}
/* Creating class text */
.text {
  font-size: 20px;
  padding-left: 20px;
}
/* Styling section2 paragraph style */
.section2 p{
  font-size: 30px;
}
/* Styling heading 4 */
h4 {
  font-size:45px;
}
/* Styling heading 5*/
h5 {
  font-family: 'Brush Script MT',' Brush Script Std', cursive;
  font-size:35px;
}
/* Footer Formating*/
.footer {
  position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #0D274D;
  color: white;
  text-align: center;
  height: 125px;
}
/* Footer text moved to left*/
.footer-text-left {
  padding-left:40px;
  margin-top:20px;
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
  .section2 img{
	width: 400px;
    height:220px;
    padding: 20px;
    clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%); 
  }
  h4 {
    font-size:0px;
    color: white;
  }
  h5 {
    font-family: 'Brush Script MT',' Brush Script Std', cursive;
    font-size:0px;
    color: white;
  }
}

</style>

<!-- Header -->
<div class = "section">
    <div class="header">
        <a href="#default" ><img src="https://1000logos.net/wp-content/uploads/2016/11/Cisco-logo.png" alt="Cisco Logo" width = "150" height ="75"></a>
            <div class="header-left">
                <a href="homePage.php">Home Page</a>
            </div>
            <div class="header-right">
                <a href="signUp.php">Sign Up</a>
                <a href="login.php">Sign In</a>
            </div>
    </div>
</div>

<!-- Dark Blue Area -->
<div class = "section1">
    <h1 align = "center" > Work at Cisco? Click <a href=" signUp.php" class = "link"> Here </a> to sign up for an account to view graphs </h1>
</div>

<!-- Info Section -->
<div class = "section2">
    <h2> What is this website?</h2>

    <div class="container">
        <div class="image">
            <img src="https://www.bleepstatic.com/content/hl-images/2020/10/20/Cisco.jpg">
        </div>
        <div class="text">
            <h4>Analysis is the critical starting point of strategic thinking</h4>
            <h5>- Kenichi Ohmae </h5>
        </div>
    </div>
    <HR>
    
    <p align ="center"> Welcome! This page is meant to be a place for Cisco employees to have access to graphs and other visual elements that will help them with analysis. Along with that, this is a site that will allow employees insert information to make thier own forecasts. <br>
    </p>
   


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
  

</body>
</html>