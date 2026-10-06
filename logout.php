<?php
require_once 'conn.php';
$_SESSION = array();
session_destroy();
header("Location: login.php");
exit();
?>
