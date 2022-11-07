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
<!-- Gradient Background -->
<body id = "grad">

<style>

/* Gradient Background */
#grad {
  background-image: linear-gradient(#0D274D, #624AF2);
}
/* Rounded Box*/
.rcorners2 {
  position:absolute; 
  top:0; left:0; right:0; bottom:0; 
  margin:auto;
  border-radius: 25px 80px 25px 25px;
  border: 5px solid black;
  padding: 20px; 
  width: 510px;
  height: 610px;  
  background: white;
  font-family: 'NTR', sans-serif;
}
/* Logo in Box */
.logo{
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}
/* Heading Styling*/
h1 {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  font-size: 30px;
  margin-top: 20px;
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
 font-size: 20px;
 line-height: 3px;
}
/* Styling Text Input */
input[type=text]{
  width: 70%;
  padding: 5px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #b5aaad;
  color: #b5aaad;
}
/* Styling Email Input */
input[type=email]{
  width: 70%;
  float: left;
  padding: 5px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #b5aaad;
}
/* Styling passord Input */
input[type=password]{
  width: 70%;
  padding: 5px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #b5aaad;
}
/* Styling Text When clicked in */
input[type=text]:focus {
  border: none;
  border-bottom: 2px solid #b5aaad;
  outline-color: transparent;
}
/* Styling Email when clicked in */
input[type=email]:focus {
  border: none;
  border-bottom: 2px solid #b5aaad;
  outline-color: transparent;
}
/* Styling password when clicked in */
input[type=password]:focus {
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
  border-radius: 25px 25px 25px 25px;
  width: 170px;
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
/* Styling paragraph */
p {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  font-size: 17px;
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
}


</style>



<!-- Box with elements -->
<div class = "rcorners2">
	<div class = "logo">
		<img src="https://1000logos.net/wp-content/uploads/2016/11/Cisco-logo.png" alt="Cisco Logo"  width = "150" height ="75">
	</div>
    <h1> Create An Account
    </h1>
        <form action = "signUpcheck.php" method = "post">
            <input type="text" id="fname" name="fname" value = "" placeholder = "Name">
            <input type="text" id="lname" name="lname" value = "" placeholder = "Last Name">
            <input type="email" id="email" name="email" value = "" placeholder = "Email">
            <input type="password" id="pword" name="pword" value = "" placeholder = "Password">
            <input type="submit" value="Submit"> 
        </form>
   
    
    
    
    
    
    <p><a href = "homePage.php"> Home Page </a></p>
</div>

</body>
</html>