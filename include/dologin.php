<?php
	require("./config.php");
	require("./utility.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['register']))
		{
			//input validation and register user
			$myemailid = addslashes($_POST['email']);
			$sql = "SELECT email_id FROM registered_users WHERE email_id='$myemailid'";
			$result = mysql_query($sql) or die(mysql_error());
			$row = mysql_fetch_array($result);
			$count = mysql_num_rows($result);
			if($count == 0)
			{
				$myname = addslashes($_POST['name']);
				$mypassword = addslashes($_POST['password']);
				$mypassword = md5($mypassword);
				$myphone = addslashes($_POST['phone']);
				$mycollege = addslashes($_POST['college']);
				$confirmationcode = MakeConfirmationMd5($myemailid);
				mysql_query("INSERT INTO registered_users(email_id, name, college, phone, password, confirmation_code) VALUES('$myemailid', '$myname', '$mycollege', '$myphone', '$mypassword', '$confirmationcode')") or die(mysql_error());
				// registered successfully
				$_SESSION['login_email_id'] = $myemailid;
				$_SESSION['login_name'] = $myname;
				header("location: ../index.php");
			}
			else
			{
				$error = "Email already registered";
				echo $error;
			}
		}
		else if(isset($_POST['signin']))
		{
			//check login credentials
			$myemailid = addslashes($_POST['email']);
			$mypassword = addslashes($_POST['password']);
			$mypassword = md5($mypassword);
			$sql = "SELECT email_id, name, id FROM registered_users WHERE email_id='$myemailid' and password='$mypassword' and confirmation_code='y'";
			$result = mysql_query($sql) or die(mysql_error());
			$row = mysql_fetch_array($result);
			$myname = $row['name'];
			$userid = $row['id'];
			$count = mysql_num_rows($result);
			
			if($count == 1)
			{
				$_SESSION['login_email_id'] = $myemailid;
				$_SESSION['login_name'] = $myname;
				$_SESSION['user_id'] = $userid;
				header("location: ../index.php");
			}
			else
			{
				$error = "Invalid username/password";
				echo $error;
			}
		}
		else 
		{
			$error = "Invalid Page Requested";
			echo $error;
		}
	}
	else if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		if(isset($_GET['code']))
		{
			//check validity of activation code
			$confirmationcode = $_GET['code'];
			$sql = "SELECT email_id, name, id FROM registered_users WHERE confirmation_code='$confirmationcode'";
			$result = mysql_query($sql) or die(mysql_error());
			$row = mysql_fetch_array($result);
			$myname = $row['name'];
			$userid = $row['id'];
			$count = mysql_num_rows($result);
			
			if($count == 1)
			{
				$sql = "UPDATE registered_users SET confirmation_code='y' WHERE and confirmation_code='$confirmationcode'";
				$result = mysql_query($sql) or die(mysql_error());
				$_SESSION['login_email_id'] = $myemailid;
				$_SESSION['login_name'] = $myname;
				$_SESSION['user_id'] = $userid;
				header("location: ../index.php");
			}
			else
			{
				$error = "Invalid/Expired confirmation code";
				echo $error;
			}
		}
		else
		{
			$error = "Invalid Page Requested";
			echo $error;
		}
	}
	else
	{
		$error = "Invalid Page Requested";
		echo $error;
	}
?>
