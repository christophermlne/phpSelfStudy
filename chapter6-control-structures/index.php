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
        <li>What is the syntax of a for loop?
          <ul><li>for ($i=0; $i < ; $i++) { # code... }
        </li></ul>
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
              
              <p>Date of Birth:<br />
                <select name="month">
                  <option value="">Month</option>
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>&nbsp;
                <select name="day">
                  <option value="">Day</option>
                  <?php 
                    for ($i=1; $i <= 31; $i++) { 
                      print "<option value=\"$i\">$i</option>\n";
                    }
                   ?>
                </select>&nbsp;
                <input type="text" name="year" value="YYYY" size="4"><br />
              Favorite Color:<br />
              <select name="colours">
                <option value="">Pick One</option>  
                <option value="red">Red</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
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