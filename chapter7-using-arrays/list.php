<?php 

//turn the incoming string into an array
$words_array = explode(' ', $_POST['words']);

//sort the array
sort($words_array);

// turn the array back into a string
$string_words = implode(', ', $words_array);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<title>I have this sorted out</title>
 </head>
 <body>
 	<?php 
 	print "<p>An alphabetized list of your words is: $string_words</p>"
 	 ?>
 </body>
 </html>