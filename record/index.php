<?php
require_once "diandi_db.php";
$result = mysql_query("SELECT * FROM diandis");
 ?>
<html>
  <head>
    <title>
      点滴工效
    </title>
    <body>
      <!--  登录表头   -->
      <div id="header" align="right">
        <?php
        if (!$_SESSION['userid']== "" )
        {
          echo  "Hello ," . $_SESSION['username'];
          ?>
          <br>
          <a href = "../users/logout.php">登出</a>
          <?php
        }
        else {
           ?>
          <a href="../users/sigin.php"><?php echo "注册"?></a>
          <a href="../users/login.php"><?php echo "登录"?></a>
          <?php
        }
        ?>
      </div>

      <!--  展示列表  -->
      <?php
      ?>
    <div align="center">
     <h1>点滴历史</h1>
     <a href="add.php">添加任务</a><br>
     <a href="finish.php">已完成的任务</a>
     <a href="break.php">中断的任务</a>
     </div>
     <div align="center">
      <table frame="below" width="90%" >
        <tr align="center">
          <th>日期</th>
          <th>时间</th>
          <th>任务名称</th>
          <th>中断原因</th>
          <th>耗时</th>
          <th colspan="2">操作</th>
        </tr>
        <?php
        while ($row=mysql_fetch_array($result))
        {
          ?>
        <tr align="center">
          <td><?php echo $row['date'];?></td>
          <td><?php echo $row['start_time'] ."-" .$row['end_time'] ;;?></td>
          <td><?php echo $row['task'];?></td>
          <td><?php echo $row['remark'];?></td>
          <td><?php  $t=strtotime($row['end_time'])-strtotime($row['start_time']);
              $d = $t/60 ; echo $d  ."min"; ?></td>
          <td> <a href="update.php?date=<?php echo $row['date'];?>&start=<?php echo $row['start_time'];?>
              &end=<?php echo $row['end_time'];?>&task=<?php echo $row['task']?>&remark=<?php echo $row['remark'];?>
              &sort=<?php echo $row['sort'];?>&id=<?php echo $row['recordID']?>;  ">
              编辑
            </a>
          </td>

          <td><a href="javascript:if(confirm('确定要删除记录吗？'))location='delete.php?id=<?php echo $row['recordID'];?>' ">删除</a></td>
        </tr>
        <?php
        }
        ?>
      </table>

      </div>
   </body>
  </head>
</html>
