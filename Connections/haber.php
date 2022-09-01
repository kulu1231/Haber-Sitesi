<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_haber = "localhost";
$database_haber = "emre_message";
$username_haber = "root";
$password_haber = "";
$haber = mysql_pconnect($hostname_haber, $username_haber, $password_haber) or trigger_error(mysql_error(),E_USER_ERROR); 
?>