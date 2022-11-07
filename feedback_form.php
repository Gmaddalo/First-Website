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
            
            //Variable
            $email = $_SESSION['email'];
            $message1 = $_GET['feedback'];
            
            // WHo it sends to
            $recipient = 'giovannim2022@internationalsf.org';
            //Email Subject
            $subject = "Feedback";
            //Message
            $message = $message1;

    //if words
    if (mail($recipient, $subject, $message))
    {
        echo "<h3> Email sent </h3>";
        header('Location:profile.php');
    }
    //If not works
    else
    {
        echo "<h3>Unable to send an email </h3>";
    }
?>