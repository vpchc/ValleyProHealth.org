<!doctype html>
<!--
    Valley Professionals Community Health Center Website 3.0
    Developer - Brice Webster
    Design    - Lindsay Gregg
-->
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
<main id="masterbox-home">   
  <div id="slideshow">
   <video loop muted autoplay class="homescreen-video">
     <source src="/video/homepage_welcome.mp4" type="video/mp4">
   </video>
  </div>
  <div id="mobileshow">
    <div id="mobileshow-quote-container">
      <p>Caring <br>professionals<br>in your community.</p>
    </div>
    <img src="/images/mobileshow_background.jpg" />
  </div>
   <div id="share">
    <h2 class="news-title vpchcblue">Social Feeds</h2>
    <div id="twitter">
      <div id="twitter-feed">
      <a class="twitter-timeline" href="https://twitter.com/ValleyProHealth" data-widget-id="738731610237849600" data-chrome="noheader nofooter noborders" data-tweet-limit="1"></a>
      </div>
    </div>
    <div class="share-button">
    <a class="twitter-follow-button" data-show-count="false" href="https://twitter.com/ValleyProHealth">Follow @ValleyProHealth</a>
    </div>
    <div id="facebook">
      <div class="fb-page" data-href="https://www.facebook.com/vpchc" data-tabs="timeline" data-small-header="true" data-width="460" data-height="500" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/vpchc" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/vpchc">Valley Professionals Community Health Center</a></blockquote></div>
    </div>
     <iframe class="share-button" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=49&layout=button&action=like&show_faces=false&share=false&height=65&appId" width="49" height="25" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
  </div>
  <div id="events">
    <h2 class="news-title vpchcblue">Upcoming Events</h2>
    <div class="events-container">
      <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showTz=0&amp;height=500&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=4nfu6l8s9kd9i5t7jp6orma6og%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FNew_York" style="border-width:0" width="500" height="500" frameborder="0" scrolling="no"></iframe>
    </div>
    <div class="events-container">
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
 <div id="news">
   <h2 class="news-title">News Articles</h2>
   <div class="news-article">
     <p class="news-article-title">March 27, 2017- Local Partnership to Increase Health Care Services</p>
     <p class="news-article-preview">Valley Professionals Community Health Center is expanding its clinic locations by partnering with Waltz Family Practice in Rockville.</p>
     <a href="/about_us/news_article_1.php">See Full Article</a>
   </div>
   <div class="news-article">
     <p class="news-article-title">November 1, 2016 - Local medical provider office honored for exceptional quality and service</p>
     <p class="news-article-preview">Valley Professionals Community Health Center was recently honored with a Star Performer Award from MDwise</p>
     <a href="/about_us/news_article_2.php">See Full Article</a>
   </div>
   <div class="news-article">
     <p class="news-article-title">October 18, 2016 - Screening Mammogram Funds Available at Health Center</p>
     <p class="news-article-preview">Have you or someone you know, been diagnosed with breast cancer? Are you aware of the importance of early detection with breast cancer, which can increase a person's survival rate? Valley Professionals Community Health Center (VPCHC) has received funding through the Indiana Breast Cancer Awareness Trust to provide screening mammograms for women who are uninsured</p>
     <a href="/about_us/news_article_3.php">See Full Article</a>
   </div>
   <div id="archive-button">
       <a href="/archive/news/"><button class="vpchcbutton">News Archive</button></a>
   </div>
</div>
</main>
<footer><?php include("php/includes/footer.php"); ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script type="text/javascript" src="/scripts/vpchc_bus_3.5.19.js"></script>
<script type="text/javascript">
  if (screen.width <= 800){
    var cookies = document.cookie;
    var check = cookies.split(";");
    var foundCookie = 0;
    for(var i = 0; i < check.length; i++) {
        if(check[i].replace(/^\s+|\s+$/g,'') == "vpchcredirect=1"){
            foundCookie = 1;
            break;
        }
    }
    if(foundCookie == 0){
      window.location = "/app";
    }
  }
</script>
</body>
</html>