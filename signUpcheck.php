<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Cisco";
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $npword = password_hash($pword, PASSWORD_DEFAULT);

    //insert
    $sql = " INSERT INTO Viewer (Fname, Lname, Email, Password) VALUES ('$fname', '$lname', '$email', '$npword')";

     if ($conn->query($sql) === TRUE) {
        echo "It has been entered";
        header("Location:login.php");
    } else {
        echo "Error " . $conn->error;
    }
    

    mysqli_close($conn);


?> 