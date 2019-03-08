$(document).ready(function(){
   $(".tab-bar").click(function(){
       var $tab = $(this);
       var $arrow = $tab.children(".drop-arrow").children("img:first")
       var rotationAngle = $arrow.getRotateAngle();
       if(rotationAngle == 0){
         $arrow.rotate( {animateTo:90});
       }else{
         $arrow.rotate( {animateTo:0});
       }
       $tab.next(".tab-box").slideToggle("slow");
    });
});