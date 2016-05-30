<?php
	$pageTitle = "Organizations";
	$section = "organizations";
	
	$organizations_data = [];
	// http://www.w3schools.com/php/func_filesystem_fgetcsv.asp
	$file = fopen("resources/organizations.csv","r");
	
	// Add data to array.
	while(!feof($file))
	{
		$organizations_data[] = fgetcsv($file);
	}
	// Close the CSV file.
	fclose($file);
	
	// The first element is just column headers;
	// delete it.
	array_shift($organizations_data);
	
	/**
		Each value in $organizations_data has the following format:
		
		$organizations_data[n][0]: The title of the organization.
		$organizations_data[n][1]: The website.
		$organizations_data[n][2]: A description of the website.
			
		for n in count($organizations_data).
	*/
	
	include("inc/header.php");
?>

<div id="<?php echo $section;?>" class="container">
	<h2><?php echo $pageTitle; ?></h2>
	
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
				echo "<a data-toggle=\"collapse\" href=\"#org".$i."\">";
				echo $organizations_data[$i][0];
				echo "</a></h4></div>";
				
				// Body.
				echo "<div id=\"org".$i."\" class=\"panel-body\">";
				echo "<p>";
				echo $organizations_data[$i][2];
				echo "</p>";
				echo "<br></br><a href=".$organizations_data[$i][1].">".$organizations_data[$i][1]."</a>";
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