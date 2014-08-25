<?php
include_once("moduler/head.php");

$id = $_GET['id'];

$con->query("DELETE FROM words WHERE id='$id'");

header("Location: words.php");

?>