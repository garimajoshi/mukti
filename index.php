<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- May The Source Be With You -->
	<meta charset="utf-8">
	<title>Mukti '13</title>
	<link rel="stylesheet" href="stylesheets/reset.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/style.css">
	<link rel="stylesheet" href="stylesheets/jquery.mCustomScrollbar.css">
	<link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" type="image/gif" href="animated_favicon1.gif">
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="top-right-user-bar">
				<!-- Contains the login/register and a couple of other options-->
			</div>

			<div id="logo-wrapper">
				<div id="club-logo"></div>
				<div id="college-logo"></div>
				<div id="banner-text">Mukti '13</div>
				
				<?php
					if (!isset($_SESSION['login_name'])) {
				?>
				<div id="login-button">Sign In</div>
				<div id="register-button">Register</div>
				<div id="loginwrapper"></div>
				<div id="login-dialog">
				    <div style="padding-bottom: 20px;">Sign in</div>
				    <form method="post" action="dologin.php">
				        <div><input name="email" type="text" placeholder="Email"/></div>
				        <div><input name="password" type="password" placeholder="Password"/></div>
				        <div><input name="signin" type="submit" value="Log In"/></div>
				        <div><a href="#" style="text-decoration: none; font-size: 12pt; color: blue;">Forgot Password</a></div>
				    </form>
				</div>
				<div id="register-dialog">
                    			<div style="padding-bottom: 20px;">Register</div>
                    			<form method="post" action="dologin.php" id="registerForm">
                        			<div><input name="name" id="name" type="text" placeholder="Name"/></div>
                        			<div><input name="email" id="email" type="text" placeholder="Email"/></div>
                        			<div><input name="college" id="college" type="text" placeholder="College"/></div>
                        			<div><input name="phone" id="phone" type="text" placeholder="Phone"/></div>
                        			<div><input name="password" id="password" type="password" placeholder="Password"/></div>
                       				<div><input name="confirmpassword" id="confirmpassword" type="password" placeholder="Confirm Password"/></div>
                        			<div><input name="register" type="submit" value="Register"/></div>
                    			</form>
                		</div>
                		<?php
					} else { 
				?>
				<div id="logout-button"><a href="logout.php">Sign Out</a></div>
				<div id="welcome-bar">
					<div>Hi, <?php echo $_SESSION['login_name']; ?></div>
					<div>Reg No: <?php echo $_SESSION['user_id']; ?></div>
				</div>
				<?php
					}
				?>
			</div>
		</div>

		<div id="wrapper">
			<div id="content" class="wrapper-column">
				<!-- Display the content corresponding to the selected menu option -->
				<h1></h1>

				<div id="content-body-wrapper">
					<div id="content-body">&nbsp;</div>
				</div>			
			</div>

			<div id="nav-menu" class="wrapper-column">
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
						<li>
							<a href="http://www.facebook.com/muktinitdurgapur" id="facebook" title="Facebook" target="_blank">
								Facebook
								<span></span>								
							</a>

						</li>

						<li>
							<a href="https://twitter.com/mukti_nitd" id="twitter" title="Twitter" target="_blank">
								Twitter
								<span></span>
							</a>

						</li>

<!--						<li>
							<a href="http://www.mkti.in" id="googleplus" title="Google+" target="_blank">
								Google+
								<span></span>
							</a>

			</li> -->
					</ul>
				</div>

				<div class="footer-column">
					<h4>License</h4>

					<p>Copyleft 
						<span style="-moz-transform: scaleX(-1); -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); transform: scaleX(-1); display: inline-block;">
    &copy;</span> 2013 This site has been developed and is maintained by GNU/Linux Users' Group NIT Durgapur
    			</p>
				</div>

<!--				<div class="footer-column">
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
