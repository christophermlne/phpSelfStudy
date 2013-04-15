<?php 

print '<pre>'; 
print_r($_POST);
print '</pre>';


$name = array('first'=>"{$_POST['first']}",'last'=>"{$_POST['last']}");
$physical = array('eye-colour'=>"{$_POST['eye-colour']}",'hair-colour'=>"{$_POST['hair-colour']}");
$contact = array('street'=>"{$_POST['street']}",'province'=>"{$_POST['province']}",'country'=>"{$_POST['country']}",'postal-code'=>"{$_POST['postal-code']}");

$person = array(
	'name' => $name,
	'physical' => $physical,
	'contact' => $contact,
);

print '<pre>'; 
print_r($person);
print '</pre>';

print "Hello {$person['name']['first']},<br>";
print "We have collected quite a bit of information about you.<br>";
print "You have lovely {$person['physical']['eye-colour']} eyes, for example.<br>";

print "Also, we know that your Address is: <br>";
foreach ($person['contact'] as $key => $value) {
	print '<b>' . $key . ':</b>' . ' ' . $value . '<br>';
}
	
?>