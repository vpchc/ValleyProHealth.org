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
<!--.....|.........|.........|.........|.........|.........|.........|.......-->
</head>
<body>
<header><?php include("../php/includes/header.php"); ?></header>
<main>
	<div class="content centered small">
		<h5>Job Opportunities</h5>
  	<h6>Quality Improvement Coordinator - Cayuga/Clinton</h6>
    <p>Valley Professionals Community Health Center is looking for a motivated individual with strong analytical and critical thinking skills to join their Quality Team. This individual will need to work with and build relationships at all levels of the organization.</p>
    <h2>Duties:</h2>
    <li class="green-bullet">Assists in developing, implementing and monitoring appropriate and comprehensive quality improvement initiatives utilizing the Plan-Do-Study-Act model.</li>
    <li class="green-bullet">Supports and assists providers and their care teams in achieving established performance measure goals as identified in VPCHC’s Quality Plan.</li>
    <li class="green-bullet">Responsible for conducting periodic ongoing quality audits and reviews, including medical record audits and identify deficiencies.</li>
    <li class="green-bullet">Conduct analysis on low performing patient satisfaction survey measures and assist with the development and implementation of corrective action plans.</li>
    <li class="green-bullet">Works with Site Managers and practice staff regarding the use of quality data for continuous improvement.</li>
    <li class="green-bullet">Assists with the development and implementation of policies and procedures.</li>
    <li class="green-bullet">Prepares reports and other documentation as required.</li>
		<h2>Requirements:</h2>
		<li class="green-bullet">Minimum of two (2) years of post-high school education.</li>
		<li class="green-bullet">At least two (2) years of quality related work experience or background in healthcare.</li>
        <li class="green-bullet">Knowledge of continuous quality improvement processes and program design.</li>
        <li class="green-bullet">Ability to adapt to changing conditions and assimilate new processes into job functions.</li>
        <li class="green-bullet">Motivated to produce high-quality outcomes.</li>
    <iframe id="resumeup" name="resumeup" height="0" width="0" frameborder="0" scrolling="yes"></iframe>
    <form id="onsub" action="../../php/f/mcars.php" enctype="multipart/form-data"  method="post" target="resumeup">
    <input type="hidden" value="job_listing_2.php" name="referer">
    <div id="onsub">
      <div id="onsub-title">Online Submission</div>
      <div id="onsub-box">
        <div class="onsub-field">
          <label for="first_name">First Name <span >*</span></label>     
          <input id="first_name" class="text" type="text" name="firstname">
        </div>
        <div class="onsub-field">
          <label for="last_name">Last Name <span >*</span></label>     
          <input id="last_name" type="text" name="lastname">
        </div>
        <div class="onsub-field">
          <label for="email">Email <span >*</span></label>     
          <input id="email" type="text" name="email">
        </div>
        <div class="onsub-field">
          <label for="resume">R&egrave;sum&egrave; <span >*</span></label>     
          <input type="file" name="resume" id="resume">
          <small>Only the file types: doc|docx|odt|pdf accepted with max file size 5mb.</small>
        </div>
        <input type="hidden" name="subject" value="Quality Improvement Coordinator - Cayuga/Clinton">
        <div id="onsub-foot">
          <div id="onsub-foot-left">
            <span id="form-status">* required</span>
          </div>
          <div id="onsub-foot-right">
            <input id="onsub-submit" type="submit" value="Submit" name="gonebabygone" class="vpchcbutton">
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</main>
<footer><?php include("../php/includes/footer.php"); ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
<script type="text/javascript">
    document.getElementById('resumeup').onload = function() {
        var iframe = document.getElementById("resumeup");
        var iframe_contents = iframe.contentDocument.body.innerHTML;
        document.getElementById("form-status").innerHTML = iframe_contents;
    }
</script>
</body>
</html>