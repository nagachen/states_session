<?php   
session_start();# 需先session_start()才可以用session
// echo $_COOKIE['name'];
echo $_SESSION['name'];
?>