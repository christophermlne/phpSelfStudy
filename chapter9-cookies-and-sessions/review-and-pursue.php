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
        <li>Where does a cookie store data? Where does a session store data?
          <ul>
            <li>A cookie is stored on the client machine. A session is stored on the server. A session is considered to be more secure.</li>
          </ul>
        </li>
        <li>Name two debugging techniques when trying to solve issues involving cookies
          <ul>
            <li>Inspect the cookie using the browsers dev tool (I use chrome dev tools, so i would right click on the page and browse to the resources tab.). Another option is to do a print_r() on the $_COOKIES variable to see what values have been set.</li>
          </ul>
        </li>
        <li>How do the path and domain arguments to the setcookie() function affect the accessiblity of the cookie?
          <ul>
            <li>These parameters control on which pages and in which domain the cookie is active. For example, to have a cookie enabled only on site.com/blog or blog.site.com</li>
          </ul>
        </li>
        <li>How do you delete a cookie?
          <ul>
            <li>You delete a cookie by setcookie() and setting the value to nothing and it expiration to some time in the past. However the setcookie function must be called with the same parameters that were used to the create the cookie in the first place.</li>
          </ul>
        </li>
        <li>What function must every page call if it needs to assign or access session data?
          <ul>
            <li>session_start()</li>
          </ul>
        </li>
        <li>Why do sessions also use cookies by default?
          <ul>
            <li>The sessions ID is stored in a cookie so that the user can be tracked from page to page.</li>
          </ul>
        </li>
      </ol>
    </div>
    <div class="pursue">
          <h2>Pursue</h2>
          <ol>

            
          </ol>
    </div>
  </div>
</body>
</html>