<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chapter 8 - Creating Web Applications</title>
</head>
<body>
  <div class="page">
    <h1>Chapter 8 - Creating Web Applications</h1>
    <div class="review">
      <h2>Review</h2>
      <ol>
        <li>What is the difference between include() and required()?
          <ul>
            <li>require() will halt the script upon failure while include() merely emits a warning</li>
          </ul>
        </li>
        <li>Why can you put PHP code into an included file even when it uses an .html extension?
          <ul>
            <li>Because include() inserts the content of the file into the parent file. It is as if that content always existed there. PHP doesn't care about he file extension of the included script.</li>
          </ul>
        </li>
        <li>What are the differences between relative and absolute references to a file?
          <ul>
            <li>Relative references are relative to the script's location in the file system. Absolute references are complete paths from the doc root.</li>
          </ul>
        </li>
        <li>How do you define a constant? Are constant names case-sensitive or case-insensitive? How do you check if a constant has been defined?
          <ul>
            <li>Constants are defined using define(). Constant names are case sensitive by default, although this can be changed by supplying a second argument to the define() function.</li>
          </ul>
        </li>
        <li>What is the epoch? what is a timestamp?
          <ul>
            <li>The epoch is a date – Jan 1, 1970, after which all seconds are counted. A timestamp is a freeze of this running tally of seconds since that date in 1970.</li>
          </ul>
        </li>
        <li>What is the significance of $_SERVER['REQUEST_METHOD']?
          <ul>
            <li>$_SERVER['REQUEST_METHOD'] stores the method that was used to access the page, either get or post</li>
          </ul>
        </li>
        <li>How do you have a form remember previously submitted values
          <ul>
            <li>You prepopulate the values of the form fields by accessing the $_POST data.</li>
          </ul>
        </li>
        <li>How can you see a PHP error that occurs within a form element (e.g.,when presetting a form's element's value)>
          <ul>
            <li>Coudn't find this information.</li>
          </ul>
        </li>
        <li>What does the "headers already sent" error mean? How can it be prevented?
          <ul>
            <li>It means that data has already been sent before the header() function was called. Output buffering must be used to hold back the sending of html until the buffering is turned off.</li>
          </ul>
        </li>
      </ol>
    </div>
    <div class="pursue">
          <h2>Pursue</h2>
          <ol>

            <li>Modify header and footer files as per pursue question. Changes are in comments in each file.
              <ul>
                <li><a href="templates/header.html">header.html</a></li>
                <li><a href="templates/footer.html">footer.html</a></li>
              </ul>
            </li>
            <li>Change the date display in header.html:
              <ul>
                <li><a href="templates/header.html">header.html</a></li>
              </ul>
            </li>
  
          </ol>

          <div class="output">
          
            <h3>title</h3>
            <?php //code ?>
          
          </div>
    </div>
  </div>
</body>
</html>
