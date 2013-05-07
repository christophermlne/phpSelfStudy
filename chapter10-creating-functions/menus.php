<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date Menus</title>
</head>
<body>
	<?php 

	function make_date_menus ($starting_year, $number_of_years=10) {
		// make the month pull down
		$months = array(1 => 'January' , 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		print '<select name = "month">';
		foreach ($months as $key => $value) {
			print "\n<option value=\"$key\">$value</option>";
		}
		print '</select>';

		// make the day pull down
		print '<select name="day">';
		for ($day=1; $day < 31; $day++) { 
			print "\n<option value=\"$day\">$day</option>";
		}
		print '</select>';

		// maek the year pull down
		print '<select name="year">';
		$start_year = date('Y');
		for ($y=$starting_year; $y < ($starting_year + $number_of_years); $y++) { 
			print "\n<option value=\"$y\">$y</option>";
		}
		print '</select>';
	}
	 ?>	
	 <form action="post">
	 		<?php make_date_menus(1977,36); ?>
	 </form>
</body>
</html>