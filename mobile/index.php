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
      <img id="banner-pic" src="/images/MSBHCanimation.png" alt="MSBHC Banner Pic"/>
    </div>
    <div id="banner-right">
      <h1 id="banner-title" class="banner-title-long vpchcgreen">Mobile School-Based Health Center</h1>
    </div>
  </div>
  <div id="location-info">
    <div id="location-info-left">
      <p id="location-hour-title">Contact Info</p>
      <p class="location-hours">(765) 592-6164</p>
      <p class="location-hours location-hours-three">mobile@vpchc.org</p>
      <li>Established in August 2012</li>
      <li>Sees an estimated <span>1,417</span> patients annually</li>
      <li>Sees an estimated <span>2,520</span> visits annually</li>
    </div>
    <div id="location-info-right">
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
        <a href="/files/schedule/current_schedule.pdf"><button class="vpchcbutton">Download Schedule</button></a>
      </div>
    </div>
  </div>
  <h2>Services Provided At This Clinic</h2>
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
    <img class="team-table-icon" src="/images/ps_icon.png" alt="Patient Support"/>
    </div></a>
  </div>
  <h2>Providers Currently Seeing Patients At This Clinic</h2>
  <hr>
  <div id="location-providers-section">
    <table class="team-table">
      <tr> 
        <td><p class="team-table-name">Nicole Cook, FNP-C</p></td> 
        <td><p class="team-table-name">Renae Norman, FNP-C</p></td>
      </tr>
      <tr>
        <td><p class="team-table-name">Heather Woods, LMHCA</p></td>
      </tr>
    </table>
  </div>
</main>
<footer><?php include("../php/includes/footer.php"); ?></footer>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/scripts/vpchc_bus_3.5.19.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
</body>
</html>