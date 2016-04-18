<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head prefix="profile: http://ogp.me/ns/profile#">
    <title>Tom Hudson &mdash; What an American might call a r&eacute;sum&eacute;</title>
    <?php
        $proto = 'http://';
        if ($_SERVER['HTTP_HOST'] == 'tomhudson.co.uk'){
            $proto = 'https://';
        }
        $host = $proto.$_SERVER['HTTP_HOST'];
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="google-site-verification" content="gEn3cSDMkUx1RI20_8WrDJgvF8MicJqCBEgijIto8Bs" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="theme-color" content="#119C11">
    <meta property="og:title" content="Tom Hudson" />
    <meta property="og:description" content="What an American might call a r&eacute;sum&eacute;" />
    <meta property="og:type" content="profile" />
    <meta property="profile:first_name" content="Tom" />
    <meta property="profile:last_name" content="Hudson" />
    <meta property="og:url" content="<?=$host?>/" />
    <meta property="og:image" content="<?=$host?>/images/sheep-solid.jpg" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@TomNomNom" />
    <meta name="twitter:title" content="Tom Hudson" />
    <meta name="twitter:description" content="What an American might call a r&eacute;sum&eacute;" />
    <meta name="twitter:image" content="<?=$host?>/images/sheep-solid.jpg" />
    <link rel="icon" sizes="64x64" href="/favicon.ico" type="image/x-icon">

    <!-- Special thanks to Harry of http://csswizardry.com/ for his advice on markup, style and CSS -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif|Droid+Sans"/>
    <link rel="stylesheet" type="text/css" href="/css/main.css"/>

  </head>
  <body>
    <header>
      <h1>Tom Hudson</h1>
      <p>What an American might call a r&eacute;sum&eacute;</p>
    </header>

    <section class="info" id="info">
      <h2><a href="#info">Who I am</a></h2>
      <p>
        I am a geek from Bradford, UK. I work at Sky Betting &amp; Gaming, where I lead the Delivery Engineering team.
        I like to learn things, write <a href="https://github.com/search?utf8=%E2%9C%93&q=user%3Atomnomnom+language%3Aphp&type=Repositories&ref=searchresults">quite a bit of PHP</a>,
        <a href="https://github.com/search?utf8=%E2%9C%93&q=user%3Atomnomnom+language%3Ago&type=Repositories&ref=searchresults">a bit of Go</a>,
        and <a href="https://tomnomnom.com">I like to write words too</a>.
      </p>

    </section>

    <hr/>

    <section class="info" id="talks">
      <h2><a href="#talks">Things I&rsquo;ve talked about</a></h2>
      <p>
        I&rsquo;ve spoken on a variety of subjects at several user groups and conferences,
        like <a href="http://leedsphp.org/">LeedsPHP</a>,
        <a href="http://barcampbarnsley.eventbrite.com/">BarCamp Barnsley</a>,
        <a href="http://thedigitalbarn.co.uk/">The Digital Barn</a>, and
        <a href="https://heyst.ac/">Hey!Stac</a>.
        I&rsquo;ve talked about:
      </p>

        <ul>
            <li><a href="https://github.com/TomNomNom/PHP-RockBand-Drums">Writing a RockBand drum game in PHP</a></li>
            <li><a href="https://github.com/TomNomNom/PHP-Evolution-Sim">Simulating evolution in PHP</a></li>
            <li><a href="https://github.com/TomNomNom/Talk---New-stuff-in-PHP-5.4">New stuff in PHP 5.4</a></li>
            <li><a href="https://github.com/TomNomNom/Writing-Testable-PHP">Writing Testable PHP</a></li>
            <li><a href="https://github.com/TomNomNom/node-in-production-talk">Using Node.js in production</a></li>
            <li><a href="https://github.com/TomNomNom/distributing-work-with-rabbitmq">Distributing work with RabbitMQ</a></li>
            <li><a href="https://github.com/TomNomNom/n-things-about-mongo">MongoDB</a></li>
            <li><a href="https://github.com/TomNomNom/git-talk">Git</a></li>
            <li><a href="https://github.com/TomNomNom/All-About-SPL">SPL</a></li>
            <li><a href="https://github.com/TomNomNom/build-a-vm-talk">Building a simple Language VM</a></li>
        </ul>

        <p>
            If you&rsquo;ve got an event you&rsquo;d like me to speak at, please <a href="#contact">contact me</a>.
        </p>

    </section>

    <hr/>

    <section class="info" id="work">
      <h2><a href="#work">Places I have worked</a></h2>

      <h3>Sky Betting &amp; Gaming</h3>
      <p>
        I&rsquo;ve worked at Sky Betting &amp; Gaming since 2011 when I joined as a software engineer. 
        Now, five years later, I lead the Delivery Engineering team - who try their best to make it
        easier for people to deliver software. We build tools, train people, and streamline processes.
      </p>

      <h3>FrogTrade Ltd</h3>
      <p>
        I worked at FrogTrade from 2008 until 2011. Starting as an Application Developer I helped
        iron the bugs out of their rather sizeable PHP codebase, and added many new features. Later I became
        Software Architect and provided direction on writing maintainable, testable code.
      </p>

      <h3>Primary Technology</h3>
      <p>
        I originally started at <a href="http://www.primaryt.co.uk/">Primary Technology</a> as a network
        engineer in 2005; maintaining Windows-based networks in Bradford primary schools. I later became
        the Hosted Services Director where I managed an Exchange-based hosted email system, remote access
        system and wrote a web-based ticket management system.
      </p>
    </section>

    <hr/>

    <section class="info" id="opensource">
      <h2><a href="#opensource">Open Source</a></h2>
      <p>
        I&rsquo;ve not worked on as much Open Source stuff as I would like, but here are a few things
        that I have worked on.
      </p>

      <h3>Phargs</h3>
      <p>
        I wrote <a href="https://github.com/TomNomNom/phargs">Phargs</a> to take the pain out of writing <abbr title="Command Line Interface">CLI</abbr>
        tools in PHP, particularly argument processing. It&rsquo;s very much a toolkit rather than a framework, so you can easily pick and choose
        the bits you need and ignore the rest.
      </p>

      <h3>Etherpad Lite</h3>
      <p>
        I have helped to maintain the <a href="http://etherpad.org/">Etherpad Lite</a>
        <a href="https://github.com/TomNomNom/etherpad-lite-client">PHP client</a>. It&rsquo;s by
        no means a complex client, but I&rsquo;m proud to be a part of the project.
      </p>

      <h3>Goomwwm</h3>
      <p>
        A minor contribution, but I <a href="http://tomnomnom.com/posts/debugging-a-segfault-in-goomwwm">fixed a segfault in Goomwwm</a>.
        The fix was simple, but the debugging less so.
      </p>

      <h3>Pwas</h3>
      <p>
        I&rsquo;d never suggest anyone ran it in production, but I wrote <a href="https://github.com/TomNomNom/Pwas">a forking webserver in PHP</a>
        to improve my understanding of HTTP.
      </p>

      <h3>Gosseract</h3>
      <p>
        I added Tesseract 3.03 support to <a href="https://github.com/otiai10/gosseract">gosseract</a>
        (a <a href="https://en.wikipedia.org/wiki/Tesseract_(software)">Tesseract</a> wrapper for Go), and improved the test suite.
      </p>

      <h3>Linkheader</h3>
      <p>
        I wrote a <a href="https://github.com/tomnomnom/linkheader">Go package for parsing HTTP Link headers</a>.
      </p>

      <h3>Raspberry Pi User Guide</h3>
      <p>
        I contributed a <a href="http://media.wiley.com/product_ancillary/6X/11184644/DOWNLOAD/ircuserlist.py">Python program</a>
        to the <a href="http://eu.wiley.com/WileyCDA/WileyTitle/productCd-111846446X.html">Official Raspberry Pi User Guide</a>.
        It&rsquo;s a simple program designed to demonstrate basic network programming by connecting
        to an <abbr title="Internet Relay Chat">IRC</abbr> server and listing the connected users.
      </p>
    </section>

    <hr/>

    <section class="info" id="contact">
      <h2><a href="#contact">How to contact me</a></h2>
      <p>
        If it&rsquo;s informal, feel free to <a href="https://twitter.com/#!/TomNomNom">mention me on Twitter</a>.
        If you want a bit more privacy or aren&rsquo;t a fan of this new-fangled social networking, just
        <a href="mailto:me@tomhudson.co.uk">email me</a> instead.
      </p>
    </section>

    <footer>
      <p>
        &copy; Tom Hudson <?=date('Y');?> - I feel slightly sick having written all that stuff about myself.
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
