<?php
/*
	contest.php
	Information about the Bi-weekly math contest,
	including the current problem.
	
	Author: Matt Gaikema
	Date Created: 5/31/16
*/	

$pageTitle = "Bi-Weekly Math Contest";
$section = "contest";

include("templates/header.php");
?>

<div id="<?php echo $section;?>" class="container panel panel-default">
	<div class="panel-heading">
		<h2><?php echo $pageTitle; ?></h2>
	</div>	
	
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
		
		<?php
		/* 
			Read xml at http://mathclubtamu.blogspot.com/feeds/posts/default
			and parse it.
		*/
		
		$xml = simplexml_load_file("http://mathclubtamu.blogspot.com/feeds/posts/default");
		//var_dump($xml);
		$current = $xml->entry[0];
		
		echo "<h3>".$current->title."</h3>";
		echo "<p>".$current->content."</p>";
		
		//echo "<br></br>";
		echo "<p>";
		echo "<small>Published ".$current->published.".</small>";
		echo "<a href=\"http://mathclubtamu.blogspot.com/feeds/posts/default\">"
			."<img class=\"rss-icon\" src=\"img/feed-icon-14x14.png\"></img></a>";
		echo "</p>";
		?>	
		
	</div><!-- contest-problem-->
	
</div><!--Section-->

<?php
include("templates/footer.php");
?>	