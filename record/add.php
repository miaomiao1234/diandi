<?php
date_default_timezone_set("Asia/Shanghai");
?>
<!DOCTYPE html>
<html>
<head>
<title>新增任务</title>
</head>

<body>
<div align="center">
  <form action="insert.php" method="post" /><br>
    <input type="text" name="date" value="<?php $d=strtotime("today");
    echo date("y/m/d",$d); ?>" hidden />
    开始时间：
    <input type="text" name="start_time" value="<?php $d=strtotime("-25 Minutes");
    echo date("H:i", $d) ; ?>" />
    <br><br>
    结束时间：
    <input type="text" name="end_time" value="<?php $d=strtotime("today");
    echo date("H:i"); ?>" />
    <br><br>
    任务名称：
    <input type="text" name="task"  />
    <br><br>
    状 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 态：
    <select name="state">
      <option value="1">完成</option>
      <option value="0">打断</option>
    </select>
    <br><br>
    打断原因：<input type="text" name="remark"  />
    <br><br>
    类 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 别：
    <input type="text" name="sort"  />
      <br><br>
    <input type="submit" value="提交">
</form>

</div>
</body>

</html>
