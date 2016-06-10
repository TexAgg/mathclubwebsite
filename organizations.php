<?php
/*
	organizations.php
	Information about the different undergraduate math organizations.
	
	Author: Matt Gaikema
	Date Created: 5/30/16
*/

	$pageTitle = "Organizations";
	$section = "organizations";

	$config = simplexml_load_file("resources/config.xml");
	$organizations_data = $config->organizations->item;

	include("inc/header.php");
?>

<div id="<?php echo $section;?>" class="container panel panel-default">
	<div class="panel-heading">
		<h2><?php echo $pageTitle; ?></h2>
	</div>
	
	<!-- Organizations go here. -->
	<div class="panel-group">
	
		<?php
		
			for($i = 0; $i < count($organizations_data); $i++)
			{
				// Begin panel.
				echo "<div class=\"panel panel-default\">";
				
				// Heading.
				echo "<div class=\"panel-heading\">";
				echo "<h4 class=\"panel-title\">";
				//echo "<a data-toggle=\"collapse\" href=\"#org".$i."\">";
				echo $organizations_data[$i]->name;
				echo "</a></h4></div>";
				
				// Body.
				echo "<div id=\"org".$i."\" class=\"panel-body\">";
				echo "<p>";
				echo $organizations_data[$i]->description;
				echo "</p>";
				echo "<br></br><a href=".$organizations_data[$i]->url.">".$organizations_data[$i]->url."</a>";
				echo "</div>";
				
				// End panel.
				echo "</div>";
			}
		
		?>	
		
	</div> <!--panel-group-->
	
</div>

<?php
	include("inc/footer.php");
?>	