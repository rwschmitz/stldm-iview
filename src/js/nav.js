// Provides the animation for each navigation element that has a drop down component

var listeners = [document.getElementById("mainDropDown1")]; // Puts all the elements in an array
var flag = [false, false, false]; // Initializes all flags to false

/*
for (var i = 0; i < listeners.length; i++) { // Creating all event listeners.
   listeners[i].addEventListener("mouseenter", drop, false);
   listeners[i].addEventListener("mouseleave", noDrop, false);
}
*/

listeners[0].addEventListener("mouseenter", drop, false);
listeners[0].addEventListener("mouseleave", noDrop, false);



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
