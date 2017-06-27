<?php
require_once "diandi_db.php";

$date   = $_GET['date'];
$start  = $_GET['start'];
$end    = $_GET['end'];
$task   = $_GET['task'];
$remark = $_GET['remark'];
$sort   = $_GET['sort'];
$id     = $_GET['id'];
//var_dump($_GET);
?>
<!DOCTYPE html>
<html>
<head>
<title>修改任务</title>
</head>

<body>
<div align="center">
  <form action="doupdate.php" method="post" /><br>
    <input type="text" name="date" value="<?php echo $date; ?>" hidden />
    开始时间：
    <input type="text" name="start_time" value="<?php echo $start ; ?>" hidden/>
    <br><br>
    结束时间：
    <input type="text" name="end_time" value="<?php echo $end; ?>" hidden/>
    <br><br>
    任务名称：
    <input type="text" name="task" value="<?php echo $task; ?>" />
    <br><br>
    状 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 态：
    <select name="state">
      <option value="1">完成</option>
      <option value="0">打断</option>
    </select>
    <br><br>
    打断原因：<input type="text" name="remark"  value="<?php echo $remark;?>"/>
    <br><br>
    类 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 别：
    <input type="text" name="sort" value="<?php echo $sort;?>" />
      <br><br>
    <input type="submit" value="提交">
</form>

</div>
</body>

</html>
