<?php
include("password.php");
session_start();
if(!isset($_SESSION["login"])){
echo "You Not Permission.";
}else{
echo "Welcome You Can Edit This Page...<br>";
echo "<a href=logout.php>Logout</a>";
}
?>
