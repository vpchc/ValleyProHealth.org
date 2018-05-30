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
  <h1>Job Opportunities</h1>
  <h2>Chief Financial Officer</h2>
  <div class="careers-listing">
    <p>Valley Professionals Community Health Center (VPCHC) is looking for a Chief Financial Officer to join its compassionate and outstanding team</p>
    <p>Duties:</p>
    <li>Administers, implements and directs all financial aspects of the health center in accordance with the policies of the Board of Directors, the CEO and funding agencies</li>
    <li>Serves as a key advisor to the VPCHC board in financial management strategy and care operations</li>
    <li>Oversees the development and management of financial policies as well as the systems and controls that protect VPCHC assets</li>
    <li>Oversees the development and analysis of annual, short and long-range financial position and makes recommendations regarding the ongoing organization, integration and effectiveness of the financial function</li>
    <li>Prepares and manage the annual budget and provide timely and accurate reporting and advice to the VPCHC Leadership Team and the VPCHC Board of Directors regarding current and future budget circumstances</li>
    <p>Requirements:</p>
    <li>The ideal candidate will have Bachelor’s or Master’s degree in accounting, finance or related field with at least five years’ experience in a multi-funded, non-profit health care organization, preferably an FQHC.</li>
    <li>Candidates with equivalent experience, education and training are welcome to inquire.</li>
    <li>Experience with fiscal management, federal and state grant reporting, and audits is essential, as is experience with revenue cycle management in a health care environment.</li>
    <li>CPA certification is a plus.</li>
    <iframe id="resumeup" name="resumeup" height="0" width="0" frameborder="0" scrolling="yes"></iframe>
    <form  id="onsub" action="../../php/f/mcars.php" enctype="multipart/form-data"  method="post" target="resumeup">
    <input type="hidden" value="job_listing_3.php" name="referer">
    <div id="onsub">
      <div id="onsub-title">Online Submission</div>
      <div id="onsub-box">
        <div class="onsub-field">
          <label for="first_name">First Name <span >*</span></label>     
          <input id="first_name" class="text" type="text" name="firstname" style="width:80%;">
        </div>
        <div class="onsub-field">
          <label for="last_name">Last Name <span >*</span></label>     
          <input id="last_name" type="text" name="lastname" style="width:80%;">
        </div>
        <div class="onsub-field">
          <label for="email">Email <span >*</span></label>     
          <input id="email" type="text" name="email" style="width:80%;">
        </div>
        <div class="onsub-field">
          <label for="resume">R&egrave;sum&egrave; <span >*</span></label>     
          <input type="file" name="resume" id="resume" style="width:80%;">
          <small>Only the file types: doc|docx|odt|pdf accepted with max file size 5mb.</small>
        </div>
        <input type="hidden" name="subject" value="Chief Financial Officer">
        <input type="text" name="address" id ="form_address"> 
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