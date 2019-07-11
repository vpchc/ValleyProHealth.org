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
	<div class="banner">
    <img src="/images/banner/services_forms.jpg">
    <div class="banner-title">
      <h1>Forms</h1>
    </div>
  </div>
  <div class="content centered large forms">
  <div id="forms-categories">
		<h2>Select a category below.</h2>
    <button id="forms-category-newpat" class="vpchcbutton">New Patients</button>
    <button id="forms-category-consent" class="vpchcbutton">Consent for Release of Records or Information</button>
    <button id="forms-category-notice" class="vpchcbutton">Notice of Patient Bill of Rights/Privacy Practice</button> 
    <button id="forms-category-programs" class="vpchcbutton">Sliding Fee Scale</button>
    <button id="forms-category-student" class="vpchcbutton">Student Forms</button>
  </div>
  <div id="forms-newpat-locations">
    <h2>Which clinic will you be using?</h2>
    <table class="forms-table locations">
      <tr class="forms-row-pics">
        <td><img id="forms-newpat-bloom" class="forms-pic locations" src="/images/locations_small/bloomingdale.jpg" alt="Bloomingdale Choice"/><p>Bloomingdale</p></td>
        <td><img id="forms-newpat-cay" class="forms-pic locations" src="/images/locations_small/cayuga.jpg" alt="Cayuga Choice"/><p>Cayuga</p></td>
        <td><img id="forms-newpat-clint" class="forms-pic locations" src="/images/locations_small/clinton.jpg" alt="Clinton Choice"/><p>Clinton</p></td>
      </tr>
      <tr>
        <td><img id="forms-newpat-craw" class="forms-pic locations" src="/images/locations_small/crawfordsville.jpg" alt="Crawfordsville Choice"/><p>Crawfordsville</p></td>
        <td><img id="forms-newpat-rock" class="forms-pic locations" src="/images/locations_small/rockville.jpg" alt="Rockville Choice"/><p>Rockville</p></td>
        <td><img id="forms-newpat-terre" class="forms-pic locations" src="/images/locations_small/terrehaute.jpg" alt="Terre Haute Choice"/><p>Terre Haute</p></td>
      </tr>
      <tr>
        <td></td>
        <td><img id="forms-newpat-bus" class="forms-pic locations" src="/images/locations_small/msbhc.jpg" alt="MSBHC Choice"/><p>MSBHC</p></td>
      </tr> 
    </table>
  </div>
  <div id="forms-newpat-age">
    <h2>Are you looking for an adult or child form?</h2>
    <table class="forms-table age">
      <tr>
        <td>
        <img class="forms-square" src="/images/forms/vpchc_green_square.png" alt="Green Square"/>
        <p>&nbsp;</p>
        </td>
        <td>
        <img id="forms-newpat-adult" class="forms-pic age" src="/images/forms/adults.jpg" alt="Adult"/>
        <p>Adult</p>
        </td>
      </tr>  
      <tr>
        <td>
        <img id="forms-newpat-child" class="forms-pic age" src="/images/forms/child.jpg" alt="Child"/>
        <p>Child</p>
        </td>
        <td>
        <img class="forms-square" src="/images/forms/vpchc_blue_square.png" alt="Blue Square"/>
        <p>&nbsp;</p>
        </td>
      </tr>
    </table>
  </div>
  <div id="forms-consent">
    <h2>Select a form to download.</h2>
    <button id="forms-consent-bh" class="vpchcbutton">Behavioral Health Release of Information</button>
    <button id="forms-consent-releaseinfo" class="vpchcbutton">Medical Release of Information</button> 
    <button id="forms-consent-releaserec" class="vpchcbutton">Release of Records</button>
    <button id="forms-consent-telemed" class="vpchcbutton">Telemedicine</button>
  </div>
  <div id="forms-records-choice">
    <h2>Select your location.</h2>
    <button id="forms-records-bloom" class="vpchcbutton">Bloomingdale</button>
    <button id="forms-records-cay" class="vpchcbutton">Cayuga</button> 
    <button id="forms-records-clint" class="vpchcbutton">Clinton</button>
    <button id="forms-records-craw" class="vpchcbutton">Crawfordsville</button>
    <button id="forms-records-rock" class="vpchcbutton">Rockville</button>
    <button id="forms-records-terre" class="vpchcbutton">Terre Haute</button>
    <button id="forms-records-mobile" class="vpchcbutton">Mobile Health Center</button>
  </div>
  <div id="forms-notice">
		<h2>Select a form to download.</h2>
    <button id="forms-notice-ackbill" class="vpchcbutton">Acknowledgement of Bill of Rights</button>
    <button id="forms-notice-bill" class="vpchcbutton">Patient Bill of Rights and Responsibilities</button> 
    <button id="forms-notice-privacy" class="vpchcbutton">Notice of Privacy Practice</button>
  </div>
  <div id="forms-programs">
    <h2>Select a form to download.</h2>
    <button id="forms-programs-scale" class="vpchcbutton">Sliding Fee Scale</button>
  </div>
  <div id="forms-student">
    <h2>Select a form to download.</h2>
    <button id="forms-student-ishaa" class="vpchcbutton">ISHAA Physical</button>
    <button id="forms-student-msbhc" class="vpchcbutton">Mobile School-Based Health Center Enrollment</button> 
  </div>
