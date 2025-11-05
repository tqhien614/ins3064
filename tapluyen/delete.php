<?php
include "connection.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0; // ép kiểu an toàn
if ($id > 0) {
    mysqli_query($link, "DELETE FROM table1 WHERE id=$id LIMIT 1");
}

header("Location: index.php");
exit;
