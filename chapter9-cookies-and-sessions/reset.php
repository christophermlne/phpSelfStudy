<?php 

// Delete the cookies
setcookie('font_size', '', time()-600, '/');
setcookie('font_color', '', time()-600, '/');

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reset Your Settings</title>
</head>
<body>
	<p>Your settings have been reset! Click <a href="view_settings.php">here</a> to go back to the main page.</p>
</body>
</html>