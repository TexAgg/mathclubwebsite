<?php 
/*
	index.php
	The homepage of the website.
	
	Author: Matt Gaikema
	Date Created: 5/21/16
*/
	
/*
require __DIR__ . '/vendor/autoload.php';

// Set Environmental Variables.
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
*/

$pageTitle = "Tamu Math Club";
$section = "home";
$organization = "Math Club";

$config = simplexml_load_file("resources/config.xml");
$images = $config->homeImages->item;

include("templates/header.php");
?>

<div id="<?php echo $section;?>" class="container panel panel-default">
	
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
			// Display all of the images from the CSV.
			for ($i = 0; $i < count($images); $i++) 
			{
				if($i==0)
					echo "<div class=\"item active\">";
				else
					echo "<div class=\"item\">";
				echo "<a href=\"".$images[$i]->url."\">";
				echo "<img class=\"carouselImg\" src=\"".$images[$i]->image."\"></img>";
				// Caption
				echo "<div class=\"carousel-caption\">";
				echo "<h3>".$images[$i]->header."</h3>";// Header
				echo "<p>".$images[$i]->description."</p>";// Body
				echo "</div>";//carousel-caption
				echo "</a>";
				echo "</div>"; //item
			}
			?>
		</div><!--items-->
		<!--Left and Right controls.-->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>	
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>		
	</div><!--Carousel-->
	
	<h2>Welcome to Math Club</h2>
	<!--<p>
		Math Club is an umbrella organization for all undergraduate organizations in the Math Departament
		at Texas A&M. 
	</p>-->

	<div>
		<h3>Upcoming events</h3>
		<?php
		// Get events from Google calendar. 

		// http://blog.teamtreehouse.com/how-to-debug-in-php
		//ini_set('display_errors', 'On');
		require("utils/googleCalendar.php");
		$events = GoogleCalendar::getNextEvents();
		//var_dump($events);

		echo "<ul class=\"list-group\">";

		for ($i = 0;  $i < count($events); $i++)
		{
			echo "<li class=\"list-group-item\">";

			echo "<a href='".$events[$i]['htmlLink']."'>";
			echo "<h4 class='list-group-item-heading'>"
				.$events[$i]['summary']
				."</h4>";
			echo "</a>";
			echo "<h5 class='list-group-item-heading'>";
			echo GoogleCalendar::getStartDate($events[$i]['start']);
			echo "</h5>";	
			echo "<p class='list-group-item-text'>"
				.$events[$i]['description']
				."</p>";

			echo "</li>";
		}

		echo "</ul>";
		?>
	</div><!--Events Panel-->
	
</div><!--Section-->

<?php
include("templates/footer.php");
?>