<?php 
// handle_reg.php
// data submitted from index.php

include('header.php');

// let's see what data we're being sent
print "<pre>";
print_r($_POST);
print "</pre>";

// Flag variable to track success
$okay = TRUE;

// validate the email address
if(empty($_POST['email'])) {
	print '<p class="error">Please enter your email address</p>';
	$okay = FALSE;
}
// validate the password
if(empty($_POST['password'])) {
	print '<p class="error">Please enter your password</p>';
	$okay = FALSE;
}
if (trim($_POST['password']) != trim($_POST['confirm'])) {
	print '<p class="error">Your confirmed password does not match the original password.</p>';
	$okay = FALSE;
}

// validate the day
if (!isset($_POST['day']) && is_numeric($_POST['day']) && $_POST['day'] <= 31 && $_POST['day'] >= 1) {
	print '<p class="error">Not a valid day.</p>';
	$okay = FALSE;
}

// validate the month
if (!isset($_POST['month']) && is_numeric($_POST['month']) && $_POST['month'] <= 12 && $_POST['month'] >= 1) {
	print '<p class="error">Not a valid month.</p>';
	$okay = FALSE;
}

// validate the year
if (is_numeric($_POST['year']) AND strlen($_POST['year']) == 4) {
	if ($_POST['year'] < 2013) {
		$age = strftime('%Y') - $_POST['year'];
	} else {
		print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
		$okay = FALSE;
	}
} else {
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = FALSE;
}

// validate the terms
if (!isset($_POST['terms'])) {
	print '<p class="error">You must accept the terms.</p>';
	$okay = FALSE;
}

//colors

 switch ($_POST['colours']) {
 	case 'red':
 		$color_type = 'primary';
 		break;
 	case 'yellow':
 		$color_type = 'primary';
 		break;
 	case 'green':
 		$color_type = 'secondary';
 		break;
 	case 'blue':
 		$color_type = 'primary';
 		break;
 	default:
 		print '<p class="error">Please select your favorite color.</p>';
 		$okay = FALSE;
 		break;
 }
 
// If there were no errors, print a success message
if ($okay == TRUE) {
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>You will turn $age this year.</p>";
	print "<p>Your favorite colour is " . "<span style=\"color:" . $_POST['colours'] . ";\">" . $_POST['colours'] . "</span>" . ", which is a $color_type color.</p>";
}

include('footer.php');

?>
