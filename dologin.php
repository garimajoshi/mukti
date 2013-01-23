<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isiset($_POST['_register']))
        {
            //input validation and register user
            
        }
        else if(isset($_POST['_login']))
        {
            //check login credentials
            $myemailid = addslashes($_POST['email']);
            $mypassword = addslashes($_POST['password']);

            $sql = "SELECT email_id FROM registered_users WHERE email_id='$myemailid' and password='$mypassword'";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);
            $myname = $row['name'];
            $count = mysql_num_rows($result);
            
            if($count == 1)
            {
                session_register("myusername");
                $_SESSION['login_email_id'] = $myemailid;
                $_SESSION['login_name'] = $myname;
                header("location: index.html");
            }
            else
            {
                $error="Invalid username/password";
            }
        }
        else 
        {
            $error="Invalid Page Requested";
        }
    }
    else
    {
        $error="Invalid Page Requested";
    }
?>
