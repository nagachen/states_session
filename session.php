<h1>Session</h1>
<?php
session_start();
$_SESSION['name']='naga';
echo $_SESSION['name'];
?>
<a href="logout.php">登出</a>
