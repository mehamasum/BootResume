<?php
session_start();
if(!isset($_SESSION['user'])) {
    ob_start();
    header('Location: login.php');
    ob_end_flush();
    die();
}
?>