<?php
include "check_login.php";

// Nếu vẫn không có session → chưa đăng nhập
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

echo "<h2>Xin chào: " . $_SESSION['username'] . "</h2>";
echo "<a href='logout.php'>Đăng xuất</a>";
