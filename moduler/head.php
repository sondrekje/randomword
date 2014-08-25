<?php
session_start();	

if (!isset($_SESSION['IN'])) {
	header("Location: login.php?");
}

//$con=mysqli_connect("mysql8.000webhost.com", "a5927842_root", "cxdurroot123", "a5927842_swat");
$con=mysqli_connect("localhost", "root", "root", "swat");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?> 

<html>
<head>
	<title>SWAT - ACP</title>
	<link href="moduler/cxdurstyle.css" rel="stylesheet">
  <meta charset="UTF-8">
</head>
<body>
	<header>
		<div class="container">
			<h1>SWAT ACP</h1>
		</div>
	</header>
	<div class="container">
		<div class="navigate">
			<nav>
				<a href="main.php"><li>Main</li></a>
				<a href="applicants.php"><li>Applicants</li></a>
				<a href="words.php"><li>Manage existing words</li></a>
				<a href="addwords.php"><li>Add new secret word</li></a><BR>
				<a href="http://www.ls-rcr.com/swat"><li>SWAT page</li></a>
				<a href="https://ls-rcr.com/forum/viewforum.php?f=20"><li>SWAT forums</li></a><BR>
				<a href="logout.php"><li>Log out</li></a>
			</nav>
		</div>
