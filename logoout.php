<?php

session_start();                               #登出使用者
echo "已登出使用者".$_SESSION['name'];
unset($_SESSION['name']); #取消session狀態