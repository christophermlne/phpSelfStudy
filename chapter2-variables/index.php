<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chapter 2 - Variables</title>
</head>
<body>
  <div class="page">
    <h1>Chapter 2 - Variables</h1>
    <div class="review">
      <h2>Review</h2>
      <ol>
        <li>What kind of variable is $_SERVER an example of?
          <ul><li>$_SERVER is an example of a predefined variable.</li></ul>
        </li>
        <li>What character must all variables begin with?
          <ul><li>'$'.</li></ul>
        </li>
        <li>What characters can be used first in a variable's name? What other characters can be used in a variable's name, after the first character?
          <ul><li>Following the '$', a variable name can containing any upper or lowercase letter or an underscore.</li></ul>
        </li>
        <li>Are variable names case-sensitive or case-insensitive?
          <ul><li>Variable names are case-sensitive.</li></ul>
        </li>
        <li>What does it mean to say that a variable is scalar? What are examples of scalar variable types? What is an example of a non scalar variable type?
          <ul><li>A scalar variable can contain only one value (an integer, or a string for example). An array is a non scalar variable type.</li></ul>
        </li>
        <li>What is the assignment operator?
          <ul><li>The equal sign is the assignment operator, and it assigns a value to a variable, as in x = 5.</li></ul>
        </li>
        <li>What great debugging technique–with respect to variables–was introduced in this chapter?
          <ul><li>print_r().</li></ul>
        </li>
        <li>What is the difference between using single or double quotation marks?
          <ul><li>Items within single quotation are treated literally, whilst item within double quotation marks are evaluated.</li></ul>
        </li>
      </ol>
    </div>
    <div class="pursue">
          <h2>Pursue</h2>
          <div class="output">
            <?php 
              // content pulled from http://en.wikipedia.org/wiki/The_Son_of_Man
              $content = array(
                'title' => 'The Son of Man',
                'description' => 'Magritte painted it as a self-portrait. The painting consists of a man in an overcoat and a bowler hat standing in front of a short wall, beyond which is the sea and a cloudy sky. The man\'s face is largely obscured by a hovering green apple. However, the man\'s eyes can be seen peeking over the edge of the apple. Another subtle feature is that the man\'s left arm appears to bend backwards at the elbow.',
                 'href' => 'http://upload.wikimedia.org/wikipedia/en/e/e5/Magritte_TheSonOfMan.jpg',
                'alt' => 'A famous painting by a famous artist',
                'width' => '266',
                'height' =>'374',
                'year' => 1964,
                'type' => 'Oil on canvas',
                'artist' => 'Rene Magritte',
                'location' => 'Private Collection'
              );
            ?>
            <?php if(isset($content)): ?>
              
              <h1><?php print $content['title']; ?></h1>
              <p><span>Year Painted: </span><?php print $content['year']; ?></p>
              <p><?php print $content['description']; ?></p>
              <h2>The painting:</h2>
              <img src="<?php print $content['href'] ?>" width=<?php print $content['width'] ?> height=<?php print $content['height'] ?> alt="<?php print $content['alt'] ?>">
            
            <?php else: ?>
            
              <h1>There is no content to display.</h1>
            
            <?php endif; ?>
          </div>
    </div>
  </div>
</body>
</html>