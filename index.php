<!doctype html>
<!--
    Valley Professionals Community Health Center Website 3.0
    Developer - Brice Webster
    Design    - Lindsay Gregg
-->
<html lang="en">
<head>
<title>ValleyProHealth.org</title>
<link href="/css/vpchc_styles_2.0.css" rel="stylesheet" type="text/css" />
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="google-site-verification" content="3HI8hXSS6f73yfDQ7uLGY7ki6G0WPpDotkNuT_BfxnQ" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//valleyprohealth.org/stats/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
<!--.....|.........|.........|.........|.........|.........|.........|.......-->
</head>
<body>
<header><?php include("php/includes/header.php"); ?></header>
<main id="masterbox-home">   
  <div id="slideshow">
   <video loop muted autoplay class="homescreen-video">
     <source src="/video/homepage_welcome.mp4" type="video/mp4">
   </video>
  </div>
  <div id="mobileshow">
    <div id="mobileshow-quote-container">
      <p>Caring <br>professionals<br>in your community.</p>
    </div>
    <img src="/images/mobileshow_background.png" />
  </div>
</main>
<footer><?php include("php/includes/footer.php"); ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
<script type="text/javascript">
  if (screen.width <= 800){
    var cookies = document.cookie;
    var check = cookies.split(";");
    var foundCookie = 0;
    for(var i = 0; i < check.length; i++) {
        if(check[i].replace(/^\s+|\s+$/g,'') == "vpchcredirect=1"){
            foundCookie = 1;
            break;
        }
    }
    if(foundCookie == 0){
      window.location = "/app";
    }
  }
</script>
</body>
</html>