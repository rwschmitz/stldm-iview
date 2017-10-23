// Provides the animation for each navigation element that has a drop down component


var flag = [false, false, false]; // Initializes all flags to false

if (window.matchMedia('(min-width: 1200px)').matches) {
    var listeners = [document.getElementById("desktopDropDown")]; // Puts all the elements in an array
    for (var i = 0; i < listeners.length; i++) { // Creating all event listeners.
    listeners[i].addEventListener("mouseenter", drop, false);
    listeners[i].addEventListener("mouseleave", noDrop, false);
    }
} 






function drop(e) { // Determines which drop down menu to show
   var target = $(e.target);
   if (target.is(listeners[0])) {
      $(function() {
         $('#subdrop1').fadeIn(250).addClass("show");
      });
      flag[0] = true;
   } 
}

function noDrop() { // Determins which drop down menu to hide
   if (flag[0]) {
      $(function() {
         $('#subdrop1').fadeOut(250).removeClass("show");
      });
      flag[0] = false;
   }
}


var listeners = [document.getElementById("mobileDropDown")]; // Puts all the elements in an array
var test = listeners[0].addEventListener("touchstart", mobileDrop, false);

function assignMobile () {
    listeners[0].addEventListener("touchstart", mobileDrop, false);
    console.log("assigned");
}


function mobileDrop(e) { // Determines which drop down menu to show
    var target = $(e.target);
    if (target.is(listeners[0])) {
       $(function() {
          $('#subdrop1').fadeIn(250).addClass("show");
       });
       flag[0] = true;
       test = listeners[0].addEventListener("touchstart", mobileNoDrop, false);
       console.log("mobile drop occured");
    } 
 }

function mobileNoDrop() {
    if (flag[0]) {
        $(function() {
           $('#subdrop1').fadeOut(250).removeClass("show");
        });
        flag[0] = false;
        test = listeners[0].addEventListener("touchstart", assignMobile, false);
        console.log("mobile NO DROP occured");
     }
}
