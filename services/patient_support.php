<!doctype html>
<html lang="en"><style>h3 {font-size: 25px !important;margin-left: 0px !important;margin-top: 10px;margin-bottom: 10px;}h2 {margin-top: 40px !important;}</style>
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
    <img src="/images/banner/services_patient_support.jpg">
    <div class="banner-title">
      <h1>Patient Support</h1>
    </div>
  </div>
  <div class="content">	<div>
    <h2>Community Health Workers</h2>
    <p>Community Health Workers, or CHWs, are your resource when you need a hand getting healthy. CHWs are on hand to ensure that patients are at their best whether helping find affordable healthcare coverage, coaching them on healthy living, or connecting them to reources in the community.</p>		<h3>Get covered</h3>    <p>CHWs are specially equipped to help individuals and families navigate the Health Insurance Marketplace, Healthy Indiana Plan (HIP), and Medicaid applications to find affordable health insurance coverage to keep Hoosiers happy and healthy.</p>    <h3>Get connected</h3>    <p>CHWs can help patients locate necessary resources such as food, transportation or housing.</p>		</div>	<div>
    <h2>Patient Care Coordinators</h2>
    <p>At Valley Professionals, patient care is our number one concern.  Patient Care Coordinators are here to make sure that our patients have the tools to live long, happy, and healthy lives.</p>
    <h3>Take Control</h3>
    <p>Take control of your health and gain independence.  Work with a Patient Care Coordinator to create health goals that works for you.</p>
    <h3>Learn</h3>
    <p>Learn positive health habits.  Learn to manage chronic health conditions, like diabetes, and take steps to improve your health.</p>		</div>		<div><h2>Diabetes Support</h2>		<p>If you or a family member has been diagnosed with diabetes or prediabetes, Valley Professionals holds monthly Diabetic Support Group meetings that are completely free, even if you are not a patient. Group meetings cover topics like healthy eating and snacking; grocery shopping tips; staying active; getting to know the signs and symptoms associated with diabetes; and avoiding low blood sugar (hypoglycemia).</p>	</div>
  </div>    	<div id="store-locator-container">    <div id="form-container">      <form id="user-location" method="post" action="#">        <div id="form-input">          <label class="zipcode" for="address">Enter Zip Code:</label>          <input type="text" id="address" class="large-font" name="address" />        </div>        <button id="submit" class="vpchcbutton" type="submit">Submit</button>      </form>    </div>    <div id="map-container">      <div class="desktop-loc-list" id="loc-list">        <ul id="list"></ul>      </div>      <div id="map"></div>      <div class="mobile-loc-list" id="loc-list">        <ul id="list"></ul>      </div>    </div>  </div>
</main>
<footer><?php include("../php/includes/footer.php"); ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script><script src="/scripts/vpchc_mobile_menu.js"></script><script src="https://code.jquery.com/jquery-1.11.2.min.js"></script><script src="/scripts/handlebars-1.0.0.min.js"></script><script src="https://maps.google.com/maps/api/js?key=AIzaSyBOOnam3xTnwFG0mb75K8MvRd-LRut6k78"></script><script src="/scripts/jquery.storelocator.js"></script><script>  $(function() {    $('#map-container').storeLocator();  });</script>
</body>
</html>