<?php
require_once 'config/conn.php';
$_SESSION = array();
session_destroy();
header("Location: login.php");
exit();
?>
