<?php
$con = mysql_connect("127.0.0.1:3306", "root", "");
if(!$con)
{
  die('Could not connect:' . mysql_error());
}

 mysql_select_db("my_job", $con);
 session_start();
 date_default_timezone_set("Asia/Shanghai");

 ?>
