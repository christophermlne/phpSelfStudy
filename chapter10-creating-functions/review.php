<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chapter 9 - Cookies and Sessions</title>
</head>
<body>
  <div class="page">
    <h1>Chapter 9 - Cookies and Sessions</h1>
    <div class="review">
      <h2>Review</h2>
      <ol>
        <li>What is the basic syntax of a user defined function?
        	<ul>
        		<li><code>function ($args) { //code }</code></li>
        	</ul>
        </li>
        <li>What naming rules must your own functions abide by?
        	<ul>
        		<li>No spaces, case-insensitive, does not begin with a dollar sign, must begin with a letter</li>
        	</ul>
        </li>
        <li>What naming rules must function arguments abide by?
        	<ul>
        		<li>Must obey the same rules as variables</li>
        	</ul>
        </li>
        <li>How do you provide a default value for a function's argument?
        	<ul>
        		<li><code>function ($arg1, $arg2 = 'value') { //code } </code></li>
        	</ul>
        </li>
        <li>In the example code in the 'understanding variable scope' section of the chapter, why does the codue use \$n? What would happen if the backslash wasn't there?
        	<ul>
        		<li>the backslash escapes the '$' to prevent the variable from being interpreted, since is meant to be treated literally.</li>
        	</ul>
        </li>
        <li>What is variable scope? What scope does a function argument variable have?
        	<ul>
        		<li>Variable scope is the namespace of the variable. A function argument variable has local scope within the function.</li>
        	</ul>
        </li>
        <li>What scope does a variable in an included file have? Note: this ia tricky one!
        	<ul>
        		<li>It would depend on where in the included file the variable was declared. If in a function, it would have local scope. If outside a function, it would have the same scope as if declared in the parent file outside of a function.</li>
        	</ul>
        </li>
      </ol>
    </div>
    <div class="pursue">
          <h2>Pursue</h2>
          <ol>
			<li>Make your own custom function
				<ul>
					<li>I made a function to generate a select list, taking an array to use to populate the list. See sticky1.php --> make_select_input($name, $label, $list)</li>
				</ul>
			</li>
            
          </ol>
    </div>
  </div>
</body>
</html>