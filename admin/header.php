<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<link rel="shortcut icon" href="favicon.png">
	<!---CSS Files-->
<link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ui.css">
    <link rel="stylesheet" href="css/inputs.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/anims.css">
	<link rel="stylesheet" href="css/global.css">
	<!---jQuery Files-->
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/functions.js"></script>
	<script src="js/inputs.js"></script>
    <script src="js/sparkline.js"></script>
    <script src="js/flot.js"></script>
    <script src="js/justgage.js"></script>
    <script src="js/tablesorter.js"></script>
</head>

<body>
<div id="wrapper">
  <div id="sidebar">
            <div id="avatar"><img src="img/avatars/sparks.png" alt="User avatar"><div id="av-overlay"></div></div>

            <div id="user-notif">
	            <div id="user-alert" class="icon-subtractshape mod-tg" data-modal="#notif-mod"><div id="notif-unread" class="notif-tag">3</div></div>
                <div id="coll-sidebar"></div>
            </div>
            
            <ul id="nav">
                <li class="active"><a href="dashboard.php"><span class="nav-icon icon-home"></span>Dash</a></li>
                <li><a href="#"><span class="nav-icon icon-user"></span>Users</a></li>
                <li><a href="#"><span class="nav-icon icon-dotlist"></span>Add</a>
				 <ul class="sub-nav">
				        <li><span class="icon icon-useralt"></span><a href="offeradd.php">Photos</a></li>
							
                    </ul>				
				</li>
				
               
                <li>
                    <a href="#"><span class="nav-icon icon-addtolist"></span>Details</a>
                    <ul class="sub-nav">
                       <li><span class="icon icon-useralt"></span><a href="gallerydetails.php">Photos</a></li>
								
                    </ul>
                </li>
              
                <li id="logout"><a href="logout.php"></a><span class="nav-icon icon-shutdown"></span>Log out</li>
            </ul>
        </div>