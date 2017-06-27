<?php
session_start();
if(isset($_SESSION['userid']))
unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['power']);
echo "登出成功！"
?>
<script>document.location.href="../record/index.php";</script>
