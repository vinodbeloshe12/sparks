<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header ("Location: addnewlistingu.php");
} 
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header ("Location: dashboard.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sparksdesignsolutions.com - Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<link rel="shortcut icon" href="favicon.png">
	<!---CSS Files-->
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/inputs.css">
    <link rel="stylesheet" href="css/ui.css">
    <link rel="stylesheet" href="css/anims.css">
    <link rel="stylesheet" href="css/icons.css">
	<link rel="stylesheet" href="css/global.css">
	<!---jQuery Files-->
	<script src="js/jquery.js"></script>
	<script src="js/inputs.js"></script>
    <script src="js/functions.js"></script>
</head>

<body>

	<div id="wrapper">

		<div id="login-body">

			<form id="login-form" class="show" method="post" action="login.php">

				<div id="login">
 
					<div id="login-user">
		<div class="icon-user"></div>
						<input type="text" id="username" name="username" class="login-input required" placeholder="Username" autocomplete="off">
						
		

					</div>

					<div id="login-pass">
						<span class="icon-securityalt-shieldalt"></span>
                        <span id="forgot-psw" style="display: none">Forgot?</span>
						<input type="password" name="password" id="password" class="login-input required passwf" placeholder="Password">
					<br/>
					</div>
					

				</div>

					<button id="login-btn" type="submit" class="button submit">Log in</button>

			</form>

           

			<div id="login-action">
				<div></div>
				<div id="rb-check-cont">
					<label for="rb-check">Forgot Password ?</label>
					
				</div>
			</div>
		</div>

	</div><!--END WRAPPER-->

	<div id="load"><div id="spinner"></div><div id="load-inner"></div></div>

	<!---jQuery Code-->
	<script type='text/javascript'>
    $('#login-body').hide();
    $(window).load( function() {
        $('#load').fadeOut(600, function() {
            $('#login-body').fadeIn(10, function() {
                $(this).addClass('show');
                $('#username').focus();
                if ($(window).width() <= 480) $('#password').blur();
            });
        });
    });

    var browserSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
    if (browserSafari) $('#wrapper').addClass('safari-fix');

    if ($.storage() == true) {
        localStorage.removeItem('user-name');
        localStorage.removeItem('user-avatar');
    } else {
        function lsnotif() {
            $('#wrapper').append('<div class="notif orange full slideUp">LocalStorage is disabled. Your settings will not be saved!<span class="icon icon-resistor"></span><p class="nt-det">Upgrade your browser or enable local data storage.</p></div>');
        };
        setTimeout(lsnotif, 2000);
        $.fn.notif();
    }

    $('#login-user .icon-user').click( function() {
    	$('#login-user').toggleClass('showusr');
    });

    $('#user-select li').click( function() {
    	$('#login-user').removeClass('showreg showusr');
    	$(this).addClass('sel').siblings('.sel').removeClass('sel');
    	var name = $(this).children('span').text();
    	     img = $(this).children('img').attr('src');
    	$('#username').val(name).removeClass('error').addClass('valid');
    	$('#avatar img').attr('src', img).fadeIn(300);
    	$('#login-user').find('.input-error').remove();
    	$('#login-pass').find('.input-error').remove();
        $('#forgot-psw').fadeOut(200);
    	$('#password').removeClass('error').val('').focus();

        if ($.storage() == true) {
            localStorage.setItem('user-name',name);
            localStorage.setItem('user-avatar',img);
        };
    });

    var users = ["admin","Demo","Johnny 1337"];
    var username = $('#username');
    var typeDelay;
    $(username).keyup(function(){
        clearTimeout(typeDelay);
        $('#user-select').find('.sel').removeClass('sel');
        typeDelay = setTimeout(checkuser, 500);
    });
    function checkuser() {
    	var usrval = username.val();
    	    usrlen = usrval.length;
    	if ($.inArray(usrval, users) == -1 && usrlen > 0) {
    		$('#avatar img').fadeOut(300);
    		$('#login-user').addClass('showreg').removeClass('showusr');
    		$('#user-select').find('.sel').removeClass('sel');
    	} else if (usrlen == 0) {
    		$('#avatar img').fadeOut(200);
    		$('#login-user').removeClass('showreg');
    	} else {
    		$('#avatar img').fadeIn(300);
    		$('#login-user').removeClass('showreg showusr');
    		$('#user-select li').each( function() {
    			var name = $(this).find('span').text();
    			     img = $(this).children('img').attr('src');
    			if (name == usrval) {
    				$(this).addClass('sel');
					$('#avatar img').attr('src', img);
    			}
    		});
            $('#login-pass').find('.input-error').remove();
            $('#password').removeClass('error').focus();
    	};
    };

    $('.input-error').click( function() {
        var trigger = $(this).data('trigger');
        $(this).offsetParent().find('input').eq(trigger).focus();
    });

    $('#password').keyup( function() { 
        if ($(this).val()) $('#forgot-psw').fadeOut(200)
        else $('#forgot-psw').fadeIn(300);
    });

    $('#reg-btn').click( function() {
        $('#login-form').removeClass('show');
        $('#register-form').addClass('show');
        $('#reg-user').focus();
    });

    $('#rb-check').checkfn();

    $('#login-form, #register-form').validate();

    </script>
</body>
</html>