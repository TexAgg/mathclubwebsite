<?php
	$pageTitle = "Bi-Weekly Math Contest";
	$section = "contest";
	
	include("inc/header.php");
?>

<div id="<?php echo $section;?>" class="container">
	<h2><?php echo $pageTitle; ?></h2>
	
	<div id="contest-about">
		<h3>About</h3>
		<p>
			Twice a month, the <a href="officers.php">vice-president</a> will send out a math problem, 
			as well as post it outside the math lounge (room 242) on the second floor of Blocker.
		</p>
		<p>
			Submit your answer either by paper in the math office next to the lounge (Blocker 241C) 
			or email to the <a href="officers.php">vice-president</a>. 
			The student who submits the first correct solution gets a free math shirt, 
			and the student who submits the most correct solutions throughout the year gets a free trip to MathFest, 
			a national math conference!	
		</p>
	</div>
	
	<div id="contest-problem" class="well">
		<h3>Current Problem</h3>
		Let \(\zeta(n)\) be defined by $$\zeta(n):=\sum_{s=1}^{\infty}\frac{1}{n^s}.$$
		Show that all the zeros of \(\zeta\) have a real part of \(-\frac{1}{2}\).
	</div>
	
</div><!--Section-->

<?php
	include("inc/footer.php");
?>	