<!doctype html>
<html lang="en">
<head>
<title>ValleyProHealth.org</title>
<link href="/css/vpchc_styles_3.0.css" rel="stylesheet" type="text/css" />
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128496723-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128496723-1');
</script>
<!--.....|.........|.........|.........|.........|.........|.........|.......-->
</head>
<body>
<header><?php include("../php/includes/header.php"); ?></header>
<main>
  <div class="banner">
    <img src="/images/banner/services_primary_care.jpg">
    <div class="banner-title">
      <h1>Primary Care</h1>
    </div>
  </div>
  <div class="content">
    <h2>Primary Medical Care</h2>
    <p>Primary care includes the treatment of acute and chronic illnesses, as well as health maintenance, disease prevention, health education and promotion.</p>
    <h2>Acute Care</h2>
    <table>
    <tr>
      <td><li class="blue-bullet">Cold</li></td>
      <td><li class="blue-bullet">Congestion</li></td>
      <td><li class="blue-bullet">Cough</li></td>
    </tr>
    <tr>
      <td><li class="blue-bullet">Fever</li></td>
      <td><li class="blue-bullet">Sore Throat</li></td>
      <td><li class="blue-bullet">Rash</li></td>
    </tr>
    <tr>
      <td><li class="blue-bullet">Vomitting</li></td>
      <td><li class="blue-bullet">Flu Symptoms</li></td>
      <td><li class="blue-bullet">Earache</li></td>
    </tr>
    </table>
    <h2>Preventive Care</h2>
    <li class="blue-bullet">Child & Adult Wellness Exams</li>
    <li class="blue-bullet">Physical Examinations</li>
    <li class="blue-bullet">Immunizations</li>
    <li class="blue-bullet">Women's Health</li>
    <h2>Chronic Disease Care</h2>
    <p>Chronic Diseases, such as Diabetes or Chronic Obstructive Pulmonary Disorder (COPD), require maintenance and observation.  Our integrated care facility enables you to work with your Physician and a Patient Care Coordinator to create a health plan that works best for you and your lifestyle.</p>
    <h2>Other Services</h2>
    <li class="blue-bullet">Family Planning & Obstetrics</li>
    <li class="blue-bullet">Geriatric Care</li>
    <li class="blue-bullet">Minor Procedures</li>
    <li class="blue-bullet">Laboratory Services</li>
		<a class="services-button vpchcbutton" href="/about_us/providers_&_team.php#physicians">Click here to see all of our Medical Providers</a>
  </div>    	<div id="store-locator-container">    <div id="form-container">      <form id="user-location" method="post" action="#">        <div id="form-input">          <label class="zipcode" for="address">Enter Zip Code:</label>          <input type="text" id="address" class="large-font" name="address" />        </div>        <button id="submit" class="vpchcbutton" type="submit">Submit</button>      </form>    </div>    <div id="map-container">      <div class="desktop-loc-list" id="loc-list">        <ul id="list"></ul>      </div>      <div id="map"></div>      <div class="mobile-loc-list" id="loc-list">        <ul id="list"></ul>      </div>    </div>  </div>
</main>
<footer><?php include("../php/includes/footer.php"); ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script><script src="/scripts/vpchc_mobile_menu.js"></script><script src="https://code.jquery.com/jquery-1.11.2.min.js"></script><script src="/scripts/handlebars-1.0.0.min.js"></script><script src="https://maps.google.com/maps/api/js?key=AIzaSyBOOnam3xTnwFG0mb75K8MvRd-LRut6k78"></script><script src="/scripts/jquery.storelocator.js"></script><script>  $(function() {    $('#map-container').storeLocator();  });</script>
</body>
</html>