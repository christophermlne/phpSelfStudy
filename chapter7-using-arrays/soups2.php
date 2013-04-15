<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>No Soup For You!</title>
</head>
<body>
	<h1>Mmmm... Soups</h1>
	<?php 

	$soups = array(

		'Monday' => 'Clam Chowder',
		'Tuesday' => 'White Chicken Chili',
		'Wednesday' => 'Vegetarian'
	);
	print "The soups array originally had " . count($soups) . " items <br />";

	$soups['Thursday'] = 'Chicken Noodle';
	$soups['Friday'] = 'Tomato';
	$soups['Saturday'] = 'Cream of Broccoli';

	print "After adding three more items, the total becomes " . count($soups);;

	 ?>
</body>
</html>