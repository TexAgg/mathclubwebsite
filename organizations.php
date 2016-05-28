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
	
	include("inc/header.php");
?>

<div id="<?php echo $section;?>" class="container">
	<h2><?php echo $pageTitle; ?></h2>
	
	<div class="panel-group">
		
		<!-- Organizations go here. -->
		<?php
			var_dump($organizations_data);
		?>
		
	</div>
	
</div>

<?php
	include("inc/footer.php");
?>	