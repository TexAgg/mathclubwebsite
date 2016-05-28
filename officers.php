<?php
	$pageTitle = "Officers";
	$section = "officers";
	
	$officers = [];
	$file = fopen("resources/officers.csv","r");
	
	// Add data to array.
	while(!feof($file))
	{
		$officers[] = fgetcsv($file);
	}
	// Close the CSV file.
	fclose($file);
	
	// The first element is just column headers;
	// delete it.
	array_shift($officers);
	
	/**
		Each element in officers has the following format:
		
		$officers[n][0]: The position.
		$officers[n][1]: The name of the officer.
		$officers[n][2]: The email of the officer.
		$officers[n][3]: The url of a picture of the officer.
		
		for n in count($officers).
	*/
	
	include("inc/header.php");
?>

<div id="<?php echo $section;?>" class="container">
	<h2><?php echo $pageTitle; ?></h2>
	
	<!-- // http://getbootstrap.com/components/#media -->
	<ul class="media-list">
		<?php
			
			for($i = 0; $i < count($officers); $i++)
			{
				echo "<li class=\"media\">";
				
				// Media object.
				echo "<div class=\"media-left\">";
				echo "<a href=\"#\">";
				echo "<img class=\"officer-pic media-object\" src=".$officers[$i][3].">";
				echo "</a>";
				echo "</div>";
				
				echo "<div class=\"media-body\">";
				echo "<h4 class=\"media-heading\">".$officers[$i][0]."</h4>";
				echo $officers[$i][1];
				echo "<br><a href=\"mailto:".$officers[$i][2]."\">".$officers[$i][2]."</a>";
				echo  "</div>";
			}
			
		?>
	</ul><!--Media-list-->
	
</div><!--Section-->	

<?php
	include("inc/footer.php");
?>	