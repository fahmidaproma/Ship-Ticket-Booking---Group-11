<?php
require_once "signupController.php";
$username = $_GET["username"];
$res = checkUsernameValidity($username);
echo $res;
?>