<?php
session_start();
date_default_timezone_set("Asia/Shanghai");
include_once "../tasklist/bootstrap.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>新增任务</title>
<style type="text/css">
{
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;}
</style>

</head>

<!--<body>
<div align="center">
  <form action="insert.php" method="post" /><br>
  <label for="inputusername" class="sr-only">用户名</label>
  <input type="text" name="username" class="form-control" placeholder="username" required autofocus>

    <input type="text" name="date" value="<?php $d=strtotime("today");
    echo date("Y/m/d/l"); ?>" hidden />
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
</body>   -->

<form class="form-signin" action="insert.php" method="post"  >

  <h2 class="form-signin-heading">新增任务</h2>
  <input type="text" name="date" value="<?php $d=strtotime("today");
  echo date("Y/m/d/l"); ?>" hidden />

  开始时间：
  <label for="start_time" class="sr-only">开始时间</label>
  <input type="text" name="start_time" class="form-control" value="<?php $d=strtotime("-25 Minutes");
  echo date("H:i", $d) ; ?>" required autofocus>
  结束时间：
  <label for="end_time" class="sr-only">结束时间</label>
  <input type="text" name="end_time" class="form-control" value="<?php $d=strtotime("today");
  echo date("H:i"); ?>" required>
  任务名称：
  <label for="task" class="sr-only">结束时间</label>
  <input type="text" name="task" class="form-control"  required>
  状态：
  <select name="state">
    <option value="1">完成</option>
    <option value="0">打断</option>
  </select>
  <br />
  打断原因：
  <label for="remark" class="sr-only">打断原因</label>
  <input type="text" name="remark" class="form-control"  required>
  类别：
  <label for="sort" class="sr-only">类别</label>
  <input type="text" name="sort" class="form-control"  required>
  <br />
  <button class="btn btn-lg btn-primary btn-block" type="submit">添加</button>
</form>


</html>
