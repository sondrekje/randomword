<?php
include_once("moduler/head.php");

$user = $_POST['user'];

if ($user == "admin") {
header("Location: login.php");
return;
}

if (strpos($user,'&') !== false) {
	header("Location: index.php?error=$user");
	return;
}

$response = json_decode(file_get_contents("https://ls-rcr.com/include/ajax/user_availability.php?u=$user"), true);

if (!$response["u_exists"]) {
	header("Location: index.php?error=$user");
	return;
}

$result = $con->query("SELECT word FROM applicants WHERE name='$user'");

while ($row = mysqli_fetch_array($result)) {
	$gotWord = $row['word'];
	header("Location: index.php?word=$gotWord");
	return;
}

$getword = $con->query("SELECT word FROM words ORDER BY RAND() LIMIT 1");

while ($row1 = mysqli_fetch_array($getword)) {
	$rWord = $row1['word'];
}

	$user_ip = $_SERVER['REMOTE_ADDR'];

	$insert = $con->query("INSERT INTO applicants(name, word, date, ip) VALUES('$user', '$rWord', NOW(), '$user_ip')"); 

	header("Location: index.php?word=$rWord");
?>