<?php
require_once "diandi_db.php";

$start  = $_POST['start_time'];
$end    = $_POST['end_time'];
$task   = $_POST['task'];
$state  = $_POST['state'];
$remark = $_POST['remark'];
$date   = $_POST['date'];

$sql="INSERT INTO diandis (task, state, remark, sort, uid, start_time, end_time, date)
VALUES
('$task', '$state', '$remark', '$sort', '$SESSION['userid']''$start', '$end')";
if(!mysql_query($sql, $con))
{
  die('Error:' . mysql_error());
}


mysql_close($con);

header ("location: finish.php?id=" .rand();
?>
