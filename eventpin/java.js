document.addEventListener('DOMContentLoaded', function () {
    window.onscroll = function () { stickyPinned() };

    var pinned = document.getElementById("square");
    var sticky = pinned.offsetTop;

    function stickyPinned() {
        if (window.pageYOffset > sticky-88) {
            pinned.classList.add("stickyPin");
            pinned.classList.remove("square");
        } else {
            pinned.classList.remove("stickyPin");
            pinned.classList.add("square");
        }
    }
    
    })

    var btnContainer = document.getElementById("myDIV");


    var btns = btnContainer.getElementsByClassName("btn");


    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
    }
