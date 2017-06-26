<?php
$con = mysql_connect("127.0.0.1:3306", "root", "");
if(!$con)
{
  die('Could not connect:' . mysql_error());
}

//Create database
/*if(mysql_query("CREATE DATABASE my_job",$con))
{
  echo "Database created";
}
else
  {
    echo "Error creating database:" . mysql_error();
  }
  */

//Create table in my_job database
mysql_select_db("my_job",$con);
$sql = "CREATE TABLE Users
(
  userID int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(userID),
  Username varchar(20),
  password varchar(20),
  power tinyint(1)

)";

mysql_query($sql,$con);

mysql_close($con);
 ?>
