<?php 

print '<pre>'; 
print_r($_POST);
print '</pre>';

 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Add an event</title>
 </head>
 <body>
 	<p>You want to add an event called <?php print strip_tags($_POST['name']); ?>, which takes place on: <br>
	
	<?php 
	if (isset($_POST['days']) && (is_array($_POST['days']))) {
		foreach ($_POST['days'] as $key => $day) {
			print "$day<br />\n";
		}
	} else {
		print 'Please select at least one day.';
	}
	 
	?>
	</p>
 </body>
 </html>