<?php 

/* This is the welcome page. The user is redirected here after they succesfully log in. */

// start the session
$unique_session_name = session_name('myuniquename');
session_start($unique_session_name); 

// set the page title and include the header file
define('TITLE', 'Welcome to the J.D. Salinger Fan Club');
include('templates/header.html');

// print a greeting
print '<h2>Welcome to the J.D. Salinger Fan Club!!</h2>';
print "<p>Hello, " . $_SESSION['email'] . "</p>";



// print how long they've been logged in
date_default_timezone_set('America/New_York');
print "<p>You have been logged in since: " .  date('g:i a', $_SESSION['loggedin']) . "</p>";

// make a logout link
print '<p><a href="logout.php">Click here to logout.</a></p>';

// need the footer
include('templates/footer.html');

?>