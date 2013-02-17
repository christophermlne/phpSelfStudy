<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chapter 3 - HTML Forms and PHP</title>
</head>
<body>
  <div class="page">
    <h1>Chapter 3 - HTML Forms and PHP</h1>
    <div class="review">
      <h2>Review</h2>
      <ol>
        <li>What is the significance of a form's action attribute?
          <ul>
            <li>
              The action attribute specifies where the form's data is to be sent
            </li>
          </ul>
        </li>
        <li>What is the significance of a form's method attribute? Is it more secure to use GET or POST? Which method type can be bookmarked in the browser?
          <ul>
            <li>
              A form's method indicates how the data is to be sent back to the server: encoded through the url or invisibly to the user.
            </li>
          </ul>
        </li>
        <li>What predefined variable will contain the data from a form submission? Note: There are multiple answers.
          <ul>
            <li>
              $_GET or $_POST, depending on which method was used in the originating document
            </li>
          </ul>
        </li>
        <li>Why must an HTML page that contains a form that's being submitted to a PHP script be loaded through a URL?
          <ul>
            <li>
              On submit, the form's data must be passed to the destination script. This can only be handled by the server.
            </li>
          </ul>
        </li>
        <li>Under what circumstances will attempts to enable display_errors in a script not succeed? Why is it not secure to enable display_errors on live sites?
          <ul>
            <li>
              A fatal error could prevent the script from executing and consequently, errors will not be displayed. PHP errors can contain sensitive information and therefore pose a security risk.
            </li>
          </ul>
        </li>
      </ol>
    </div>
    <div class="pursue">
          <h2>Pursue</h2>
          <div class="output">
            <h3>Create Blog Post</h3>
            <form action="handle_form.php" method="post">
              Title<br>
              <input type="text" name="title" size="100"><br>
              Body<br> 
              <textarea name="body" id="" cols="30" rows="10"></textarea><br>
              Publication Status: <br>
              <select name="status" id="">
                <option value="published" >Published</option>
                <option value="draft" >Draft</option>
                <option value="promoted" >Promoted</option>
              </select><br>
              <input type="hidden" name="form_page" value="index.php">
              <input type="submit" name="submit" value="Submit">
            </form>
          </div>
    </div>
  </div>
</body>
</html>