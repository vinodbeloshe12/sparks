<?php
session_start(); 
session_destroy();
$user = "";
$pass = "";
//$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	include 'config.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];
		
	//unwanted HTML (scripting attacks)
	$user = htmlspecialchars($user);
	$pass = htmlspecialchars($pass);
	
	$SQL = "SELECT * FROM login";
	$result = mysql_query($SQL);
	while ($db_field = mysql_fetch_assoc($result)) {
		$a = $db_field['username'];
		$b = $db_field['password'];
		$pos = $db_field['position'];
		/* $fid = $db_field['id'];
		$pid = $db_field['parent']; */
		if(($user == $a) AND ($pass == $b)){
			
			if($pos == "admin"){
				session_start();
				$_SESSION['username'] = $user;
				 $_SESSION['logged_in'] = true;
				$_SESSION['admin'] = "log";
				$_SESSION['position'] = $pos;
				/* $_SESSION['frid'] = $fid;
				$_SESSION['pid'] = $pid; */
				header("Location: dashboard.php");
				break;
			}
			
			if($pos == "sub admin"){
				session_start();
				$_SESSION['username'] = $user;
				 $_SESSION['logged_in'] = true;
				$_SESSION['admin'] = "log";
				$_SESSION['position'] = $pos;
				/* $_SESSION['frid'] = $fid;
				$_SESSION['pid'] = $pid; */
				header("Location: dashboard.php");
				break;
			}
			
		
			
			if($pos == "user"){
				session_start();
				$_SESSION['username'] = $user;
				 $_SESSION['loggedin'] = true;
				$_SESSION['user'] = "log";
			/* 	$_SESSION['frid'] = $fid;
				$_SESSION['pid'] = $pid; */
				header("Location: addnewlistingu.php");
				break;
			}
							
		}
				
	}
	
	
	echo '<script type="text/javascript">';
        echo 'alert("Username or Password Invalid!")';
		
		 echo '</script>';
		 print "<script>location.href = 'index.php'</script>";
		
	
	
}
?>
