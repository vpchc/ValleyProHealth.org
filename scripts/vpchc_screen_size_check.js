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