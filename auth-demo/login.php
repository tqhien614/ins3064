<?php
session_start();

// Nếu đã có session → sang home
if(isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}
?>

<h3>Đăng nhập</h3>
<form method="POST">
    <input type="text" name="username" placeholder="Tên đăng nhập..." required><br><br>
    <label>
        <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
    </label><br><br>
    <button type="submit">Login</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    // Lưu vào session
    $_SESSION['username'] = $username;

    // Nếu chọn Remember Me → lưu cookie 7 ngày
    if(isset($_POST['remember'])) {
        setcookie("remember_user", $username, time() + (7 * 24 * 60 * 60), "/");
    }

    header("Location: home.php");
    exit;
}
?>
