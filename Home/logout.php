<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: https://localhost/projGitPAI/projekt_wspolnota/login.php");
exit;
?>