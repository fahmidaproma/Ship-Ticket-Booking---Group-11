<?php
require_once "managerSignupController.php";
$username = $_GET["username"];
$res = checkUsernameValidity($username);
echo $res;
?>