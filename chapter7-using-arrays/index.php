<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chapter 7 - Using Arrays</title>
</head>
<body>
  <div class="page">
    <h1>Chapter 7 - Using Arrays</h1>
    <div class="review">
      <h2>Review</h2>
      <ol>
        <li>What's the difference between an indexed array and an associative array?
        <ul>
          <li>An indexed array uses numbers for the index; an associative array uses strings.</li>
        </ul>
        </li>
        <li>When should you use quotation marks for an array's key or value? When shouldn't you?
        <ul>
          <li>When the key or value is a variable or is numeric, do not use quatation marks.</li>
        </ul>
        </li>
        <li>How do you print a specific array element? How do you print every element in an array?
        <ul>
          <li>Printing an element in an array can only be accomplished by referring to it's index. Example: print $list['itemfour']; Within a printed message, the array must be enclosed in curly brackets to prevent errors due to quotation marks.</li>
          <li>The entire array can most easily be printed using a foreach loop.</li>
        </ul>
        </li>
        <li>What happens if you don't use the square brackets when adding an element to an array?
        <ul>
          <li>You will overwrite the array variable.</li>
        </ul>
        </li>
        <li>What function returns the number of elements in an array?
        <ul>
          <li>count()</li>
        </ul>
        </li>
        <li>When must you use curly brackets for printing array elements?
        <ul>
          <li>When inside of a print statement, curly braces prevent conflict with the quotes in the print syntax.</li>
        </ul>
        </li>
        <li>What is the difference between the sort() and asort() functions? Between sort() and rsort()?
        <ul>
          <li>asort() preserves the key-values, while sort() does not. sort() and rsort() are simply the reverse of each other. Neither preserves key-value pairs.</li>
        </ul>
        </li>
        <li>What is the syntax for explode()? for implode()? 
        <ul>
          <li>implode('joiner', $array). explode('sep', $string);</li>
        </ul>
        </li>
      </ol>
    </div>
    <div class="pursue">
          <h2>Pursue</h2>
          <ol>

            <li>Check the manual for PHP related functions
              <ul>
                <li>array_key_exists(): checks to see if an index is in an array</li>
                <li>array_search: checks for given value and returns key is successful</li>
                <li>in_array(): checks to see if a value is in an array</li>
              </ul>
            </li>
            <li>Rewrite soups2.php
              <ul>
                <li>See <a href="soups2.php">soups2.php</a></li>
              </ul>
            </li>
            <li>Create another script that creates and displays a multi-dimensional array.
              <ul>
                <li>
                  see <a href="multi-dimensional-array.php">multi-dimensional-array.php</a>
                </li>
              </ul>
            </li>
            <li>Rewrite list.php so that so that it uses foreach instead of implode(), but still prints each sorted word on its own line in the browser. Also add some validation so that it only attempts to parse and sort the string if it has a value.
              <ul>
                <li>
                  see <a href="list.php">list.php</a>
                </li>
              </ul>
            </li>

          </ol>

          <div class="output">
          
            <h3>Some of Larry's Books</h3>
            <?php 

              $phpvqs = array(1 => 'Getting Started with PHP','Variables','HTML Forms and PHP','Using Numbers');
              $phpadv = array(1 => 'Advanced PHP Techniques','Developing Web Applications','Advanced Database Concepts','Security Techniques');
              $phpmysql = array(1 => 'Introduction to PHP','Programming with PHP','Creating Dynamic Websites','Introduction to MySQL');
              $books = array(
                'PHP VQS' => $phpvqs,
                'PHP Advanced VQP' => $phpadv,
                'PHP and MySQL VQP' => $phpmysql
                );
              
              print '<pre>';
              //print_r($books);
              print '</pre>';
              //print "<p>The name of the third chapter of my first book is <i>{$books['PHP VQS'][3]}</i></p>";
              print '<ol>';
              foreach ($books as $key => $value) {
                print '<li>' . $key . "\n" . "<ul>\n";
                foreach ($value as $items => $item) {
                  print '<li>' . $item . "</li>\n";
                } 
                print "</ul>\n</li>\n";
              }
              print '</ol>';
            ?>
             
          
          </div>
    </div>
  </div>
</body>
</html>
