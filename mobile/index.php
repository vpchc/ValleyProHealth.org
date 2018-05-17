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
  <p id="location-title">Mobile School-Based Health Center</p>
  <div id="location-top-section">
    <img id="location-photo" src="/images/locations/banner_msbhc.jpg"/>
    <div id="location-info">
      <p class="location-subtitle">CONTACT US</p>
      <div class="location-info-contact">
        <img class="location-info-icon" src="/images/locations/icon_phone.png" alt="phone number">
        <p>(765) 592-6164</p>
        <p>mobile@vpchc.org</p>
      </div>
    </div>
  </div>
  <div id="location-bottom-section">
    <div id="location-details">
      <p class="location-subtitle location-subtitle-topmargin">SERVICES</p>
      <div class="location-services-type">
        <a href="/services/primary_care.php"><img class="location-services-icon" src="/images/services/med_icon.png"/ alt="Primary Care services"></a>
        <span>Primary Care</span>
      </div>
      <div class="location-services-type">
        <a href="/services/behavioral_health.php"><img class="location-services-icon" src="/images/services/bh_icon.png" alt="Behavioral Health services"/></a>
        <span>Behavioral Health</span>
      </div>
      <p class="location-subtitle location-subtitle-topmargin">PROVIDERS</p>
      <table class="team-table">
      <tr> 
        <td><p class="team-table-name">Nicole Cook, FNP-C</p></td> 
        <td><p class="team-table-name">Renae Norman, FNP-C</p></td>
      </tr>
      <tr>
        <td><p class="team-table-name">Heather Woods, LMHC</p></td>
      </tr>
    </table>
    </div>
    <div id="location-map">
    <div id="bus-tracker" class="banner-section-left">
        <div id="bus-tracker-title">Where is the </br> Mobile Health Center?</div>
        <div id="bus-tracker-info">
          <p>Location:</p>
          <p>Hours:</p>
          <p>Status:</p>
        </div>
        <div id="bus-tracker-data">
          <p id="bus-location" class="bus-tracker-data-section"></p>
          <p id="bus-hours" class="bus-tracker-data-section"></p>
          <div id="bus-tracker-data-status-section">
            <div id="bus-tracker-data-status-section-sub">
              <img id="bus-status-icon" src="" alt="Status Icon"/>
              <p id="bus-status" class="bus-tracker-data-section-status"></p>
            </div>
          </div>
        </div>
        <div id="bus-tracker-view">
          <a class="vpchcbutton" href="https://calendar.google.com/calendar/embed?src=flc9fq7tt9nlo52qhlchoscu3s%40group.calendar.google.com&ctz=America/New_York">View Schedule</a>
        </div>
    </div>
    </div>
  </div>
</main>
<footer><?php include("../php/includes/footer.php"); ?></footer>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/scripts/vpchc_bus_3.5.22.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
</body>
</html>