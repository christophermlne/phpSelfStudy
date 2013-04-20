<?php 
	if (isset($_COOKIE['font_size'])) {
		$font_size = htmlentities($_COOKIE['font_size']);
	} else {
		$font_size = 'medium';
	}
	if (isset($_COOKIE['font_color'])) {
		$font_color = htmlentities($_COOKIE['font_color']);
	} else {
		$font_color = '000';
	}
 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Your Settings</title>
	<style>
		body {
			font-size:<?php print $font_size; ?>;
			color:#<?php print $font_color; ?>;
		}
	</style>
</head>
<body>

<p><a href="customize.php">Customize your settings.</a></p>
<p><a href="reset.php">Reset your settings.</a></p>


	<h1>HTML Ipsum Presents</h1>
	       
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

<h2>Header Level 2</h2>
	       
<ol>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
</ol>

<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

<h3>Header Level 3</h3>

<ul>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
</ul>

<pre><code>
#header h1 a { 
	display: block; 
	width: 300px; 
	height: 80px; 
}
</code></pre>
</body>
</html>