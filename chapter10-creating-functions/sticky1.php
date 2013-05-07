<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sticky Text Inputs</title>
</head>
<body>
	<?php 
	function make_text_input ($name,$label,$size=20,$type='text') {
		print '<p><label>' . $label . ':';
		//begin the text input
		print '<input type="' . $type . '" name ="' . $name . '" size=' . $size . '"';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (isset($_POST[$name])) {
				print ' value="' . htmlspecialchars($_POST[$name]) . '"';
			}
		} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
			if (isset($_GET[$name])) {
				print ' value="' . htmlspecialchars($_GET[$name]) . '"';
			}
		}
		print '/></label></p>';
	}
	?>
	<?php function make_select_input($name, $label, $list) {
		print '<p>' . $label . ': ';
		print '<select name = "' . $name . '">';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (isset($_POST['province'])) {
				print ' value="' . htmlspecialchars($_POST['province']) . '"';
			}
		} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
			if (isset($_GET['province'])) {
				print ' value="' . htmlspecialchars($_GET['province']) . '"';
			}
		}
		foreach ($list as $key => $value) {
			print "\n<option value=\"$key\">$value</option>";
		}
		print '</select>';


	} ?>
  <form action="sticky1.php" method="post">
	 	<?php make_text_input('first_name', 'First Name',20,'text'); ?>
	 	<?php make_text_input('last_name', 'Last Name',30,'text'); ?>
	 	<?php make_text_input('email','Email Address',50,'text'); ?>
	 	<?php make_text_input('password', 'Enter password', 8, 'password') ?>
		<?php $provinces = array(1 => 'Ontario','Quebec','British Columbia', 'Alberta', 'Manitoba', 'Saskatchewan', 'Nova Scotia', 'New Brunswick', 'Newfoundland', 'PEI', 'Northwest Territories', 'Yukon', 'Nunavut'); ?>
	 	<?php make_select_input('province', 'Select your Province', $provinces); ?><br>
	 	<input type="submit" name="submit" value="Register!">
  </form>
</body>
</html>