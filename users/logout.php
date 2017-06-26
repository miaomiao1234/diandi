<?php
session_start();
if(isset($_SESSION['username']))
unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['power']);
echo "登出成功！"
?>
