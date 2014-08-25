<?php
include_once("moduler/head.php");
?>

<meta charset="UTF-8">
<html>
<head>
<title>ACP - Applicants</title>
</head>
<body> 

<?php

$result = $con->query("SELECT * FROM applicants ORDER BY date DESC");

echo "<h1>Applicants:</h1><BR><table border='0' cellspacing='5'> 
<tr>
	<th><b>ID</b></th>
	<th>Applicant</th>
	<th>Secret word</th>
	<th>Date</th>
</tr>";

echo $con->error;
while ($row = mysqli_fetch_array($result)) {
echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['word'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}

echo "</table>";

?>
</body>
</html>
