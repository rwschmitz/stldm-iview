// Provides the animation for each navigation element that has a drop down component

var listeners = [document.getElementById("goServices"), document.getElementById("goReviews"), document.getElementById("goAbout")]; // Puts all the elements in an array
var flag = [false, false, false]; // Initializes all flags to false

const items = listeners.map(function(item) { // Takes every item in the listeners array and maps it to items
   return item; //
});


for (var i = 0; i < items.length; i++) { // Creating all event listeners.
   items[i].addEventListener("mouseenter", drop, false);
   items[i].addEventListener("mouseleave", noDrop, false);
}

function drop(e) { // Determines which drop down menu to show
   var target = $(e.target);
   if (target.is(items[0])) {
      $(function() {
         $('#subdrop1').fadeIn(250).addClass("show");
      });
      flag[0] = true;
   } else if (target.is(items[1])) {
      $(function() {
         $('#subdrop2').fadeIn(250).addClass("show");
      });
      flag[1] = true;
   } else if (target.is(items[2])) {
      $(function() {
         $('#subdrop3').fadeIn(250).addClass("show");
      });
      flag[2] = true;
   }
}

function noDrop() { // Determins which drop down menu to hide
   if (flag[0]) {
      $(function() {
         $('#subdrop1').fadeOut(250).removeClass("show");
      });
      flag[0] = false;
   } else if (flag[1]) {
      $(function() {
         $('#subdrop2').fadeOut(250).removeClass("show");
      });
      flag[1] = false;
   } else if (flag[2]) {
      $(function() {
         $('#subdrop3').fadeOut(250).removeClass("show");
      });
      flag[2] = false;
   }
}
