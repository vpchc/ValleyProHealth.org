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
  <div class="content centered large">
		<h4>School-Based Services</h4>
		<img class="location-photo" src="/images/locations/banner_msbhc.jpg"/>
		
		<div class="school-sidebar">
		<a href="#bus"><button class="school-sidebar button">Mobile Health Center</button></a>
		<a href="#bh"><button class="school-sidebar button">Behavioral Health</button></a>
		<a href="#dental"><button class="school-sidebar button">Dental</button></a>
		<a href="#forms"><button class="school-sidebar button">Forms</button></a>
		</div>
		
		<a href="/contact_us/index.php"><div class="location-button school">Contact Us</div></a>
		
			<div class="location-description">
			<div class="location-title small">Mobile School-Based Health Center</div>
			<p>The Mobile School-Based Health Center visits elementary, middle, and high schools in the South Vermillion, North Vermillion, Southwest Parke, North Central Parke, and West Vigo school districts making it even easier to access quality and affordable health care.</p>
			<br>
			<p>Every student is eligible to receive health care services from the Mobile Health Center when they turn in their completed enrollment form signed by a parent or guardian. Click <a href="/forms/index.php">here</a> to access enrollment forms.</p>
			</div>
		<div class="location-details">
			<p class="location-title small"><a href="/about_us/providers_&_team.php">PROVIDERS &amp; TEAM</a></p>
			<table class="team-table">
				<tr> 
					<td><p>Christi Busenbark, FNP-C</p></td> 
					<td><p>Renae Norman, FNP-C</p></td>
				</tr>
			</table>
		</div>
		<div class="bus-tracker">
			<div class="bus-tracker-title">Where is the </br> Mobile Health Center?</div>
			<div class="bus-tracker-info">
				<p>Location:<span id="bus-location" class="bus-tracker-data"></span></p>
				<p>Hours:<span id="bus-hours" class="bus-tracker-data"></span></p>
				<p>Status:<span class="bus-tracker-data"><img id="bus-status-icon" src="" alt="Status Icon"/><span id="bus-status"></span></span></p>
			</div>
			<a class="bus-tracker-view vpchcbutton" href="https://calendar.google.com/calendar/embed?src=flc9fq7tt9nlo52qhlchoscu3s%40group.calendar.google.com&ctz=America/New_York">View Schedule</a>
		</div>
</main>
<footer><?php include("../php/includes/footer.php"); ?></footer>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/scripts/vpchc_bus_3.5.22.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
</body>
</html>