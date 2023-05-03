<h1>cookie</h1>
<?php
date_default_timezone_set("Asia/Taipei");
// 設定cookie
setcookie('name','naga',strtotime('2023-5-03 10:38:00'));
#若是第一次執行setcookie則echo $_COOKIE[]會失敗，第二次會成功
echo $_COOKIE['name']
?>