<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
}

header("Location: dashboard.php");
exit();
?>
