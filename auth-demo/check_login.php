<?php
session_start();

// Nếu chưa có session nhưng có cookie => tạo lại session
if(!isset($_SESSION['username']) && isset($_COOKIE['remember_user'])) {
    $_SESSION['username'] = $_COOKIE['remember_user'];
}
?>
