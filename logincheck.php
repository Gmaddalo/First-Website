<?php

    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Cisco";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $email = $_POST['uname'];
    $pword = $_POST['pword'];
    

    echo $email;
    echo $pword;


    $sql = "SELECT Viewer_ID, Password FROM Viewer WHERE Email = '$email' ";
    $result = $conn->query($sql); 
    // $num_rows = mysqli_num_rows($result);


    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();
                if(password_verify($pword, $row['Password'])){
                    $_SESSION['email'] = $email;
                    $_SESSION["loggedin"] = true;
                    $_SESSION["Viewer"]= true;
   

        //header("refresh:1; url=temp.php");
        header("Location:ViewerLoggedIn.php");
                }else{
                    
        header("Location:wrong.php");
                }
    
    } else {
        $sql = "SELECT Admin_ID, Password FROM Admin WHERE Email = '$email'";
           $result = $conn->query($sql); 
        
       
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
                if(password_verify($pword, $row['Password'])){
        $_SESSION['email'] = $email;
        $_SESSION["loggedin"] = true;
        $_SESSION['Viewer']= false;
      

        //header("refresh:1; url=temp.php");
        header("Location:LoggedIn.php");
        // header("Location:homePage.php");
                }else
        header("Location:wrong.php");
    }else
        header("Location:wrong.php");
    }


 mysqli_close($conn);












?>