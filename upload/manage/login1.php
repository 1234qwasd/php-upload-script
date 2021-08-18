<?php
include("password.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
echo "Wrong Password To Manage Enter Password.<br>";
echo "Try Again.";
header("Refresh: 2; url=login.php");
}
ob_end_flush();
?>