<?php 
// handle_reg.php
// data submitted from index.php

include('header.php');

// let's see what data we're being sent
print "<pre>";
print_r($_POST);
print "</pre>";

// this script receives seven different values from index.php: email,password,confirm,year, terms, colours, submit 

// address error management, if you want

// Flag variable to track success
$okay = TRUE;

// If there were no errors, print a success message

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
if ($_POST['password'] != $_POST['confirm']) {
	print '<p class="error">your confirmed password does not match the original password.</p>';
	$okay = FALSE;
}
// check that they were born before the current year
if ($_POST['year'] >= 2011) {
	print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
	$okay = FALSE;
}

if(is_numeric($_POST['year'])) {
	$age = 2013 - $_POST['year'];
} else {
	print '<p class="error">Please enter the year you were born as four digits.</p>';
}

if ($okay == TRUE) {
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>You will turn $age this year.</p>";
}

include('footer.php');

?>