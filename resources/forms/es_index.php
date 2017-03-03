<!doctype html>
<html lang="es">
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
<header><?php include("../../php/includes/header.php"); ?></header>
<main id="masterbox">
  <h1>Formas</h1>
  <hr>
  <br/>
  <div id="forms-content">
  <div id="forms-content-options">
    <button id="forms-options-newpat" class="vpchcbutton">Nuevos Pacientes</button>
    <button id="forms-options-other" class="vpchcbutton">Otras Formas</button>
    <a href="/resources/forms/es_simple_list.php">
    Los botones no trabajan? Intente hacer clic aqu&iacute; en lugar de una simple lista de formularios.</a>
  </div>
  <div id="forms-content-clinic">
    <h2>Qu&eacute; cl&iacute;nica utilizar&aacute;?</h2>
    <table id="forms-content-clinic-table" class="forms-table-location">
      <tr>
        <td><div class="forms-content-number">1</div></td>
        <td><div class="forms-content-number">2</div></td>
        <td><div class="forms-content-number">3</div></td>
      </tr>  
      <tr>
        <td><img id="forms-content-clinic-bloom" class="forms-table-pics" src="/images/bloomingdale_location.jpg" alt="Team Pic"/></td>
        <td><img id="forms-content-clinic-cay" class="forms-table-pics" src="/images/cayuga_location.jpg" alt="Team Pic"/></td>
        <td><img id="forms-content-clinic-clint" class="forms-table-pics" src="/images/clinton_location.jpg" alt="Team Pic"/></td>
      </tr>
      <tr>
        <td>Bloomingdale</td>
        <td>Cayuga</td>
        <td>Clinton</td>
      </tr>
      <tr>
        <td><div class="forms-content-number">4</div></td>
        <td><div class="forms-content-number">5</div></td>
        <td><div class="forms-content-number">6</div></td>
      </tr>  
      <tr>
        <td><img id="forms-content-clinic-craw" class="forms-table-pics" src="/images/crawfordsville_location.jpg" alt="Team Pic"/></td>
        <td><img id="forms-content-clinic-terre" class="forms-table-pics" src="/images/terrehaute_location.jpg" alt="Team Pic"/></td>
        <td><img id="forms-content-clinic-bus" class="forms-table-pics" src="/images/tracker_small.png" alt="Team Pic"/></td>
      </tr>
      <tr>
        <td>Crawfordsville</td>
        <td>Terre Haute</td>
        <td>MSBHC</td>
      </tr>  
    </table>
      <br/>
  </div>
  <div id="forms-content-type">
    <h2>Est&aacute;s buscando un adulto o un ni&ntilde;o?</h2>
    <table id="forms-content-type-table" class="forms-table-age">
      <tr>
      <td>
        <img class="forms-square-green" src="/images/vpchc_green_square.png" alt="Green Square"/>
        <p> </p>
      </td>
      <td>
        <img id="forms-content-type-adult" class="forms-table-pics forms-age-pic" src="/images/forms_adults.png" alt="Adult"/>
        <p>Adulto</p>
      </td>
      </tr>  
      <tr>
      <td>
        <img id="forms-content-type-child" class="forms-table-pics forms-age-pic" src="/images/forms_child.png" alt="Child"/>
        <p>Ni&ntilde;o</p>
      </td>
      <td>
        <img class="forms-square-blue" src="/images/vpchc_blue_square.png" alt="Blue Square"/>
        <p> </p>
      </td>
      </tr>
    </table>
  </div>
  <div id="forms-category">
    <h2 id="page-subtitle">Seleccione una categor&iacute;a.</h2>
    <button id="forms-category-consent" class="vpchcbutton">Consentimiento para la Divulgaci&oacute;n de Datos o Informaci&oacute;n</button>
    <button id="forms-category-notice" class="vpchcbutton">Aviso de Derechos del Paciente / Pr&aacute;cticas de Privacidad</button> 
    <button id="forms-category-programs"class="vpchcbutton">Sliding Fee Scale</button>
  </div>
  <div id="forms-consent">
    <h2 id="page-subtitle">Seleccione un formulario para descargar.</h2>
    <button id="forms-consent-releaseinfo" class="vpchcbutton">
        Liberaci&oacute;n de informaci&oacute;n M&eacute;dica</button> 
 </div>
 <div id="forms-notice">
    <h2 id="page-subtitle">Seleccione un formulario para descargar.</h2>
    <button id="forms-notice-ackbill" class="vpchcbutton">
        Reconocimiento de la Declaraci&oacute;n de Derechos</button>
    <button id="forms-notice-bill" class="vpchcbutton">Derechos del Paciente y Responsabilidades</button> 
    <button id="forms-notice-privacy" class="vpchcbutton">Aviso de Pr&aacute;ctica de Privacidad</button>
  </div>
  <div id="forms-programs">
    <h2 id="page-subtitle">Seleccione un formulario para descargar.</h2>
    <button id="forms-programs-scale" class="vpchcbutton">Sliding Fee Scale</button>
  </div>
  </div>
