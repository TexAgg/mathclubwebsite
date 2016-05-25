<!Doctype html>
<html lang="en">
<head>
	<title>Tamu Pi Mu Epsilon</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' type='text/css' href='styles/style.css'></link>
	
	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

	
	<!--Bootstrap stuff.-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
</head>

<body>
	<header>
	<h1>Pi Mu Epsilon</h1>
	</header>
	
	<nav class="navbar" role="navigation">
		<ul class="nav nav-tabs">
			<li role="presentation" class="home"<?php if($section=="about"){echo " on";}?>><a href="index.php">Home</a></li>
			<li role="presentation" class="calendar"<?php if(section=="calendar"){echo " on";}?>><a href="calendar.php">Calendar</a></li>
		</ul>
	</nav>