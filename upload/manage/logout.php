<?php
session_start();
ob_start();
session_destroy();
echo "Logout Complete!";
header("Refresh: 2; url=login.php");
ob_end_flush();
?>