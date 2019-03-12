<!doctype html>

<html lang="en">

<head>

<title>ValleyProHealth.org</title>

<link href="/css/vpchc_styles.css" rel="stylesheet" type="text/css" />

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

<style>
.footer-locations p {
	margin: 0px;
}

/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: #3a4e8c;
  color: #ffffff;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #70b244;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}

p {
  margin-bottom: 10px;
  margin-top: 10px;
}
</style>

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

    <img src="/images/banner/medicalhome.jpg">

    <div class="banner-title">

      <h1>Patient-Centered Medical Home</h1>

    </div>

  </div>

  <div class="content">

	<div class="diabetes-header">What is a Patient-Centered Medical Home? </div>

	<br>

	<p>Patient-Centered Medical Home (PCMH) is a new approach to your healthcare. PCMH provides all-inclusive primary care that creates partnerships between you and your family, and your primary care provider and health care team. <a href="https://www.pcpcc.org/about/medical-home" target="_blank">Click here</a> for a brief video to learn more about Patient-Centered Medical Home!</p>

	<h2>What to Expect from your Medical Home: </h2>

    <p>Your provider’s health care team will work together to meet your needs and provide continuous care. They will be familiar with your health history and have access to your most current health information. They are here to help you.</p>

    <h2>Acute Care</h2>

    <li class="blue-bullet">Access to Care </li>
	
	Being there when you need us. 

    <li class="blue-bullet">Accountability</li>
	
	Taking responsibility to ensure that you receive the best healthcare possible.

    <li class="blue-bullet">Coordination & Integration </li>
	
	Helping you navigate the healthcare system to get the care you need safely and efficiently.

    <li class="blue-bullet">Individual and Family-Centered Care </li>
	
	Recognizing that you are the most important member of the care team, and that you are ultimately responsible for your overall health and wellness.
	
    <li class="blue-bullet">Comprehensive Whole-Person Care </li>
	
	Providing and/or helping you get the health care services you need.

    <li class="blue-bullet">Continuity</li>
	
	Being your long-term partner in caring for your health.

	<p>Valley Professionals Community Health Center is committed to continuous focus on patient care and maximizing the capabilities of patient services and programs. The health center is the place to find hometown quality care!</p>
	
  </div>	
	
	</div>
		
	</div>

</main>

<footer><?php include("../php/includes/footer.php"); ?></footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="/scripts/vpchc_mobile_menu.js"></script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>

</html>