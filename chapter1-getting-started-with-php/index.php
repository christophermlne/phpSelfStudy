<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chapter 1 - Getting Started with PHP</title>
</head>
<body>
	<div class="page">
		<h1>Chapter 1 - Getting Started with PHP</h1>
		<div class="review">
			<h2>Review</h2>
			<ol>
				<li>What is HTML? What is XHTML? Name two differences between HTML and XHTML.
					<ul><li>HTML is hypertext markup language, XHTML is eXtensible hypertext markup. xHTML is more strict about formatting than HTML. Another difference is that all tag attributes must be enclosed in quotes.</li></ul>
				</li>
				<li>What encoding is your text editor or IDE set to use? Does that match the encoding specified in your generated HTML pages?
					<ul><li>I use UTF-8 with my text editor, and make sure my pages specify charset="UTF-8"</li></ul>
				</li>
				<li>What is CSS and what is it used for?
					<ul><li>CSS is a style language used to add style to HTML elements</li></ul>
				</li>
				<li>What file extension should PHP scripts have for your particular server?
					<ul><li>.php</li></ul>
				</li>
				<li>What is meant by "Web root directory"? What is the Web root directory for your server?
					<ul><li>The web root directory is the where the server looks for web files. Anything outside of that directory is usually not accessible to the web server.</li></ul>
				</li>
				<li>How do you test PHP scripts? What happens when PHP scripts are not run through a URL?
					<ul><li>PHP scripts can only be run through the PHP interpreter, either by using a server or by executing the script through a command line tool, such as OS X Terminal.</li></ul>
				</li>
				<li>Name two ways comments can be added to PHP code. Identify some ways you would use comments.
					<ul><li>Multi-line comments can be added using the /* comment here */ syntax. Single line comments can be added by using the // comment here syntax. Comments can be used to provide documentation to the reader of the script, or to prevent lines of code from being executed by the PHP executable.</li></ul>
				</li>
			</ol>
		</div>
		<div class="pursue">
					<h2>Pursue</h2>
					<div class="output">
						<h3>Output</h3>
						<?php $content = "This text was output dynamically by PHP"; ?>
						<p>
							<?php if(isset($content)): ?>
								<?php print $content; ?>
							<?php endif; ?>
						</p>
					</div>
					<div class="code">
						<h3>Code</h3>
<pre>&lt;?php $content = "This text was output dynamically by PHP"; ?&gt;
&lt;p&gt;
	&lt;?php if(isset($content)): ?&gt;
		&lt;?php print $content; ?&gt;
	&lt;?php endif; ?&gt;
&lt;/p&gt;</pre>
					</div>
		</div>
	</div>
</body>
</html>