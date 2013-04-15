<?php 

if (isset($_POST['words']) && $_POST['words'] != '') {
	//turn the incoming string into an array
	$words_array = explode(' ', $_POST['words']);

	//sort the array
	sort($words_array);

	// turn the array back into a string
	$string_words = implode(', ', $words_array);

	// if flag exists then it is safe to output;
	$flag = TRUE;

}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<title>I have this sorted out</title>
 </head>
 <body>
 	<?php 
 	if (isset($flag)) {
 		print "<p>An alphabetized list of your words is: </p>";
 		print '<ul>';
 		// PURSUE: print each list item without using implode();
 		foreach ($words_array as $key => $value) {
 			print '<li>' . $value . '</li>';
 		}
 		print '</ul>';
 	} else {
 		print 'No words to sort! Go back and add some';
 	}
 	 ?>
 </body>
 </html>