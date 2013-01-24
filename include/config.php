<?php
    $mysql_hostname = "localhost";
    $mysql_user = "mukti13_user";
    $mysql_password = "mukti13_pass";
    $mysql_database = "mukti13";
    $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)
    or die(mysql_error());
    mysql_select_db($mysql_database, $bd) or die(mysql_error());
?>
