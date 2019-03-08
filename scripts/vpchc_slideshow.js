$(document).ready(function() {
 var slider = jQuery('#slideshow').bxSlider({
        auto : true,
        mode: 'horizontal',
        speed: 1000,
        pause : 10000,
        pager: false,
        controls : true,
        touchEnabled :true
    });
    //These two functions continue the sliding when the prev and next buttons are clicked.
    $(".bx-prev").click(function () {            
        slider.stopAuto();
        slider.startAuto();
    });
    $(".bx-next").click(function () {            
        slider.stopAuto();
        slider.startAuto();
    });
});