<?php


session_start();
 
// Unset all of the session variables
$_SESSION = array();
 

session_unset(); //unset all the session variables

// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: homePage.php");
exit;
?>