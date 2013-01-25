<?php
require("../phpmailer/class.phpmailer.php");
require("../phpmailer/class.smtp.php");

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
	"Webmaster\r\n";
	
	if(!$mailer->Send())
	{
		$error = "Mailer Error: " . $mailer->ErrorInfo;
		return false;
	}
	return true;
}

function ValidateRegistrationSubmission($myemail, $myname, $mypassword, $myphone, $mydepartment, $mycity, $myyear, $mycollege)
{
    $toReturn = true;
    
    if(!isset($myemail) || strlen($myemail)<=0 || (false == preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $myemail)) || strlen($myemail)>30)
    {
        echo 'Please enter a valid email';
        $toReturn = false;
        exit();
    }
    if(!isset($myname) || strlen($myname)<=0 || strlen($myname)>30)
    {
        echo 'Please enter name';
        $toReturn = false;
        exit();
    }
    if(!isset($mypassword) || strlen($mypassword)<=0 || strlen($mypassword)>50)
    {
        echo 'Please enter a valid password';
        $toReturn = false;
        exit();
    }
    if(!isset($mydepartment) || strlen($mydepartment)<=0 || strlen($mydepartment)>50)
    {
        echo 'Please enter department';
        $toReturn = false;
        exit();
    }
    if(!isset($mycity) || strlen($mycity)<=0 || strlen($mycity)>50)
    {
        echo 'Please enter city';
        $toReturn = false;
        exit();
    }
    if(!isset($myyear) || strlen($myyear)<=0 || strlen($myyear)>20)
    {
        echo 'Please enter year of study';
        $toReturn = false;
        exit();
    }
    if(isset($myphone) && (false == preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $myphone)) || strlen($myphone)>20)
    {
        echo 'Please enter valid phone number';
        $toReturn = false;
        exit();
    }
    if(!isset($mycollege) || strlen($mycollege)<=0 || strlen($mycollege)>50)
    {
        echo 'Please enter college';
        $toReturn = false;
        exit();
    }
    return $toReturn;
}
    
?>
