<?php
include_once("moduler/head.php");
?>

<meta charset="UTF-8">
<html>
<head>
<title>ACP - Words</title>
</head>
<body> 

<p>Be cautious when adding another word, make sure it's done <strong>properly.</strong></p>
<table class="add"><form action="" method="post">
	<tbody>
		<tr>
			<td>New word: </td>
			<td><input type="text" placeholder="Secret word" name="word" class="field"></td>
		</tr>
		<tr>
			<td>Submit: </td>
			<td><button class="button" name="box_submit">Add word</button></td>
		</tr>
	</tbody>
</table></form>
<?php

if (isset($_POST['box_submit'])) {

	$newWord = $con->escape_string($_POST['word']);
	$user_ip = $_SERVER['REMOTE_ADDR'];
	
	if (strlen($newWord) < 4) {
	echo "<script>alert(\"The new secret word is too short!\");</script>";
	return;
	}
	
	$result = $con->query("INSERT INTO words(word, date, ip) VALUES ('$newWord', NOW(), '$user_ip')"); 
	echo $con->error;
	//echo "<script>alert(\"Word has been inserted into the database!\");</script>";
	header("Location: words.php?added=$newWord");
	
}

?>
</body>
</html>
