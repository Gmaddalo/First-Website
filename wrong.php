<html>
<body>
<?php
//Pop up function
function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";       
    }

    alert('You have input the wrong info. Please Try again');
    header("refresh:.1; url=login.php");

?>

</body>
</html>