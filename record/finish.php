<?php
  require_once "diandi_db.php";
  $result=mysql_query("SELECT * FROM diandis where state='1' ");
  //var_dump($row);
  //echo $row['start_time'] ."-" .$row['end_time'] ;
  //$t=strtotime($row['end_time'])-strtotime($row['start_time']); echo $t;
  ?>

<html>
  <head>
    <title>
      点滴工效
    </title>
  </head>
    <body>
    <div align="center">
     <h1>已完成的任务</h1>
     <br><a href="index.php">历史</a>
     <hr>
     <a href="add.php">添加任务</a>
     <table width="80%">
       <tr align="center">
         <th>日期</th>
         <th>时间</th>
         <th>任务名称</th>
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
         <td><?php  $t=strtotime($row['end_time'])-strtotime($row['start_time']);
         $d = $t/60 ; echo $d  ."min"; ?></td>
         <td><a href="update.php?id=<?php echo $row['recordID'];?>">编辑</a></td>
         <td><a href="javascript:if(confirm('确定要删除记录吗？'))location='delete.php?id=<?php echo $row['recordID'];?>' ">删除</a></td>
       </tr>
       <?php
       }
       ?>
     </table>

     </div>
   </body>
</html>