</main>
<footer><?php include("../../php/includes/footer.php"); ?></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/scripts/vpchc_mobile_menu.js"></script>
<script type="text/javascript">
    /***New patient start***/
    $("#forms-options-newpat").click(function(){
      $("#forms-content-options").hide();
      $("#forms-content-clinic").fadeIn(1000);
    });
    //Choosing a location
    var locationChoice;
    $("#forms-content-clinic-bloom").click(function(){
      locationChoice = 1;
      $("#forms-content-clinic").hide();
      $("#forms-content-type").fadeIn(1000);
    });
    $("#forms-content-clinic-cay").click(function(){
      locationChoice = 2;
      $("#forms-content-clinic").hide();
      $("#forms-content-type").fadeIn(1000);
    });
    $("#forms-content-clinic-clint").click(function(){
      locationChoice = 3;
      $("#forms-content-clinic").hide();
      $("#forms-content-type").fadeIn(1000);
    });
    $("#forms-content-clinic-craw").click(function(){
      locationChoice = 4;
      $("#forms-content-clinic").hide();
      $("#forms-content-type").fadeIn(1000);
    });
    $("#forms-content-clinic-terre").click(function(){
      locationChoice = 5;
      $("#forms-content-clinic").hide();
      $("#forms-content-type").fadeIn(1000);
    });
    $("#forms-content-clinic-bus").click(function(){
      locationChoice = 0;
      $("#forms-content-clinic").hide();
      $("#forms-content-type").fadeIn(1000);
    });
    //Adult choosen
    $("#forms-content-type-adult").click(function(event){
      if(locationChoice >= 0 & locationChoice <= 3){
          window.location.href =  "/files/forms/es/new_patient_packet_adult_bloomcayclint.pdf";
      }else if(locationChoice == 4){
          window.location.href = "/files/forms/es/new_patient_packet_adult_crawfordsville.pdf";
      }else{
          window.location.href = "/files/forms/es/new_patient_packet_adult_terrehaute.pdf";
      }
    });
    //Child choosen
    $("#forms-content-type-child").click(function(){
      if(locationChoice >= 0 & locationChoice <= 3){
          window.location.href = "/files/forms/es/new_patient_packet_child_bloomcayclint.pdf";
      }else if(locationChoice == 4){
          window.location.href = "/files/forms/es/new_patient_packet_child_crawfordsville.pdf";
      }else{
          window.location.href = "/files/forms/es/new_patient_packet_child_terrehaute.pdf";
      }
    });
    /***Other forms start***/
    $("#forms-options-other").click(function(){
      $("#forms-content-options").hide();
      $("#forms-category").fadeIn(1000);
    });
    /*Consent option choosen*/
    $("#forms-category-consent").click(function(){
      $("#forms-category").hide();
      $("#forms-consent").fadeIn(1000);
    });
    //release of info download
    $("#forms-consent-releaseinfo").click(function(){
        window.location.href = "/files/forms/es/release_of_information.pdf";
    });
    /*Notice option choosen*/
    $("#forms-category-notice").click(function(){
      $("#forms-category").hide();
      $("#forms-notice").fadeIn(1000);
    });
    //acknowledgement of receipt download
    $("#forms-notice-ackbill").click(function(){
       window.location.href = "/files/forms/es/acknowledgement_receipt.pdf";
    });
    //bill of rights download
    $("#forms-notice-bill").click(function(){
       window.location.href = "/files/forms/es/patient_bill_of_rights.pdf";
    });
    //notice of privacy practices download
    $("#forms-notice-privacy").click(function(){
       window.location.href = "/files/forms/es/notice_privacy_practices.pdf";
    });
    /*Program option choosen*/
    $("#forms-category-programs").click(function(){
      $("#forms-category").hide();
      $("#forms-programs").fadeIn(1000);
    });
    //sliding fee scale download
    $("#forms-programs-scale").click(function(){
      window.location.href = "/files/forms/es/sliding_fee_scale_reqs.pdf";
    });
</script>
</body>
</html>