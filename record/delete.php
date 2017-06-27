<?php
require_once "diandi_db.php";

$id = $_GET['id'];
//var_dump($id);
$sql="DELETE FROM diandis WHERE recordID='$id' ";

if (!mysql_query($sql,$con))
{
  die ('Error:' . mysql_error());
}

mysql_close($con);
//header ("location: index.php");
?>
<script>document.location.href="index.php";</script>
