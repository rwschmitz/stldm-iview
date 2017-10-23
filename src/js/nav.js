// Provides the animation for each navigation element that has a drop down component




if (window.matchMedia('(min-width: 992px)').matches) {
    var flag = [false, false, false]; // Initializes all flags to false
    var listeners = [document.getElementById("desktopDropDown")]; // Puts all the elements in an array
    for (var i = 0; i < listeners.length; i++) { // Creating all event listeners.
    listeners[i].addEventListener("mouseenter", drop, false);
    listeners[i].addEventListener("mouseleave", noDrop, false);
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

} 

if(window.matchMedia('(max-width: 991px)').matches) {
    var flag = [false, false, false]; // Initializes all flags to false
    var listeners = [document.getElementById("mobileDropDown")]; // Puts all the elements in an array
    listeners[0].addEventListener("click", mobileDrop, false);


    function mobileDrop(e) { // Determines which drop down menu to show
        var target = $(e.target);
        if (target.is(listeners[0])) {
        $(function() {
            $('#subdrop1').fadeIn(250).addClass("show");
        });
        flag[0] = true;
        console.log("mobile drop occured");
        listeners[0].removeEventListener("click", mobileDrop, false);
        listeners[0].addEventListener("click", mobileNoDrop, false);
        } 
    }

    function mobileNoDrop(e) {
        var target = $(e.target);
        if (flag[0] === true && target.is(listeners[0])) {
            $(function() {
            $('#subdrop1').fadeOut(250).removeClass("show");
            });
            flag[0] = false;
            console.log("mobile NO DROP occured");
            listeners[0].removeEventListener("click", mobileNoDrop, false);
            listeners[0].addEventListener("click", mobileDrop, false);
        }
    }
}
