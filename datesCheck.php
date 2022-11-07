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
            $start = $_POST['start'];
            $post = $_POST['end'];

            //Insert Statement
            $sql = " INSERT INTO Quarters (Quarter_Start, Quarter_End) VALUES ('$start', '$post')";

            //What happens when succesful
            if ($conn->query($sql) === TRUE) {
                echo "It has been entered";
                header("Location:inputDates.php");
            }else {
                echo "Error " . $conn->error;
            }

    mysqli_close($conn);

    ?>