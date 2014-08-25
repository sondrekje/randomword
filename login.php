<html>
<head>
	<title>SWAT page</title>
    <link href="moduler/cxdur.css" rel="stylesheet">
	<meta charset="UTF-8">
</head>
<body id="login">
<h1>SWAT<br><span>Control Panel</span></h1>
	<?php if(isset($_GET["feil"])) echo "<p><strong>Username / password is incorrect.</strong></p>"; ?><BR>

		<form method="post" action="dologin.php" id="login">
			<input type="text" placeholder="Username" name="user" class="field"><BR>
			<input type="password" placeholder="Password" name="pass" class="field"><BR>
			<input type="submit" value="Log in" class="button">
		</form>
		
	<p>This was just something CXdur created for <strong>fun</strong>, and currently it's not used for anything at all.</p>

</body>
</html>