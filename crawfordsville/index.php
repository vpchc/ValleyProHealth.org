<!doctype html>
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
    <img id="banner-pic"  src="/images/crawfordsville_location_banner.png" alt="Crawfordsville Pic"/>
    </br>
    </div>
    <div id="banner-right">
      <h1 id="banner-title" class="vpchcgreen">Crawfordsville</h1>
    </div>
  </div>
  <div id="location-info">
    <div id="location-info-left">
      <p id="location-hour-title">Hours</p>
      <p class="location-hours location-hours-one">Monday - Friday: 8:00 a.m. - 5:00 p.m.</p>
      <li>Established in August 2015</li>
      <li>Sees an estimated <span>2,903</span> patients annually</li>
      <li>Sees an estimated <span>6,500</span> visits annually</li>
    </div>
    <div id="location-info-right">
      <p class="location-contact">1810 Lafayette Rd</p>
      <p class="location-contact">Crawfordsville, IN 47933</p>
      <p class="location-contact">(765) 362-5100</p>
      <p class="location-contact">Fax: (765) 362-5171</p>
      <iframe id="location-map" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:EjExODEwIExhZmF5ZXR0ZSBBdmUsIENyYXdmb3Jkc3ZpbGxlLCBJTiA0NzkzMywgVVNB&key=AIzaSyBOOnam3xTnwFG0mb75K8MvRd-LRut6k78" allowfullscreen></iframe>
    </div>
  </div>
  <h2 class="section-title-centered">Services Provided At This Clinic</h2>
  <hr>
  <div id="services-provided">
    <a href="/services/behavioral_health.php"><div class="services-provided-section three-sections">
    <p>Behavioral Health</p>
    <img class="team-table-icon" src="/images/bh_icon.png" alt="Behavioral Health Services"/>
    </div></a>
    <a href="/services/medical.php"><div class="services-provided-section three-sections">
    <p>Medical</p>
    <img class="team-table-icon" src="/images/med_icon.png" alt="Medical Services"/>
    </div></a>
    <a href="/services/patient_support.php"><div class="services-provided-section three-sections">
    <p>Patient Support</p>
    <img class="team-table-icon" src="/images/ps_icon.png"/>
    </div></a>
  </div>
  <h2>Providers Currently Seeing Patients At This Clinic</h2>
  <hr>
  <div id="location-providers-section">
    <table class="team-table">
      <tr>
        <td><p class="team-table-name">Do Hwang, MD</p></td>
        <td><p class="team-table-name">Gwyndolen Morson, FNP-C</p></td>
      </tr>
      <tr>
        <td><p class="team-table-name">Paul Taraska, MD</p></td> 
        <td><p class="team-table-name">Keith Seegers, LCSW</p></td> 
      </tr>
      <tr>
        <td><p class="team-table-name">Dana Tinkle, LMHC</p></td>
      </tr>
    </table>
  </div>
</main>
<footer><?php include("../php/includes/footer.php"); ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
</body>
</html>