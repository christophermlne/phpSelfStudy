<?php 

// debugging value. remove for production.
ini_set('display_errors', 1);

// this page receives its data from index.php

// create shorthand versions of the variables
if($_POST['form_page']=='index.php') {
	$title = $_POST['title'];
	$name =  stripslashes($_POST['name']);
	$email = $_POST['email'];
	$response = $_POST['response'];
	$comments = stripslashes($_POST['comments']);
	$form_page = $_POST['form_page'];
} else {
	print "It is not nice to try to hack people";
}

//print the output
print "<p>Thank you $title $name for your comments</p>"; 
print "<p>You stated that you found this example to be '$response' and added:<br>$comments</p>";

//print phpinfo();
?>


