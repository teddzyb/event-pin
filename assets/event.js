document.addEventListener('DOMContentLoaded', function () {
    window.onscroll = function () { stickyPinned() };

    var pinned = document.getElementById("pinned");
    var sticky = pinned.offsetTop;

    function stickyPinned() {
        if (window.pageYOffset > sticky-64) {
            pinned.classList.add("stickyPinned");
        } else {
            pinned.classList.remove("stickyPinned");
        }
    }
})