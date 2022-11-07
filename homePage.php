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
  background-color: white;
  
  &.blue {
    background-color: #428aa6;
  }
}
/* Getting rid of indicator*/
input[type=radio] {
  display: none;
}
/* Styling the cards that hold the image*/
.card {
  position: absolute;
  width: 70%;
  height: 100%;
  left: 0;
  right: 0;
  margin: auto;
  transition: transform .4s ease;
  cursor: pointer;
}
/* Styling the container in the card */
.container {
  width: 100%;
  max-width: 800px;
  max-height: 600px;
  height: 100%;
  transform-style: preserve-3d;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}
/* Styling the placement of cards*/
.cards {
  position: relative;
  width: 100%;
  height: 100%;
  margin-bottom: 20px;
}
/* Styling the images in cards*/
.section2 img {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  object-fit: cover;
}
/* Styling the rotation from the left and how it looks*/
#item-1:checked ~ .cards #song-3, #item-2:checked ~ .cards #song-1, #item-3:checked ~ .cards #song-2 {
  transform: translatex(-40%) scale(.8);
  opacity: .4;
  z-index: 0;
}
/* Styling the rotation from the right and how it looks*/
#item-1:checked ~ .cards #song-2, #item-2:checked ~ .cards #song-3, #item-3:checked ~ .cards #song-1 {
  transform: translatex(40%) scale(.8);
  opacity: .4;
  z-index: 0;
}
/* Styling the rotation from to middle and how it looks*/
#item-1:checked ~ .cards #song-1, #item-2:checked ~ .cards #song-2, #item-3:checked ~ .cards #song-3 {
  transform: translatex(0) scale(1);
  opacity: 1;
  z-index: 1;
  
  img {
    box-shadow: 0px 0px 5px 0px rgba(81, 81, 81, 0.47);
  }
}
/* Styling the area for the words under the images*/
.player {
  background-color: #fff;
  border-radius: 8px;
  min-width: 400px;
  padding: 16px 10px;
}
/* Placement of player*/
.upper-part {
  position: relative;
  display: flex;
  align-items: center;
  margin-bottom: 12px;
  height: 36px;
  overflow: hidden;
}
/* Centering of words*/
.song-info {
  width: calc(100% - 32px);
  display: block;
}
/* Formatting of words*/
.song-info .title {
  color: #403d40;
  font-size: 23px;
  line-height: 47px;
  text-transform: uppercase;
  margin-left: -20px;
}
/* Text placement in player*/
.info-area {
  width: 100%;
  position: absolute;
  top: 0;
  left: 30px;
  transition: transform .4s ease-in;
}
/* Rotation of words*/
#item-2:checked ~ .player #test {
  transform: translateY(0);
}
/* Rotation of words*/
#item-2:checked ~ .player #test  {
  transform: translateY(-109px);
}
/* Rotation of words*/
#item-3:checked ~ .player #test  {
  transform: translateY(-53px);
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
@media screen and (max-width: 500px) {
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



</style>

<!-- Header -->
<div class = "section">
    <div class="header">
        <a href="https://www.Cisco.com/" ><img src="https://1000logos.net/wp-content/uploads/2016/11/Cisco-logo.png" alt="Cisco Logo" width = "150" height ="75"></a>
            <div class="header-left">
                <!--<a href="whatWebsite.php">What is this website?</a>-->
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

<!-- Carosel -->
<div class = "section2">
	
    <div class="container">
        <input type="radio" name="slider" id="item-1" checked>
        <input type="radio" name="slider" id="item-2">
        <input type="radio" name="slider" id="item-3">

            <div class="cards">
                <label class="card" for="item-1" id="song-1">
                    <img src="https://officesnapshots.com/wp-content/uploads/2014/01/oplusa_meraki_02251-1200x810.jpg" alt="song">
                </label>
                <label class="card" for="item-2" id="song-2">
                    <img src="https://res.cloudinary.com/people-matters/image/upload/q_auto,f_auto/v1569239438/1569239437.jpg" alt="song">
                </label>
                <label class="card" for="item-3" id="song-3">
                    <img src="http://news.stanford.edu/news/2014/september/images/14267-motivation_news.jpg" alt="song">
                </label>
            </div>

        <div class="player">
            <div class="upper-part">
                <div class="info-area" id="test">
                    <label align = "center" class="song-info" id="song-info-1">
                        <div class="title">Cisco: Bridge to Possible  </div>
                    </label>
                    <label align = "center" class="song-info" id="song-info-2">
                        <div class="title">forecasts at your fingertips</div>
                    </label>
                    <label align = "center" class="song-info" id="song-info-3">
                        <div class="title">east organization and analysis </div>
                    </label>
                </div>
            </div>
        </div>
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
  

</body>
</html>