</main>
<footer><?php include("../php/includes/footer.php"); ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
<script type="text/javascript">
	/***New patient start***/
	$("#forms-category-newpat").click(function(){
		$("#forms-categories").hide();
		$("#forms-newpat-locations").fadeIn(1000);
	});
	//Choosing a location
	var locationChoice;
	$("#forms-newpat-bloom").click(function(){
		locationChoice = 1;
		locationSelected();
	});
	$("#forms-newpat-cay").click(function(){
		locationChoice = 2;
		locationSelected();
	});
	$("#forms-newpat-clint").click(function(){
		locationChoice = 3;
		locationSelected();
	});
	$("#forms-newpat-craw").click(function(){
		locationChoice = 4;
		locationSelected();
	});
	$("#forms-newpat-rock").click(function(){
		locationChoice = 5;
		locationSelected();
	});
	$("#forms-newpat-terre").click(function(){
		locationChoice = 6;
		locationSelected();
	});
	$("#forms-newpat-bus").click(function(){
		locationChoice = 0;
		locationSelected();
	}); 
	function locationSelected(){
		$("#forms-newpat-locations").hide();
		$("#forms-newpat-age").fadeIn(1000);
	}
	//Adult choosen
	$("#forms-newpat-adult").click(function(event){
        if(locationChoice == 0 ){
			 window.location.href = "/files/forms/en/FORM_MSBHC_Enrollment_Packet.pdf";
        }else if(locationChoice == 1){
				window.location.href = "/files/forms/en/New_Patient_Adult_Bloomingdale.pdf";
		}else if(locationChoice == 2){
				window.location.href = "/files/forms/en/New_Patient_Adult_Cayuga.pdf";
		}else if(locationChoice == 3){
				window.location.href = "/files/forms/en/New_Patient_Adult_Clinton.pdf";
		}else if(locationChoice == 4){
				window.location.href = "/files/forms/en/New_Patient_Adult_Crawfordsville.pdf";
		}else if(locationChoice == 5){
				window.location.href = "/files/forms/en/New_Patient_Adult_Rockville.pdf";
		}else{
				window.location.href = "/files/forms/en/New_Patient_Adult_Terre_Haute.pdf";
		}
	});
	//Child choosen
	$("#forms-newpat-child").click(function(){
        if(locationChoice == 0 ){
			 window.location.href = "/files/forms/en/FORM_MSBHC_Enrollment_Packet.pdf";
        }else if(locationChoice == 1 ){
			 window.location.href = "/files/forms/en/New_Patient_Child_Bloomingdale.pdf";
		}else if(locationChoice == 2){
				window.location.href = "/files/forms/en/New_Patient_Child_Cayuga.pdf";
		}else if(locationChoice == 3){
				window.location.href = "/files/forms/en/New_Patient_Child_Clinton.pdf";
		}else if(locationChoice == 4){
				window.location.href = "/files/forms/en/New_Patient_Child_Crawfordsville.pdf";
		}else if(locationChoice == 5){
				window.location.href = "/files/forms/en/New_Patient_Child_Rockville.pdf";
		}else{
				window.location.href = "/files/forms/en/New_Patient_Child_Terre_Haute.pdf";
		}
	});

	/***Other forms start***/
	/*Consent option choosen*/
	$("#forms-category-consent").click(function(){
		$("#forms-categories").hide();
		$("#forms-consent").fadeIn(1000);
	});
	//bh release choosen
	$("#forms-consent-bh").click(function(){
			window.location.href = "/files/forms/en/behavioral_health_release.pdf";
	});
	//release of info choosen
	$("#forms-consent-releaseinfo").click(function(){
			window.location.href = "/files/forms/en/release_of_information.pdf";
	});
	/*Release of records choosen*/
	$("#forms-consent-releaserec").click(function(){
		$("#forms-consent").hide();
		$("#forms-records-choice").fadeIn(1000);
	});
	//Bloomingdale download
	$("#forms-records-bloom").click(function(){
			window.location.href = "/files/forms/en/records_release_bloomingdale.pdf";
	});
	//Cayuga download
	$("#forms-records-cay").click(function(){
			window.location.href = "/files/forms/en/records_release_cayuga.pdf";
	});
	//Clinton download
	$("#forms-records-clint").click(function(){
			window.location.href = "/files/forms/en/records_release_clinton.pdf";
	});
	//Crawfordsville download
	$("#forms-records-craw").click(function(){
			window.location.href = "/files/forms/en/records_release_crawfordsville.pdf";
	});
	//Rockville download
	$("#forms-records-rock").click(function(){
			window.location.href = "/files/forms/en/records_release_rockville.pdf";
	});
	//Terre Haute download
	$("#forms-records-terre").click(function(){
			window.location.href = "/files/forms/en/records_release_terrehaute.pdf";
	});
	//Mobile download
	$("#forms-records-mobile").click(function(){
			window.location.href = "/files/forms/en/records_release_clinton.pdf";
	});
	//telemedicine choosen
	$("#forms-consent-telemed").click(function(){
			window.location.href = "/files/forms/en/telemedicine_consent.pdf";
	});
	/*Notice option choosen*/
	$("#forms-category-notice").click(function(){
		$("#forms-categories").hide();
		$("#forms-notice").fadeIn(1000);
	});
	//acknowledgement of receipt choosen
	$("#forms-notice-ackbill").click(function(){
		 window.location.href = "/files/forms/en/acknowledgement_receipt.pdf";
	});
	//bill of rights choosen
	$("#forms-notice-bill").click(function(){
		 window.location.href = "/files/forms/en/patient_bill_of_rights.pdf";
	});
	//privacy practices choosen
	$("#forms-notice-privacy").click(function(){
		 window.location.href = "/files/forms/en/notice_privacy_practices.pdf";
	});
	/*Programs option choosen*/
	$("#forms-category-programs").click(function(){
		$("#forms-categories").hide();
		$("#forms-programs").fadeIn(1000);
	});
	//sliding fee scale choosen
	$("#forms-programs-scale").click(function(){
		window.location.href = "/files/forms/en/sliding_fee_scale_reqs.pdf";
	});
	/*Student form choosen*/
	$("#forms-category-student").click(function(){
		$("#forms-categories").hide();
		$("#forms-student").fadeIn(1000);
	});
	//ishaa choosen
	$("#forms-student-ishaa").click(function(){
			window.location.href = "/files/forms/en/ihsaa_physical.pdf";
	});
	//msbhc choosen
	$("#forms-student-msbhc").click(function(){
			window.location.href = "/files/forms/en/msbhc_student_enrollment.pdf";
	});
</script>
</body>
</html>