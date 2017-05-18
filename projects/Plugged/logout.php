<?php
session_start(); 
$_SESSION["loggedIn"] = false;
session_destroy();
session_unset(); 
header("Location: feed.php?logout=ok");
?>