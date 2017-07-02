<?php
require_once "diandi_db.php";
//include "../tasklist/bootstrap.php";
$result = mysql_query("SELECT * FROM diandis");
 ?>
 <!DOCTYPE html>
 <html lang="zh-CN">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
     <title>点滴工效</title>

     <!-- Bootstrap -->
     <link rel="stylesheet" href="../dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
     <link rel="stylesheet" href="../dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

     <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
     <script src="../dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

     <!-- Bootstrap -->
        <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
       <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

     <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
     <script src="https://code.jquery.com/jquery.js"></script>
     <!-- 包括所有已编译的插件 -->
     <script src="js/bootstrap.min.js"></script>
   </head>

    <?php include_once "../common/_navbar.php"; ?>

    <body>
      <!--  登录表头   -->
  <!--    <div  id="header" align="right" >
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
      </div>   -->

      <!--  展示列表  -->
      <?php
      ?>
    <div class= "container-fluid" align="center">
      <h1>点滴历史</h1>
      <div>
        <a  class= "btn btn-primary pull-right" href="add.php">添加任务</a><br>
    </div>
<!--     <a href="finish.php">已完成的任务</a>
     <a href="break.php">中断的任务</a>
   </div>      -->
     <div class="container">
      <table class= "table table-hover" >
        <tr>
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
        <tr>
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
      <script src="../dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   </body>
</html>
