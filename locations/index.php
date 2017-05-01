<!doctype html>
<html lang="en">
<head>
<title>ValleyProHealth.org</title>
<link href="/css/vpchc_styles_2.0.css" rel="stylesheet" type="text/css" />
<link href="/css/map.css" rel="stylesheet" type="text/css" />
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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
<header><?php include("../php/includes/header.php"); ?></header>
<main id="masterbox">
  <div id="banner">
    <div id="banner-left">
     <img id="banner-pic"  src="/images/locations_landing_page_banner.png" alt="Locations Banner Pic"/>
    </div>
    <div id="banner-right">
      <h1 id="banner-title" class="banner-title-short">Locations</h1>
    </div>
  </div>
  <div id="explain-content">
    <p class="explain-title vpchcblue">Welcome to Valley Professionals</p>
    <p class="explain-p">Valley Professionals is proud to serve the Montgomery, Parke, Vermillion, and Vigo county communities.  Our clinics provide comprehensive integrated healthcare to all individuals and families regardless of ability to pay.</p>
    <p class="explain-subtitle vpchcgreen">Find the Caring Professionals in Your Community</p>
    <p class="explain-p">Enter your ZIP code into the box below to locate which Valley Professionals Community Health Center location is closest to you.  For more information on a given location and the services available, visit the locations tab.</p>
  </div>
  <div id="store-locator-container">
    <div id="form-container">
      <form id="user-location" method="post" action="#">
        <div id="form-input">
          <label class="zipcode" for="address">Enter Zip Code:</label>
          <input type="text" id="address" class="large-font" name="address" />
        </div>
        <button id="submit" class="vpchcbutton" type="submit">Submit</button>
      </form>
    </div>
    <div id="map-container">
      <div class="desktop-loc-list" id="loc-list">
        <ul id="list"></ul>
      </div>
      <div id="map"></div>
      <div class="mobile-loc-list" id="loc-list">
        <ul id="list"></ul>
      </div>
    </div>
  </div>
</main>
<footer><?php include("../php/includes/footer.php"); ?></footer>
</body>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="/scripts/handlebars-1.0.0.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBOOnam3xTnwFG0mb75K8MvRd-LRut6k78"></script>
<script src="/scripts/jquery.storelocator.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
<script>
  $(function() {
    $('#map-container').storeLocator();
  });
</script>
</html>