<?php 
// calculate alcohol by volume 
// data submitted from index.php

include('header.php');

$form_id = $_POST['form_id'];

if($form_id=='abv') {

	$terminal_gravity = $_POST['terminal_gravity'];
	$original_gravity = $_POST['original_gravity'];
	$alcohol_by_volume = round(((($original_gravity - $terminal_gravity) / 0.75) * 100), 2);

	print "<h2>" . "Alcohol by Volume" . "</h2>";
	print "<hr>";
	print "Original Gravity: " . $original_gravity . "<br>";
	print "Terminal Gravity: " . $terminal_gravity . "<br>";
	print "Alcohol by Volume: " . $alcohol_by_volume . "%";

} else {
	// if form_id is something else, calculate that here. for example, there could be an 'Alcohol by weight' calcultor in a different form on the same page.
}

include('footer.php');

?>