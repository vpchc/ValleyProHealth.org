$(document).ready(function(){
  var $menuCloseCheck = 0;
  var $window = $(window);
    
  //Bind event listener for checking the width
  $(window).resize(checkWidth);
    
  $("#header-img").click(function(){
    window.location.href = "https://valleyprohealth.org";
  }); 
    
  $("#navlinks-mobile-icon").click(function(){
    navlinksMobileToggle();
  });
    
  $(".navlinks-mobile-section").click(function(){
    var $subsection = $(this);
    $subsection.next(".navlinks-mobile-subsection").slideToggle();
  });
  
  function navlinksMobileToggle() {
    $("#navlinks-mobile").slideToggle("slow");
    $("body").css({"overflow":"hidden"});//Hides the scrolling of the body
    $menuCloseCheck++;
    if($menuCloseCheck == 2){//Turns the overflow back on when the menu is closed
      $("body").css({"overflow":"auto"});
      $menuCloseCheck = 0;
    }
  }
    
    
  function checkWidth() {
    var windowsize = $window.width();
    if (windowsize > 800) {
      $("#navlinks-mobile").hide();//Hides the mobile menu when resizing the window to larger than 800px
      $("body").css({"overflow":"auto"});
    }
  }
});