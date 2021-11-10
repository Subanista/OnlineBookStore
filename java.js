 /*for navigation bar*/
 function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "col-10 col-s-12 topnav") {
        x.className += " responsive";
    } else {
        x.className = "col-10 col-s-12 topnav";
    }
    }