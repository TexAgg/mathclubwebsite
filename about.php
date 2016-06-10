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
		Math Club is an umbrella organization for all undergraduate <a href="organizations.php">organizations</a> in the Math Departament
		at Texas A&M.
		We hold joint monthly meetings and events.
		At these meetings, speakers are invited to share information with and talk to members.
		Often, prospective employers will visit and give presentations about their companies.
		Additionally, we sponsor the <a href="organizations.php">AMUSe</a> seminars, 
		in which guest speakers share applications of mathematics in their fields.
		We also distribute information on departmental activities and any contests or conferences.
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