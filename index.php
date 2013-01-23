<!DOCTYPE html>
<html>
<head>
<!-- May The Source Be With You -->
<meta charset="utf-8">
<title>Mukti '13</title>
<link href="stylesheets/reset.css" rel="stylesheet">
<link href="stylesheets/layout.css" rel="stylesheet">
<link href="stylesheets/style.css" rel="stylesheet">
<link href="stylesheets/jquery.mCustomScrollbar.css" rel="stylesheet">
<link href="favicon.ico" rel="shortcut icon">
<link href="animated_favicon1.gif" rel="icon" type="image/gif">
</head>
<body>
<div id="container">
	<div id="header">
		<div id="top-right-user-bar">
			<!-- Contains the login/register and a couple of other options-->
		</div>
		<div id="logo-wrapper">
			<div id="club-logo">
			</div>
			<div id="college-logo">
			</div>
			<div id="banner-text">
				 Mukti '13
			</div>
			<div id="login-button">
				 &nbsp;
			</div>
			<div id="register-button">
				 &nbsp;
			</div>
			<div id="loginwrapper">
			</div>
			<div id="login-dialog">
				<div style="padding-bottom: 20px;">
					 Sign in
				</div>
				<form action="/dologin.php" method="post">
					<div>
						<input name="email" placeholder="Email" type='' "text">
					</div>
					<div>
						<input name="password" placeholder="Password" type='' "password">
					</div>
					<div>
						<input name="submit" type="submit" value="Log In">
					</div>
					<div>
						<input id="_login" name="_login" type="hidden" value="1">
					</div>
					<div>
						<a href="#" style='' "text-decoration: none; font-size: 12pt; color: blue;">
						Forgot Password</a>
					</div>
				</form>
			</div>
			<div id="register-dialog">
				<div style="padding-bottom: 20px;">
					 Register
				</div>
				<form action="/dologin.php" method="post">
					<div>
						<input name="name" placeholder="Name" type="text">
					</div>
					<div>
						<input name="email" placeholder="Email" type='' "text">
					</div>
					<div>
						<input name="college" placeholder="College" type='' "text">
					</div>
					<div>
						<input name="phone" placeholder="Phone" type='' "text">
					</div>
					<div>
						<input name="password" placeholder="Password" type='' "password">
					</div>
					<div>
						<input name="confirmpassword" placeholder='' "confirm password" type="password">
					</div>
					<div>
						<input id="_register" name="_register" type='' "hidden" value="1">
					</div>
					<div>
						<input name="register" type="submit" value='' "register">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="wrapper">
		<div class="wrapper-column" id="content">
			<!-- Display the content corresponding to the selected menu option -->
			<div id="content-body-wrapper">
				<div id="content-body">
					 &nbsp;
				</div>
			</div>
		</div>
		<div class="wrapper-column" id="nav-menu">
			<ul class="nav-menu-list">
				<!-- The JSON fetched menu list goes here -->
			</ul>
		</div>
		<!-- The notification widget to be implemented later -->
		<!--
            <div id="right-notification-widget" class="wrapper-column">
                <p>This is a placeholder text for the notification widget</p>
            </div>
        -->
	</div>
	<div id="footer">
		<div id="footer-wrapper">
			<div class="footer-column">
				<h4>Follow Us</h4>
				<ul id="footer-follow">
					<li><a href="http://www.facebook.com/muktinitdurgapur" id="facebook" target="_blank" title="Facebook">Facebook </a></li>
					<li><a href="https://twitter.com/mukti_nitd" id='' "twitter" target="_blank" title="Twitter">Twitter </a></li>
					<!--                        <li>
                            <a href="http://www.mkti.in" id="googleplus" title="Google+" target="_blank">
                                Google+
                                <span></span>
                            </a>
            </li> -->
				</ul>
			</div>
			<div class="footer-column">
				<h4>License</h4>
				<p>
					Copyleft <span style='' "-moz-transform: scalex(-1); -o-transform: scalex(-1); -webkit-transform: scalex(-1); transform: scalex(-1); display: inline-block;">
					©</span> 2013 This site has been developed and is maintained by GNU/Linux Users' Group NIT Durgapur
				</p>
			</div>
			<!--                <div class="footer-column">
                    <h4>Mailing List</h4>
                    <p>Subscribe to the NITDGPLUG mailing list</p>
                    <form action="http://groups.google.com/group/nitdgplug/boxsubscribe" method="get" target="_blank" id="mailing-list">
                        <div>
                            <input type="text" name="email" class="clear" value="Enter your email address">
                        </div>
                        <div>
                            <input type="submit" class="submit" value="Go">
                        </div>
                    </form>
</div> -->
		</div>
	</div>
</div>
<script src="scripts/jquery-1.8.3.min.js"></script>
<script src="scripts/jQuery.circleMenu.js"></script>
<script src="scripts/jquery-ui-1.8.23.custom.min.js"></script>
<script src="scripts/script.js"></script>
<script src="scripts/jquery.mousewheel.min.js"></script>
<script src="scripts/jquery.mCustomScrollbar.js"></script>
<script>
(function($){
        $(window).load(function(){
            $("#content-body-wrapper").mCustomScrollbar({
                scrollButtons: {
                    enable:true
                }
            });
        });
    })(jQuery);
    </script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28325602-1']);
    _gaq.push(['_setDomainName', 'mkti.in']);
    _gaq.push(['_trackPageview']);
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
</body>
</html>
