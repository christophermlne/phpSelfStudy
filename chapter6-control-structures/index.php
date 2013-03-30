<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chapter 6 - Control Structures</title>
</head>
<body>
  <div class="page">
    <h1>Chapter 6 - Control Structures</h1>
    <div class="review">
      <h2>Review</h2>
      <ol>
        <li>
          Why is it important to have a user confirm their password during the registration process?
          <ul>
            <li>A user may have made a typo and not realized it because the field is obscured to the user.</li>
          </ul>
        </li>
        <li>
          What is the basic structure of an if conditional in PHP? An if-else conditional? An if-elseif? An if-elseif-else?
          <ul>
            <li><b>if conditional:</b><br>
              if (condition) { statement }
            </li>
            <li><b>if else conditional:</b><br>
              if (condition) { statement } else { default statement }
            </li>
            <li><b>if-elseif conditional:</b><br>
              if (condition) { statement } elseif (condition) { statement }
            </li>
          </ul>
        </li>
        <li>
          What are the differences between the empty() and isset() functions?
          <ul>
            <li>empty() returns true if a variable has no value, a value of 0, or a value of an empty string. isset() returns TRUE if a variable exists.</li>
          </ul>
        </li>
        <li>
          What is the assignment operator? What is the equality operator?
          <ul>
            <li>The assignment operator (=) assigns a value to a variable. The equality operator (==) tests for equality in a condition.</li>
          </ul>
        </li>
        <li>
          Without knowing anything about $var, will the following conditional be TRUE or FALSE? Why?
          <pre>if($var = 'donut')</pre>
          <ul>
            <li>The result will always be true because the assignment operator is being used instead of the equality operator.</li>
          </ul>
        </li><li>
          What do these operators mean?
          <ul><li>&& -- AND</li><li>|| -- OR</li><li>! -- NOT</li></ul>
        </li>
      </ol>
    </div>
    <div class="pursue">
          <h2>Pursue</h2>
          <ol>

            <li>Q
            <ul>
              <li>A</li>
            </ul>
            </li>

          </ol>

          <div class="output">
          
            <h3>Please complete the following form to register:</h3>
            
             <!-- form goes here -->
             <form action="handle_reg.php" method="post">
              Email Address:<br /><input type="text" name="email" size="30"><br />
              Password:<br /><input type="password" name="password" size="20"><br />
              Confirm Password:<br /><input type="password" name="confirm" size="20"><br />
              Year You Were Born: <br /><input type="text" name="year" value="YYYY"><br />
              Favorite Color:<br />
              <select name="colours">
                <option value="">Pick One</option>  
                <option value="green">Green</option>
                <option value="yellow">Yellow</option>
              </select><br /> 
              <input type="checkbox" name="terms" value="Yes"> I agree to the terms (Whatever they may be). <br />
              <input type="submit" value="Register">
             </form>
          
          </div>
    </div>
  </div>
</body>
</html>