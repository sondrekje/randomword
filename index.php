<html>
<head>
	<title>Apply for SWAT</title>
    <link href="moduler/cxdur.css" rel="stylesheet">
	<meta charset="UTF-8">
</head>

<body id="login">
<h1>SWAT<br><span>Secret Word Retriever</span></h1>
	<?php if (isset($_GET['error'])) echo "<p id=\"error\">The specified user " . $_GET['error'] . " does not exist. Please do not abuse this feature.</p>"; ?>
	<?php if (isset($_GET["word"])) echo "<p>Your secret word is <strong>". $_GET['word'] . "</strong>.</p>"; ?><BR>

		<form method="post" action="request.php" id="login">
			<input type="text" placeholder="Username" name="user" class="field"><BR>
			<input type="submit" value="Request" class="button">
		</form>
		
	<p>Retrieve your secret word for your application by entering <strong>your</strong> in-game name.</p>

</body>
</html>