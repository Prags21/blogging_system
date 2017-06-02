<?php
session_start();
unset($_SESSION['login']);
session_destroy();
echo "You are logged out successfully";

header('Location: blog.php');
?>

