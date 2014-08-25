<?php
session_start();

if (!isset($_SESSION['IN'])) {
	header("Location: ../login.php");
}

session_unset($_SESSION['IN']);
header("Location: main.php");
?>