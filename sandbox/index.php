<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="handle_form.php" method="post">
		<select name="title" id="">
			<option value="Mr.">Mr.</option>
			<option value="Mrs.">Mrs.</option>
			<option value="Ms.">Ms.</option>
			<input type="text" name="name" size="20">
		</select>
		<p>Email Address: <input type="text" name="email" size="20"></p>
		<p>Response: This is ...
			<input type="radio" name="response" value="excellent"> excellent
			<input type="radio" name="response" value="okay"> okay
			<input type="radio" name="response" value="boring"> boring
		</p>
		<textarea name="comments" rows="3" cols="30"></textarea>
		<br>
		<input type="hidden" name="form_page" value="index.php">
		<input type="submit" name="submit" value="Send My Feedback">

	</form>
</body>
</html>