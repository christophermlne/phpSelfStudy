<?php  

// debugging value. remove for production.
ini_set('display_errors', 1);

if($_POST['form_page']=='index.php') {
	$status = $_POST['status'];
	$body = $_POST['body'];
	$title = $_POST['title'];
} else {
	print "Smells fishy. Abort!!";
}

?>
<h1>Your Blog Post:</h1>
<h2><?php print $title; ?></h2>
<p>Publication Status: <?php print $status; ?></p>
<p><?php print $body; ?></p>