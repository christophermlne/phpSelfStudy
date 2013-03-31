<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Little Gradebook</title>
</head>
<body>
  <h1>My Little Gradebook</h1>
  <?php
  $grades = array(
    'Richard' => 95,
    'Sherwood' => 82,
    'Toni' => 98,
    'Franz' => 87,
    'Melissa' => 75,
    'Roddy' => 85
  );
  function printGrades($grades) {
    foreach ($grades as $student => $grade) {
      print "$student: $grade<br />\n";
    }
  };

  // print original grades list
  print '<p>Originally the array looks like this: <br />';
  printGrades($grades);
  print '</p>';

  //sort by value in reverse order, then print again
  arsort($grades);
  print '<p>After sorting the array by value using arsort(), the array looks like this: <br />';
  printGrades($grades);
  print '</p>';
  
  //sort by key, the print again
  ksort($grades);
  print '<p>After sorting the array by key using ksort(), the array looks like this: <br />';
  printGrades($grades);
  print '</p>';
  

  $gradesString = implode('<br>',$grades);
  print $gradesString;

  ?>


</body>

</html>