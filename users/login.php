<?php
session_start();
echo $_SESSION['username'];
 ?>

<!DOCTYPE html>
<html lang="zh-CH">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <?php include_once "../tasklist/bootstrap.php"; ?>
    <title>点滴工效</title>

    <style type="text/css">:
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
<body>
  <div align="center">
  <fieldset>
    <legend>用户登录</legend>
    <form name="loginform" method="post" action="dologin.php" onSumbmit="return InputCheck(this)">
    <p>
    <label for="username" class="label">用户名：</label>
    用户名：
    <input id="username" name="username" type="text" class="input" />
    <p/>
    <p>
    <label for="password" class="label">密码：</label>
    密码：
    <input id="password" name="password" type="password" class="input" />
    <p/>
    <p>
    <input id="power" name="power" type="tinyint" value="2" class="input" hidden>
    <p/>
    <p>
    <input type="submit" name="submit" value="确定" class="left">
    </p>
    </form>
  </fieldset>
  </div>
</body>
</html>
