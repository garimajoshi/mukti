<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['_register']))
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
                mysql_query("INSERT INTO registered_users(email_id, name, college, phone, password) VALUES('$myemailid', '$myname', '$mycollege', '$myphone', '$mypassword')") or die(mysql_error());
                echo "you have registered successfully";
            }
            else
            {
                $error = "Email already registered";
            }
        }
        else if(isset($_POST['_login']))
        {
            //check login credentials
            $myemailid = addslashes($_POST['email']);
            $mypassword = addslashes($_POST['password']);
            $mypassword = md5($mypassword);

            $sql = "SELECT email_id FROM registered_users WHERE email_id='$myemailid' and password='$mypassword'";
            $result = mysql_query($sql) or die(mysql_error());
            $row = mysql_fetch_array($result);
            $myname = $row['name'];
            $count = mysql_num_rows($result);
            
            if($count == 1)
            {
                session_register($myemailid);
                $_SESSION['login_email_id'] = $myemailid;
                $_SESSION['login_name'] = $myname;
                header("location: index.php");
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
    else
    {
        $error = "Invalid Page Requested";
        echo $error;
    }
?>
