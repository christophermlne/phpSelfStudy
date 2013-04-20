<?php 

// start the sesssion
$unique_session_name = session_name('myuniquename');
session_start($unique_session_name); 

// delete the session variable
unset($_SESSION);
setcookie('myuniquename', '',time()-600,'/');

// define page title, include header
define('TITLE', 'Logout');
include('templates/header.html');

 ?>
<h2>Welcome to the J.D. Salinger Fan Club!</h2>
<p>You are now logged out.</p>