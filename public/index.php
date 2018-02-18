<?php

$proto = 'http://';
if ($_SERVER['HTTP_HOST'] == 'tomhudson.co.uk'){
    $proto = 'https://';
}
$host = $proto . $_SERVER['HTTP_HOST'];

function e($str){
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}

?><!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head prefix="profile: http://ogp.me/ns/profile#">
    <title>Tom Hudson</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="google-site-verification" content="gEn3cSDMkUx1RI20_8WrDJgvF8MicJqCBEgijIto8Bs" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="theme-color" content="#119C11">
    <meta property="og:title" content="Tom Hudson" />
    <meta property="og:description" content="Things about Tom Hudson" />
    <meta property="og:type" content="profile" />
    <meta property="profile:first_name" content="Tom" />
    <meta property="profile:last_name" content="Hudson" />
    <meta property="og:url" content="<?=e($host)?>/" />
    <meta property="og:image" content="<?=e($host)?>/images/sheep.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@TomNomNom" />
    <meta name="twitter:title" content="Tom Hudson" />
    <meta name="twitter:description" content="Things about Tom Hudson" />
    <meta name="twitter:image" content="<?=e($host)?>/images/sheep.png" />

	<!-- Icons. Icons as far as the eye can see -->
	<link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/images/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/images/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/images/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cabin|Roboto:400,700|Roboto+Condensed:400,700">
    <link rel="stylesheet" type="text/css" href="/css/main.css"/>

  </head>
  <body>
    <div class=wrapper>
        <div class=header>
            <h1>Tom Hudson</h1>
            <p>(aka TomNomNom)</p>
        </div>

        <div>
            <h2>About</h2>

            <div class="about box">
                <h3>Me</h3>
                <p>
                    I'm from Bradford in the UK. I like to fix things, make things, and teach people things.
                    If you want to contact me you can <a href="https://twitter.com/tomnomnom">Tweet at me</a> or
                    <a href=mailto:me@tomhudson.co.uk>email me</a>.
                </p>
            </div>
        </div>

        <div>
            <h2>Projects</h2>

            <div class=projects>
                <div class="project box">
                    <h3>gron</h3>
                    <p>
                        My most successful open source project.
                        <a href=https://github.com/tomnomnom/gron>gron</a> is a tool to make it easier to understand big blobs of <abrr title="JavaScript Object Notation">JSON</abbr>.
                        It works by turning JSON into a series of discrete assignments so that you can grep for what you want and see the full 'path' to the values you find.
                        You can turn filtered output <a href=https://github.com/tomnomnom/gron#ungronning>back into JSON</a> too.
                    </p>
                </div>

                <div class="project box">
                    <h3>meg</h3>
                    <p>
                        A common tactic when pentesting web applications is to brute-force files and directories. I'm not a fan of flooding servers
                        with lots of traffic, so I wrote <a href=#>meg</a> to look for one thing in lots of places instead of lots of things in one place.
                    </p>
                </div>

                <div class="project box">
                    <h3>comb</h3>
                    <p>
                        I wrote <a href=https://github.com/tomnomnom/comb>comb</a> because I often found myself writing pretty much the same nested loops
                        in bash to output every permutation of the lines in two files. Having a dedicated tool speeds things up a lot.
                    </p>
                </div>

                <div class="project box">
                    <h3>waybackurls</h3>
                    <p>
                        Archive.org's <a href=https://archive.org/web/>Wayback Machine</a> is a fantastic resource for mapping web applications. I wrote
                        <a href=https://github.com/tomnomnom/waybackurls>waybackurls</a> to fetch all of the URLs that the Wayback Machine
                        knows about for a set of domains.
                    </p>
                </div>

                <div class="project box">
                    <h3>rawhttp</h3>
                    <p>
                        In the process of writing <a href=https://github.com/tomnomnom/meg>meg</a> I found myself needing to send requests
                        that had malformed escape sequences and other unusual payloads that Go's HTTP library did not support. I wrote the
                        <a href=https://github.com/tomnomnom/rawhttp>rawhttp</a> package to give me more fine-grained control over
                        HTTP request.
                    </p>
                </div>

                <div class="project box">
                    <h3>linkheader</h3>
                    <p>
                        Link headers are often used in HTTP APIs for Pagination, and parsing them turns out to not be all that easy.
                        I wrote the <a href=https://github.com/tomnomnom/linkheader>linkheader</a> Go package to do the heavy lifting.
                    </p>
                </div>

                <div class="project box">
                    <h3>phpwol</h3>
                    <p>
                        Wake On LAN is a way to make computers power on by sending them a 'Magic' packet over a local network.
                        <a href=https://github.com/tomnomnom/phpwol>phpwol</a> is a PHP library to do just that.
                    </p>
                </div>

                <div class="project box">
                    <h3>symwatch</h3>
                    <p>
                        It's a fairly common pattern to use a symlink to point to the current version of a codebase.
                        Sometimes it's neccesary to restart processes or clear caches when the version of a codebase changes, so
                        I wrote <a href=https://github.com/tomnomnom/symwatch>symwatch</a> to poll a symlink for changes and run
                        a command when they happen.
                    </p>
                </div>

                <div class="project box">
                    <h3>xtermcolor</h3>
                    <p>
                        A while ago I had a need to figure out which xterm color code was the closest to a 24bit color, so I wrote
                        a Go palette and command line tool called <A href=https://github.com/tomnomnom/xtermcolor>xtermcolor</a> to
                        do it for me.
                    </p>
                </div>

                <div class="project box">
                    <h3>globwatch</h3>
                    <p>
                        <a href=https://github.com/tomnomnom/globwatch>globwatch</a> is a Go package I wrote to watch a glob
                        pattern (e.g. *.log) and emit 'events' when new files match the pattern, files are deleted,
                        or truncated.
                    </p>
                </div>

                <div class="project box">
                    <h3>phargs</h3>
                    <p>
                        Several years ago I found myself writing quite a few command line tools in PHP, and I noticed I was
                        writing very similar code in every tool to process arguments, output things as tables etc. I wrote
                        <a href=https://github.com/tomnomnom/phargs>phargs</a> as a little toolkit to make those kinds of
                        tasks easier.
                    </p>
                </div>

                <div class="project box">
                    <h3>flatclass</h3>
                    <p>
                        <a href=https://github.com/tomnomnom/flatclass>flatclass</a> is a debugging tool I wrote to make it
                        easier to read and debug PHP classes with deep inheritance trees. It uses reflection to 'flatten'
                        an inheritance tree by recursively copying parent methods into the target class.
                    </p>
                </div>
            </div>
        <div>

        <div>
            <h2>Talks</h2>

            <div class="media box">
                <div class=description>
                    <h3>Passive-ish Recon Techniques - BSides Leeds (2018-01-26)</h3>
                    <p>
                        My first security related talk, and the first ever BSides Leeds was a fantastic venue for it. I talk
                        about (mostly) passive ways to gather information on a target for pentesting or taking part in bug
                        bounty programs; like Google Dorking, grepping through GitHub repos, decompiling Android applications,
                        and using Archive.org's <a href="https://archive.org/web/">Wayback Machine</a>.
                    </p>
                    <p>
                        I also introduce <a href=https://github.com/tomnomnom/meg>a tool I wrote</a> for 'breadth-first'
                        scanning, and some examples of the kinds of things I've found with it.
                    </p>
                </div>

                <div class=preview>
                    <iframe width="400" height="260" src="https://www.youtube.com/embed/DvS_ew77GXA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>

            <div class="media box">
                <div class=description>
                    <h3>Writing Readable Code - Sky Betting &amp; Gaming (2017-03-22)</h3>
                    <p>
                        A compliation of tips and tricks I've gathered across more than a decade of reading source code.
                    </p>
                    <p>
                        There's nothing particularly groundbreaking here, but I really wanted to collect all of the things that
                        I think make it easier to read code into one place.
                    </p>
                </div>

                <div class=preview>
                    <iframe width="400" height="260" src="https://www.youtube.com/embed/OVf0xP4BLq0?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

            </div>

            <div class="media box">
                <div class=description>
                    <h3>Let's Build a Virtual Machine! - Hey! (2014-10-28)</h3>
                    <p>
                        Live-coding a simple language VM on stage. What could possibly Go wrong?
                    </p>
                    <p>
                        Things like the <abbr title="Java Virtual Machine">JVM</abbr> used to just seem like magic black
                        boxes to me, so I decided to learn how they work. Once I'd realised how simple the core concepts
                        are I couldn't help myself but to share.
                    </p>
                </div>

                <div class=preview>
                    <iframe width="400" height="260" src="https://www.youtube.com/embed/DwHJrh3zRH0?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>


        <div class=copy>
            &copy; Tom Hudson <?=date('Y');?>
        </div>

    </div>

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
