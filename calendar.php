<?php
	$pageTitle = "Calendar";
	$section = "calendar";
	include("inc/header.php");
?>

<div id=<?php echo $section;?>>
	<h2><?php echo $pageTitle; ?></h2>
	<!-- Google calendar -->
	<iframe src="https://calendar.google.com/calendar/embed?showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=4kl90qkd5vdkrr2pm2f0np8tk0%40group.calendar.google.com&amp;color=%23691426&amp;ctz=America%2FChicago" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>

<?php
	include("inc/footer.php");
?>	