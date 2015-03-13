<!doctype html>
<html lang="en">
  <head>
    <title>Quoth the server: &ldquo;404&rdquo;</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="google-site-verification" content="gEn3cSDMkUx1RI20_8WrDJgvF8MicJqCBEgijIto8Bs" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <!-- Special thanks to Harry of http://csswizardry.com/ for his advice on markup, style and CSS -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>

  </head>
  <body>
    <header>
      <h1>Tom Hudson</h1>
      <h2>What an American might call a r&eacute;sum&eacute;</h2>
    </header>
    
    <section class="error">
      <h1>Quoth the server: &ldquo;404&rdquo;</h1>
      <p>
        The page you were trying to get to doesn't seem to exist. There&apos;s actually 
        only one page on this site at the moment, so I assume you meant to go to 
        <a href="/">that</a>.
      </p>
    </section>

    <hr/>

    <footer>
      <p>
        &copy; Tom Hudson 2011 
      </p>
    </footer>

    <?php if($_SERVER['HTTP_HOST'] === 'tomhudson.co.uk'): ?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22278243-4']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <?php else: ?>
    <!-- Here would be GA JS if we weren't in dev mode -->
    <?php endif; ?>

  </body>
</html>
