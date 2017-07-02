<nav class="navbar navbar-default" role="navitation">
  <div class="container-fluid">
    <!-- Brand and toggle get groupde for better mobile display -->

  <div class="navbar-header">
    <a class="navbar-brand" href="/diandi/record/index.php">点滴工效</a>
                <ul class="nav navbar-nav">
                  <li><a href="finish.php">已完成的任务</a></li>
                  <li><a href="break.php">中断的任务</a></li>
                </ul>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id= "bs-example-navbar-collapse-1">
  <ul class= "nav navbar-nav navbar-right">

    <?php
    if ($_SESSION['userid']== "" )
    {
      ?>
    <li><a href="../users/sigin.php"><?php echo "注册"?></a></li>
    <li><a href="../users/login.php"><?php echo "登录"?></a></li>
    <?php } else  {?>
    <li class="drapdown">
    <a href="#" class="drapdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      Hi!, <?php echo $_SESSION['username']; ?>
      <b class="caret"></b>
    </a>
      <ul class="dropdown-menu">
        <li>a</li>
        <li role="separator" class="divider"></li>
        <li><a href = "../users/logout.php">登出</a></li>
      </ul>
    </li>
    <li><a href = "../users/logout.php">登出</a></li>
    <?php }?>
</ul>
</div>
<!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
