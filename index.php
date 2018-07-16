<!doctype html>
<!--
    Valley Professionals Community Health Center Website 3.0
    Developer - Brice Webster
    Design    - Lindsay Gregg
-->
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
<main>
	<div id="slideshow" class="fullscreen">
		<div class="slide">
			<img src="/images/homepage/slideshow/patient_portal.jpg">
			<div class="slide-info fullscreen">
				<p class="slide-title fullscreen">Get connected</p>
				<p class="slide-subtitle fullscreen">Take control of your healthcare by utilizing the patient portal.</p>	
				<a href="https://mycw108.ecwcloud.com/portal14763/jsp/100mp/login_otp.jsp" class="slide-info-button">Get Started<span class="slide-info-span"></span></a>
			</div>
		</div>
		<div class="slide">
			<img src="/images/homepage/slideshow/staff_rockville.jpg">
			<div class="slide-info fullscreen">
				<p class="slide-title fullscreen">Now serving the Rockville community</p>
				<p class="slide-subtitle fullscreen">Make an appointment with us today!</p>
				<a href="/rockville/" class="slide-info-button">Learn More<span class="slide-info-span"></span></a>
			</div>
		</div>
		<div class="slide">
			<img src="/images/homepage/slideshow/chw_coverage.jpg">
			<div class="slide-info fullscreen">
				<p class="slide-title fullscreen">Are you covered?</p>
				<p class="slide-subtitle fullscreen">Let one of our Community Health Workers help you find affordable health insurance.</p>
				<a href="/services/patient_resources.php" class="slide-info-button">Learn More<span class="slide-info-span"></span></a>
			</div>
		</div>
		<div class="slide">
			<img src="/images/homepage/slideshow/bike_program.jpg">
			<div class="slide-info fullscreen">
				<p class="slide-title fullscreen">Are you up-to-date on your immunizations?</p>
				<p class="slide-subtitle fullscreen">You could win a new bike.</br></p>
				<a href="/services/patient_resources.php" class="slide-info-button">Find out how!<span class="slide-info-span"></span></a>
			</div>
		</div>
	</div>
	<div class="home-about">
		<img class="home-about-hands" src="/images/services/ps_icon.png" alt="VPCHC Volunteer Example">
		<p>Valley Professionals Community Health Center is a Federally Qualified Health Center (FQHC) dedicated to serving those in need, a concept that is not exclusive to healthcare, but is present in everything we do. Whether a patient, fellow employee, local organization, or member of the community, we believe in rolling up our sleeves and lending a helping hand.</br></br>Valley Professionals opened its first clinic in Clinton, Indiana in 2008, and has since grown to include six additional clinics in Montgomery, Parke, Vermillion, and Vigo counties, as well as, a Mobile School-Based Health Center that visits local schools.</p>
		<img class="home-about-info" src="/images/homepage/10years_thankyou.jpg"\>
	</div>
	<div class="home-button-row">
		<div class="home-button"><a href="/careers/"><img src="/images/homepage/career_button.jpg"/></a>
		</div>
		<div class="home-button"><a href="locations/"><img src="/images/homepage/location_button.jpg"></a>
		</div>
		<div class="home-button"><a href="/about_us/news_&_events.php"><img src="/images/homepage/events_button.jpg"/></a></div>
		<div class="home-button"><a href="/about_us/providers_&_team.php"><img src="/images/homepage/team_button.jpg"/></a>
		</div>
	</div>
</main>
<footer><div><?php include("php/includes/footer.php"); ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
<script src="/scripts/jquery.bxslider.js"></script>
<script src="/scripts/vpchc_slideshow.js"></script>
<script src="/scripts/vpchc_screen_size_check.js"></script>
</body>
</html>