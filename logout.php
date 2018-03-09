<?php
@ob_start();
//session_start();
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>