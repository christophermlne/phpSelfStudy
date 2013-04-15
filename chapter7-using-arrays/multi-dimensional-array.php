<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multi Dimensional Arrays</title>
  <link rel="stylesheet" href="multi-dimensional-array.css">
</head>
<body>
   <form action="multi-dimensional-array-handler.php" method="post">
    <?php 
      /*
        values prepopulated to make dev go quicker
      */

     ?>
    <fieldset>
      <legend>Name</legend>
      First:<input type="text" name="first" value="Sammy" placeholder="John"><br>
      Last:<input type="text" value="Sampleton" name="last">
    </fieldset>
    
    <fieldset>
      <legend>Physical</legend>
      Eye Colour:<input type="text" value="Blue" name="eye-colour"><br>
      Hair Colour:<input type="text" value="Brown" name="hair-colour">
    </fieldset>
    
    <fieldset>
      <legend>Contact</legend>
      Street:<input type="text" value="1234 Common Lane" name="street"><br>
      Province:<input type="text" value="Ontario" name="province"><br>
      Country:<input type="text" value="Canada" name="country"><br>
      Postal Code:<input type="text" value="L82 6G2" name="postal-code">
    </fieldset>
    <input type="submit" value="submit" name="submit">
   </form>
</body>
</html>