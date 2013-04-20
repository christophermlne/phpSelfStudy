<?php 
	// start the buffer
	ob_start(); 

	// get the session if it exists
	session_start();

	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if(isset($_POST['font_size'])) {
			$font_size = $_POST['font_size'];
		} else {
			$font_size = '12px';
		}
		if(isset($_POST['font_color'])) {
			$font_color = $_POST['font_color'];
		} else {
			$font_color = '000';
		}
	} elseif (isset($_COOKIE['font_size']) && (isset($_COOKIE['font_size']))) {
		if (isset($_COOKIE['font_size'])) {
				$font_size = htmlentities($_COOKIE['font_size']);
		} else {
			$font_size = 'medium';
		}
		if (isset($_COOKIE['font_color'])) {
			$font_color = htmlentities($_COOKIE['font_color']);
		} else {
			$font_color = '000';
		}
	}
 ?>
<?php 
// handle the form if it has been submitted
if (isset($_POST['font_size'],$_POST['font_color'])) {
	setcookie('font_size', $_POST['font_size'], time()+10000000, '/');
	setcookie('font_color', $_POST['font_color'], time()+10000000, '/');
	// message
	$msg = '<p>Your settings have been entered! Click <a href="view_settings.php">here</a> to see them in action.</p>';
}
?><!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Customize your settings</title>
 	<style>
 	  body {
 	    font-size:<?php print $font_size; ?>;
 	    color:#<?php if(isset($font_color)) {print $font_color;} else {print '000';} ?>;
 	  }
 	</style>
 </head>
 <body>
 	<?php if (isset($msg)) {
 		print $msg;
 	}?>
 	<p>Use this form to set your preferences:</p>
 	<form action="customize.php" method="post">
		Font Size:
 		<select name="font_size">
 			<option value="<?php if (isset($font_size)) { print $font_size; } else { print '12px'; } ?>"><?php if (isset($font_size)) { print $font_size; } else { print '12px'; } ?></option>
 			<option value="9px">9px</option>
 			<option value="10px">10px</option>
 			<option value="11px">11px</option>
 			<option value="12px">12px</option>
 			<option value="14px">14px</option>
 			<option value="18px">18px</option>
 			<option value="21px">21px</option>
 			<option value="24px">24px</option>
 		</select>
		Font Color:
 		<select name="font_color">
 			<option value="<?php if(isset($font_color)) { print $font_color; } else { print '000'; } ?>"><?php if(isset($font_color)) { print $font_color; } else { print 'black'; } ?></option>
 			<option value="999">Gray</option>
 			<option value="0c0">Green</option>
 			<option value="00f">Blue</option>
 			<option value="c00">Red</option>
 			<option value="000">Black</option>
 		</select>
 		<input type="submit" name="submit" value="Set My Preferences">
 	</form>
</body>
</html>

 <?php // end the buffer 
 ob_end_flush(); 
 ?>