<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chapter 5 - Using Strings</title>
</head>
<body>
  <div class="page">
    <h1>Chapter 5 - Using Strings</h1>
    <div class="review">
      <h2>Review</h2>
      <ol>
        <li>
          How do you create a string?
          <ul>
            <li>Create string by enclosing something in quotation marks and assign it to variable</li>
          </ul>
        </li>

        <li>
          What are the differences between using single and double quotation marks?
          <ul>
            <li>With single quotation marks, the string is treated literally. With double quotation marks, the string is interpreted.</li>
          </ul>
        </li>

        <li>
          What is the concatenation operator? What is the concatenation assignment operator?
          <ul>
            <li>The concatenation operator ( . ) combines strings. The concatentation assignment operator ( .= ) takes the string being operated on and appends to the end of it with the new string.</li>
          </ul>
        </li>

        <li>
          What is the impact of having a newline in a string printed to the browser? How do you convert a newline characer to a break tag?
          <ul>
            <li>The newline character will have no effect on the rendered HTML output. Instead, newlines characters should be converted to br tags using the nl2br() function.</li>
          </ul>
        </li>

        <li>
          What problems can occur when HTML is entered into form elements whose values will later be printed back to the Web browser? What steps can be taken to sanctify submitted form data?
          <ul>
            <li>If the submitted form data contains Javascript, then arbitrary code could be executed by the browser, posing a security risk. The strip_tags() function can be used to render the injected code inoperable.</li>
          </ul>
        </li>

        <li>
          What function makes data safe to pass in a URL?
          <ul>
            <li>urlencode()</li>
          </ul>
        </li>

        <li>
          How do you escape problematic characters within a string? What happens if you do not escape them?
          <ul>
            <li>You can escape a special character in a string by preceding it with a "\".</li>
          </ul>
        </li>

        <li>
          The characters in a string are indexed beginning at what number?
          <ul>
            <li>The index for a string begins at 0.</li>
          </ul>
        </li>

        <li>
          What does the trim() function do?
          <ul>
            <li>trim() strips whitespace from the beginning and end of a string.</li>
          </ul>
        </li>
      </ol>
    </div>
    <div class="pursue">
          <h2>Pursue</h2>
          <ol>

            <li>Look up in the PHP manual page for one of the new functions mentioned in this chapter. Use the links on that page to examine a couple of other string-related functions PHP has.
            <ul>
              <li>
                Looked up trim();
                Related function: <br />explode() – converts a string into an array, using the specified delimiter.<br />
                implode() – opposite of explode(). Flattens and array into a string.
              </li>
            </ul>
            </li>

          </ol>

          <div class="output">
          
            <h3>Forum Posting</h3>
            <h4>Please use this form to submit your posting.</h4>
            
             <form action="handle_post.php" method="post">
              <input type="hidden" name="form_id" value="forum_posting" />
              <p>First Name: 
                <input type="text" name="first_name" size="20"></p>
              <p>Last Name: 
                <input type="text" name="last_name" size="20"></p>
              <p>Email Address: 
                <input type="text" name="email" size="30"></p>
              <p>Posting: 
                <textarea name="posting" cols="30" rows="9"></textarea></p>
              <input type="submit" name="submit" value="Send My Posting!" />
             </form>
          
          </div>
    </div>
  </div>
</body>
</html>