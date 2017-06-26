<?php
require_once "user_db.php";

$username=$_POST['username'];
$password=$_POST['password'];
$power=$_POST['power'];
//var_dump($_POST);

$sq="SELECT * FROM Users WHERE username ='$username'";
$result=mysql_query($sq);
$row=mysql_fetch_array($result);

//var_dump( $username ,$row['username']) ;
if (
  isset($row['username']) && $row['username']=="$username"
  )
  {
  echo  "用户名重复,请重新输入";

  }
else


{
$sql="INSERT INTO Users(Username, password, power)
VALUES('$username', '$password', '$power')";

if(!mysql_query($sql, $con))
{
  die('Error:' . mysql_error());
}


mysql_close($con);

header ("location: login.php");}
?>
