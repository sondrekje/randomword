<?php
include_once("moduler/head.php");
?>

<meta charset="UTF-8">
<html>
<head>
<title>ACP - Words</title>
</head>
<body> 

<?php

if (isset($_GET['added'])) {
	$added = $_GET['added'];
	echo "<p><strong>$added</strong> has been added as a potential secret word.</p>";
}

$result = $con->query("SELECT * FROM words ORDER BY date DESC");

echo "<h1>Words:</h1><BR><table border='0' cellspacing='5'> 
<tr>
	<th><b>ID</b></th>
	<th>Secret word</th>
	<th>Date</th>
	<th>Remove</th>
</tr>";

echo $con->error;
while ($row = mysqli_fetch_array($result)) {
echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['word'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
	$id = $row['id'];
	$location = "remove.php?id=$id";
	echo '<td><a href="' . $location . '">Remove</td>';
echo "</tr>";
}

echo "</table>";

?>
</body>
</html>
