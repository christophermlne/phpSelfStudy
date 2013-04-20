<?php 
// set the page title and include the header file
define('TITLE', 'Login');
include('templates/header.html'); 
?>

<h2>Welcom to a J.D. Saligner Fan Club</h2>

<?php 

if ($_SERVER['REQUEST_METHOD']=='POST') { 
	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		if (strtolower($_POST['email'])=='me@example.com' && ($_POST['password']=='testpass')) {
			
			// do session stuff!
			$unique_session_name = session_name('myuniquename');
			session_start($unique_session_name); 
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['loggedin'] = time();

			//destroy the buffer
			ob_end_clean();

			//redirect user to the welcome page
			header('Location: welcome.php');
			exit();

			print '<p>You are logged in! Now you can blah blah blah...</p>';
		} else { // Incorrect
			print '<p>The submitted email and address do not match those file!<br>Go back and try again.</p>';	
		}
	} else { // Forgot a field
		print '<p>Please make sure you enter both an email address and a password!<br>Go back and try again.</p>';
	}	
} else { // Display the form
	print '<form action="login.php" method="post">
		<p>Email Address: <input type="text" name="email"></p>
		<p>Password: <input type="password" name="password"></p>
		<p><input type="submit" name="submit" value="Log In!"></p>
		</form>';
}
?>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
<h2>Another Header</h2>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
 <?php include('templates/footer.html'); ?>


<p>The submitted email and password do not match.</p>

<?php 

print '<pre>'; 
print_r($_SESSION);
print '</pre>';

 ?>