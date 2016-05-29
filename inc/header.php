<!Doctype html>
<html lang="en">
<head>
	<title>Tamu Math Club</title>
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
	<div id="site-header" class="jumbotron">
		<header class="page-header">
		<h1>Math Club</h1>
		</header>
	</div>
	
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<a role="presentation"  href="index.php" class="navbar-brand home<?php if($section=="about"){echo " on active";}?>">Home</a>
		</div>
		<ul class="nav nav-tabs">
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					About <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li class="officers<?php if($section=="officers"){echo " on";}?>"><a href="officers.php">Officers</a></li>
				</ul>
			</li><!--Dropdown menu-->
			<li role="presentation" class="calendar<?php if($section=="calendar"){echo " on active";}?>"><a href="calendar.php">Calendar</a></li>
			<li role="presentation" class="organizations<?php if($section=="organizations"){echo " on active";}?>"><a href="organizations.php">Organizations</a></li>
		</ul>
	</nav>