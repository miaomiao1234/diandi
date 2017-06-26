<?php
  require_once "diandi_db.php";
  $result=mysql_query("SELECT * FROM records where state="1" ");
  $row=mysql_fetch_array($result);
?>
<html>
  <head>
    <title>
      点滴工效
    </title>
    <body>
    <div align="center">
     <h1>已完成的任务</h1>
     <hr>
     <a href="add.php">添加任务</a>
     <table>
       <tr>
         <th>时间</th>
         <th>任务名称</th>
         <th>耗时</th>
       </tr>
       <?php
       while ($row=mysql_fetch_array($result))
       {
         ?>
       <tr>
         <td><?php echo $row['start_time'] ."-" .$row['end_time'] ;?></td>
         <td><?php echo $row['task'];?></td>
         <td><?php  $t=strtotime($row['start_time'])-strtotime($row['end_time']); echo $t; ?></td>
       </tr>
       <?php
       }
       ?>
     </table>

     </div>
   </body>
  </head>
</html>
