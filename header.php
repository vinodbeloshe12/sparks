<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sparks Design Solutions</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="technfox.com">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,600,700,800,900' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<!--<link href="css/prettyPhoto.html" rel="stylesheet" type="text/css"/>-->
<link href="css/hover.css" rel="stylesheet" type="text/css"/>
<link href="css/settings.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="plugin/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="plugin/css/mediaBoxes.css">
<link href="css/owl.carousel.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/modernizr.custom.js"></script>

<script type="text/javascript">

var message = "";
///////////////////////////////////
function clickIE() {
    if (document.all) {
        (message);
        return false;
    }
}

function clickNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2 || e.which == 3) {
            (message);
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = clickNS;
} else {
    document.onmouseup = clickNS;
    document.oncontextmenu = clickIE;
}

document.oncontextmenu = new Function("return false")
</script>

<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.content a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.content{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 170px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 10px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.content p{
clear: both;
color: #555555;
text-align: justify;
}
.content p a{
color: #d91900;
font-weight: bold;
}
.content .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.content .x:hover{
cursor: pointer;
}
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.click').click(function(){

overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
return false;
});
});
</script>
<script>
	function myFunction()
	{
	//document.getElementById("click").click();
	 setTimeout(
	function()
	{ 
	document.getElementById("click").click();
	}, 30000); 
	}
	
	</script>
</head>

<?php
include 'db.php';
$ip= $_SERVER['REMOTE_ADDR'];
   date_default_timezone_set("Asia/Calcutta");
$today = date('y-m-d');

//echo $ip;
$q = "select ip from online where ip='" . $ip . "'";
/* echo$q; */
$chkcategory=mysqli_query($con,$q);
  if ($chkcategory->num_rows > 0)
{
//echo'<script>alert("Regular User")</script>';
//Ip Exists
echo'<body>';
 }
 else
 {
 //echo'<script>alert("New User")</script>';
 $qry=mysqli_query($con,"insert into online(ip,regdate)values('$ip','$today')");
//echo'<body onload="myFunction()">';
 
 }
?>


<div class='popup'>
<div class='content'>
<!-- <img src='http://www.developertips.net/demos/popup-dialog/img/x.png' alt='quit' class='x' id='x' /> -->
<form id="ajax-contact-form" action="contactmail.php" method="post">
							<input class="col-xs-12 col-md-12" type="text" name="name" value="" placeholder="Your Name" />
							<input class="col-xs-12 col-md-12" type="text" name="email" value="" placeholder="Your Email"/>
							<input class="col-xs-12 col-md-12" type="text" name="subject" value="" placeholder="Subject"  />
							<textarea name="message" id="message" class="col-xs-12  col-md-12" placeholder="Your Message..."></textarea>
							<div class="clear"></div>
							<input type="submit" class="btn marg-right10"  value="submit" />
							<input type="reset" class="btn" value="reset" />
							<div class="clear"></div>
							</form>  
<!-- <br/>
<a href='' class='close'>Close</a> -->
</p>
</div>
</div>         
<div id='container' style="display:none;">
<a href='' id='click' class='click'></a> <br/>
</div>
		<!-- Navbar -->
		<div class="container-fluid mytop myhbg">
<div class="container myborder2"><div class="row">
<div id="my-content">
<div class="mylogobox"><center><img style="margin-top: 58px;margin-left: 115px;transform: rotate(-45deg);" src="img/logo1.png"></center></div></div>
	<!-- <div class="col-md-6"><i class="fa fa-envelope" style="color:red"></i>&nbsp
	sparks@sparksdesignsolutions.com 
	</div> --><div class="col-md-6" style="float:right;text-align:right;margin-right:6px; color:#FFF;"><i class="fa fa-envelope" style="color:#FFF"></i>
sparksdesignsolutions@gmail.com  &nbsp <i class="fa fa-phone" style="margin:0 5px 0px 5px;"></i><b>+91 9167768584
	<i class="fa fa-phone" style="border-left:2px solid #BFBBBB; margin-left:5px; margin-right:5px; padding-left:10px;"></i>+ 91 9167766872</div>
	</div></div></div>