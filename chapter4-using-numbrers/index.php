<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chapter 4 - Using Numbers</title>
</head>
<body>
  <div class="page">
    <h1>Chapter 4 - Using Numbers</h1>
    <div class="review">
      <h2>Review</h2>
      <ol>
        <li>
          What are the four primary arithmetic operators?
          <ul>
            <li>addition (+), subtraction (-), multiplication (*), and division (/).</li>
          </ul>
        </li>

        <li>
          Why will the following code not work: print "The total is $$total";
          <ul>
            <li>The double dollar sign indicates a complex variable type. The first dollar sign must be escaped with a '\', or concatenated like this: print "The total is $" . $total;</li>
          </ul>
        </li>

        <li>
          Why must an HTML page that contains a form that's being submitted to a PHP script be loaded through a URL?
          <ul>
            <li>The form data can only be handed off to the script by a server like Apache.</li>
          </ul>
        </li>

        <li>
          What functions can be used to format numerical values? How do you format numbers to a specific number of decimals?
          <ul>
            <li>round($num);
          number_format($num, 2); <-- the second argument is the number of decimal places
          </li>
          </ul>
        </li>

        <li>
          What is the importance of operator precedence
          <ul>
            <li>Operator precedence is the order in which mathematical expressions are evaluated. An expression in parenthesis is evaluated before all other operators.
            </li>
          </ul>
        </li>

        <li>
          What are the incremental and decremental operators?
          <ul>
            <li>$var++ and $var--. Increments or decrements a value by 1.</li>
          </ul>
        </li>

        <li>
          What are the arithmetic assignment operators?
          <ul>
            <li>+=, -=, *=, /=</li>
          </ul>
        </li>
      </ol>
    </div>
    <div class="pursue">
          <h2>Pursue</h2>
          <ol>
            <li>Look up the PHP manual page for one of the new functions mentioned in this chapter. Use the links on that page to investigate a couple of other number related functions PHP has.
            <ul>
              <li>Looked up number_format();
     Related functions investigated: count_chars(); and the rather strange function levenshtein(); which returns the minimum number of characters to transform one string into another.</li>
            </ul>
          </li>
          </ol>

          <div class="output">
            <h3>Alcohol Content Calculator</h3>
            <h4>Calculate Alcohol by Volume</h4>
            <form action="handle_form.php" method="post">
              Original Gravity: (ex. 1.044)<br>
              <input type="text" name="original_gravity" size="100"><br>
              Terminal Gravity: (ex. 1.012)<br>
              <input type="text" name="terminal_gravity" size="100"><br>
              <input type="hidden" name="form_id" value="abv">
              <input type="submit" name="submit" value="Submit">
            </form>
          </div>
    </div>
  </div>
</body>
</html>