<?php
/*
	about.php
	Display informayion about Math Club: what is math club?
	
	Author: Matt Gaikema
	Date Created: 5/31/16
*/

	$pageTitle = "About";
	$section = "about";
	
	include("inc/header.php");
?>

<div id="<?php echo $section;?>" class="container panel panel-default">
	<div class="panel-heading">
		<h2><?php echo $pageTitle; ?></h2>
	</div>
	<p>
		Math Club is an umbrella organization for all undergraduate organizations in the Math Departament
		at Texas A&M. 
	</p>
	
	<h3 id="about-membership">Membership</h3>
	<p>
		Anyone can join Math Club just by attending the meetings,
		the dates of which can be found <a href="calendar.php">here</a>.
	</p>
	
</div><!--Section-->

<?php
	include("inc/footer.php");
?>	