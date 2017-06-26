<?php
session_start();
require_once "user_db.php";
$username=$_POST['username'];
$password=$_POST['password'];


//if(!isset($_POST['submit']))
//{
//  exit('非法访问')
//}
$sql = "SELECT * FROM Users where username = '$username' ";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
if(isset($row['password'])  && $row['password'] == $password ){
  $_SESSION['userid']=$row['userID'];
  $_SESSION['username']=$row['username'];
  $_SESSION['power']=$row['power'];
  echo "登录成功！";
}else{
  echo "用户名或密码错误！";
}
?>
