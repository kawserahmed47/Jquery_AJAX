<?php
 $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../classes/Project.php');
	$db  = new Database();
	$pro = new Project();
?>
<!doctype html>
<html>
<head>
	<title>Ajax Essential Projects</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/user.js"></script>
	<script src="js/textbox.js"></script>
	<script src="js/password.js"></script>
	<script src="js/autorefresh.js"></script>
	<script src="js/livesearch.js"></script>

</head>
<body>

<div class="project">
	<section class="headeroption">
		<h2>PHP OOP, jQuery, Ajax Essential Projects</h2>
	</section>
<section class="maincontent">