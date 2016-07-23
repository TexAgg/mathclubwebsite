<?php
/*
	header.php
	This is the standard header that apears in each webpage.
	
	Author: Matt Gaikema
	Date Created: 5/21/16
*/	

// Display errors.
/*error_reporting(E_ALL);
ini_set("display_errors", 1);*/

// Compress output.
// http://php.net/manual/en/function.ob-gzhandler.php
if(!ob_start("ob_gzhandler")) ob_start();
?>
<!Doctype html>
<html lang="en">
<head>
	<title><?php echo $pageTitle;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This is optional. -->
	<!--<link rel="icon" href="img/favicon.ico"></link>-->
	
	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	
	<!--Bootstrap stuff.-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- Google font. -->
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
	<!-- Custom stylesheet. -->
	<link rel='stylesheet' type='text/css' href='/styles/style.css'></link>
	<!-- MathJax for math rendering: https://www.mathjax.org/#docs -->
	<script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
	
</head>

<body>
	<div id="site-header" class="jumbotron">
		<!-- This is also optional. It is the logo I made. -->
		<img id="header-icon" src="img/Logo.svg" width="140" class="pull-right"></img>
		<div id="header-words">
			<h1>Math Club</h1>
			<p id="site-subheader">
				Texas A&M University
			</p>
		</div><!--header-words-->
	</div><!--site-header-->
	
	<!-- Add class "navbar-fixed-top" to fix the navbar to the top. -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a role="presentation"  href="index" class="navbar-brand home<?php if($section=="about"){echo " on";}?>">Home</a>
		</div><!--navbar-header-->
		<div id="navbar" class="navbar-collapse collapse">
			<ul id="site-nav" class="nav nav-tabs">
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						About <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="about<?php if($section=="about"){echo " on";}?>"><a href="about">About</a></li>
						<li class="officers<?php if($section=="officers"){echo " on";}?>"><a href="officers">Officers</a></li>
					</ul>
				</li><!--Dropdown menu-->
				<li role="presentation" class="calendar<?php if($section=="calendar"){echo " on active";}?>"><a href="calendar">Calendar</a></li>
				<li role="presentation" class="organizations<?php if($section=="contest"){echo " on active";}?>"><a href="contest">Bi-weekly Math Contest</a></li>
				<li role="presentation" class="organizations<?php if($section=="organizations"){echo " on active";}?>"><a href="organizations">Organizations</a></li>
			</ul>
		</div><!--navbar-collapse-->
	</nav>