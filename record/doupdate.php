<?php
require_once "diandi_db.php";
$date   = $_POST['date'];
$start  = $_POST['start'];
$end    = $_POST['end'];
$task   = $_POST['task'];
$remark = $_POST['remark'];
$sort   = $_POST['sort'];
$id     = $_POST['id'];

//var_dump($_POST);

$sql="UPDATE diandis SET   task='$task', remark='$remark', sort='$sort', start_time='$start',
end_time='$end', date='$date' WHERE recordID='$id' ";

if (!mysql_query($sql, $con))
{
  die ('Error:'. mysql_error());
}
mysql_close($con);

?>
<script>document.location.href="index.php";</script>
