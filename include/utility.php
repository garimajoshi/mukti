<?php
include("../phpmailer/class.phpmailer.php");
include("../phpmailer/class.smtp.php");

function GetAbsoluteURLFolder()
{
	$scriptFolder = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://';
	$scriptFolder .= $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);
	return $scriptFolder;
}

function MakeConfirmationMd5($email)
{
	$myrandom = 732574;
	$randno1 = rand();
	$randno2 = rand();
	return urlencode(md5($email.$randno1.$myrandom.$randno2));
}

function SendUserConfirmationEmail($email_id, $name, $confirmcode)
{
	$mailer = new PHPMailer();
	
	$mailer->IsSMTP();                                          // set mailer to use SMTP
	$mailer->Host = "ssl://smtp.gmail.com";                     // specify main and backup server
	$mailer->Port = 465;                                        // set the port to use
	$mailer->SMTPAuth = true;                                   // turn on SMTP authentication
	$mailer->Username = "sender@gmail.com";                     // your SMTP username or your gmail username
	$mailer->Password = "mypasswrord";                          // your SMTP password or your gmail password
	$mailer->From = "noreply-webmaster@example.com";            //sender mail-id
	$mailer->FromName = "MuktiWebMaster";                       // Name to indicate where the email came from when the recepient received
	$mail->AddReplyTo("webmaster@example.com","Webmaster");     // Reply to this email
	
	$mailer->CharSet = 'utf-8';
	$mailer->WordWrap = 50;                                     // set word wrap
	
	$mailer->AddAddress($email_id, $name);
	$mailer->Subject = "Confirm Your registration with MUKTI 2013";
	$confirm_url = GetAbsoluteURLFolder().'/dologin.php?code='.$confirmcode;
	$mailer->Body ="Hello ".$name."\r\n\r\n".
	"Thanks for your registration with MUKTI '13"."\r\n".
	"Please click the link below to confirm your registration.\r\n".
	"$confirm_url\r\n".
	"\r\n".
	"Regards,\r\n".
	"Webmaster\r\n".
	
	if(!$mailer->Send())
	{
		$error = "Mailer Error: " . $mailer->ErrorInfo;
		return false;
	}
	return true;
}
?>
