<?php  
	include 'modular.html';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IA Lessons</title>
	<link rel="stylesheet" type="text/css" href="IAstyle.css">
	<style type="text/css">
		.subject {
			color: rgb(255, 0, 0);
			margin-top: 1%;
		}
		.container {
			border: rgb(0, 100, 255) 1px solid;
			padding: 2%;
			margin-top: 2%;
		}
		h3 {
			margin-top: 0.5%;
		}
	</style>
</head>
<body>
	<center>
		<h1><u>Information Academy</u></h1>
		<h2>Lessons:</h2>
		<div class='content'>
			<h2 id='header'>Lessons:</h2>

			<div class='container'>
				<h2 class='subject'>Software Engineering</h2>
					<h3><a href="IApythonLessons.php">Python Lessons</a></h3>
					<h3><a href="#">Java Lessons</a></h3>
					<h3><a href="#">C++ Lessons</a></h3>
			</div>

			<div class='container'>
				<h2 class='subject'>Electrical Engineering</h2>
					<h3><a href="#">Arduino Lessons</a></h3>
					<h3><a href="#">Raspberry Pi Lessons</a></h3>
			</div>

			<div class='container'>
				<h2 class='subject'>Web-Development</h2>
					<h3><a href="#">HTML Lessons</a></h3>
					<h3><a href="#">CSS Lessons</a></h3>
					<h3><a href="#">JavaScript Lessons</a></h3>
					<h3><a href="#">PHP Lessons</a></h3>
			</div>
			<br />
		</div>
	</center>
	<footer>Information Academy 2017  |  Created By: Joey Burgee</footer>
</body>
</html>