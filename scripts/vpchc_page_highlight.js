$(document).ready(function(){
var url = window.location.href;
    $('.dropdown a').filter(function() {
        return this.href == url;
    }).addClass('active');
});