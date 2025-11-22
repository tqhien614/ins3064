<?php
session_start();

// Xóa session
session_destroy();

// Xóa cookies
setcookie("remember_user", "", time() - 3600, "/");

header("Location: login.php");
exit;
