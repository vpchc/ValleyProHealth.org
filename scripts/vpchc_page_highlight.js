$(document).ready(function(){
//pure javascript
var url = window. window.location.pathname;
$('.dropdown a').filter(function() {
    return this.pathname == url;
    }).addClass('active');
});