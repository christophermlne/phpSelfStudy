<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cost Calculator</title>
</head>
<body>
	<?php 

	//define a tax rate
	$tax = 8.75;

	function calculate_total ($quantity, $price) {

		global $tax;

		$total = $quantity * $price; // calculation

		$taxrate = ($tax/100) +1;
		$total = $total * $taxrate; // add the tax
		$total = number_format($total,2); // formatting
		
		return $total;
	}

	//check for form submission
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//check for values
		if (is_numeric($_POST['quantity']) AND is_numeric($_POST['price'])) {
			// call the function and print the results
			$total = calculate_total($_POST['quantity'],$_POST['price']);
			print "<p>Your total comes to $<span style=\"font-weight:bold;\">$total</span>, including the $tax percent tax rate.</p>";
		} else {
			print '<p style="color:red;">Please enter a valid quantity and price.</p>';
		}
	}
	 ?>
	 <form action="calculator.php" method="post">
	 	<p>Quantity: <input type="text" name="quantity"></p>
	 	<p>Price: <input type="text" name="price"></p>
	 	<input type="submit" name="submit" value="Calculate!">
	 </form>
</body>
</html>