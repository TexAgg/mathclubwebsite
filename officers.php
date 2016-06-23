<?php
/*
	officers.php
	Information about the current officers.
	
	Author: Matt Gaikema
	Date Created: 5/25/16
*/
	
$pageTitle = "Officers";
$section = "officers";

$config = simplexml_load_file("resources/config.xml");
$officers = $config->officers;

include("templates/header.php");
?>

<div id="<?php echo $section;?>" class="container panel panel-default">
	<div class="panel-heading">
		<h2><?php echo $pageTitle; ?></h2>
	</div>
	
	<!-- // http://getbootstrap.com/components/#media -->
	<ul class="media-list">
		<?php
			
		foreach($officers->item as $value)
		{	
			echo "<li class=\"media\">";
			
			// Media object.
			echo "<div class=\"media-left\">";
			echo "<a href=\"#\">";
			echo "<img class=\"officer-pic media-object\" src=".$value->image.">";
			echo "</a>";
			echo "</div>";
			
			echo "<div class=\"media-body\">";
			echo "<h4 class=\"media-heading\">".$value->position."</h4>";
			echo $value->name;
			echo "<br><a href=\"mailto:".$value->email."\">".$value->email."</a>";
			echo  "</div>";
			
			echo "</li>";
		}
		?>
	</ul><!--Media-list-->
	
</div><!--Section-->	

<?php
include("templates/footer.php");
?>	