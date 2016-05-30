<?php 
	$pageTitle = "Home";
	$section = "home";
	$organization = "Math Club";
	
	$images = [];
	$file = fopen("resources/homeImages.csv","r");
	
		while(!feof($file))
	{
		$images[] = fgetcsv($file);
	}

	fclose($file);
	
	array_shift($images);
	
	include("inc/header.php");
?>

<div id="<?php echo $section;?>" class="container">
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php
				for ($i = 0; $i < count($images); $i++)
				{
					if ($i==0)
						echo "<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>";
					else
						echo "<li data-target=\"#myCarousel\" data-slide-to=".$i."></li>";
				}
			?>
		</ol>
		<div class="carousel-inner" role="listbox">
			<?php
				for ($i = 0; $i < count($images); $i++) 
				{
					if($i==0)
						echo "<div class=\"item active\">";
					else
						echo "<div class=\"item\">";
					echo "<img class=\"carouselImg\" src=\"".$images[$i][2]."\"></img>";
					echo "</div>";
				}
			?>
		</div><!--items-->
		<!--Left and Right controls.-->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>	
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>		
	</div><!--Carousel-->
	
	<h2>Welcome to Math Club</h2>
	<!--<img id="homer" src="https://dl.dropboxusercontent.com/s/d9rof885miw994y/homer.jpg?dl=0"></img>-->
	
	<p>
		Math Club is an umbrella organization for all undergraduate organizations in the Math Departament
		at Texas A&M. 
	</p>
	
</div><!--Section-->

<?php
	include("inc/footer.php");
?>