<?php
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

if (!isset($user) || (!isset($pass))) {
	header("Location: login.php?feil");
}

if (!$user == "admin" || (!$pass == "kaos")) {
	header("Location: login.php?feil");
}


if (!$user == "admin" || ($pass == "kaos")) {
	$_SESSION['IN'] = TRUE;
	header("Location: main.php");
} else {
	header("Location: login.php?feil");
}

?>