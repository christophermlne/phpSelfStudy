<?php 
// handle_post.php
// data submitted from index.php

include('header.php');

$form_id = $_POST['form_id'];
// let's see what data we're being sent
print "<pre>";
//print_r($_POST);
print "</pre>";

// retrieve and clean up the data from the $_POST array
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$name = $first_name . " " . $last_name;
$name = urlencode($name);
$posting = trim($_POST['posting']);
$posting = str_replace('badword', 'XXXXXX', $posting);
$words = str_word_count(strip_tags($posting));
$posting = nl2br(strip_tags($posting));

$email = urlencode($_POST['email']);

if($form_id=='forum_posting') {
	// print message
	print "<div>Thank you, $name, for 
	your posting:
	<p>$posting</p>
	<p>($words words)</p></div>";

	// make a link to another page
	print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";

} else {

	print "Your request could not be processed.";
	
}

include('footer.php');

?>