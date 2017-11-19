<?php
session_start();
$GLOBALS['user'] = $_SESSION['username'];
$log = $_SESSION['admin'];
if ($log != "log"){
	header ("Location: index.php");
}

if(!isset($_SESSION['isLoggedIn']) || !($_SESSION['isLoggedIn']))
{
	//code for authentication comes here
	//ASSUME USER IS VALID
	$_SESSION['isLoggedIn'] = true;
	/////////////////////////////////////////
	$_SESSION['timeOut'] = 1000;
	$logged = time();
	$_SESSION['loggedAt']= $logged;	
	showLoggedIn();
}
else
{
	require 'timeCheck.php';
	$hasSessionExpired = checkIfTimedOut();
	if($hasSessionExpired)
	{
		session_unset();
		header("Location:index.php");
		exit;
	}
	else
	{
		$_SESSION['loggedAt']= time();// update last accessed time
		showLoggedIn();
	}

}
	function showLoggedIn()
	{
		echo'<html>';
		echo'<head>';
		echo'<script type="text/javascript" src="timeout.js"></script>';
		echo'</head>';
		echo'<body>';
			/* echo'<p>';
				echo'Page 1. User is logged in currently.Timeout has been set to 5 seconds. If you stay inactive for more then 5 seconds, you will be logged out automatically and redirected to home page.';
			echo'</p>';
			echo'<br/>';
			echo'<p><a href="second.php">Go to second page</a></p>';
			echo'<br/><br/><br/><p><a href="">Back to article</a></p>'; */
		echo'</body>';
		echo'</html>'; 
	}


 
?>