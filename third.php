<?php
session_start();
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}
$_SESSION['visits']++;
echo 'Количество открытий страницы: ' .$_SESSION['visits'];

if ($_SESSION['visits'] >= 3) {
    header('Location: fourth.php');
    exit();    
}

