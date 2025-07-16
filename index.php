<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin/login.php");
    exit;
}
echo "<h1>Welcome to the Blog Admin Panel</h1>";
?>